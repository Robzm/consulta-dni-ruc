<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;


class ConsultaController extends Controller
{
    public function consulta(Request $request)
    {
        $validated = $request->validate([
            'tipo' => 'required|in:dni,ruc',
            'numero' => 'required|numeric|digits_between:8,11'
        ]);

        try {
            $responseData = Cache::remember("consulta:{$validated['tipo']}:{$validated['numero']}", 3600, function () use ($validated) {
                $url = $this->buildApiUrl($validated['tipo'], $validated['numero']);

                $response = Http::withToken(config('services.factiliza.token'))
                    ->timeout(15)
                    ->get($url);

                if ($response->successful()) {
                    return $response->json()['data'];
                }

                throw new \Exception("API error: " . $response->status());
            });

            return $this->showResults($validated['tipo'], $responseData);
        } catch (\Exception $e) {
            return back()->with('error', 'Servicio no disponible');
        }
    }

    protected function buildApiUrl($tipo, $numero)
    {
        return config('services.factiliza.base_url') .
            config("services.factiliza.endpoints.$tipo") .
            $numero;
    }

    protected function showResults($tipo, $data)
    {
        $viewName = $tipo === 'dni' ? 'resultados-dni' : 'resultados-ruc';
        return view($viewName, [
            'tipo' => $tipo,
            'data' => $data
        ]);
    }
}
