<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsultaController extends Controller
{
    public function consulta(Request $request)          
    {
        $validated = $request->validate([
            'tipo' => 'required|in:dni,ruc',
            'numero' => 'required|numeric|digits_between:8,11'
        ]);

        try {
            $url = $this->buildApiUrl($validated['tipo'], $validated['numero']);
            
            $response = Http::withToken(config('services.factiliza.token'))
                ->timeout(15)
                ->get($url);

                
                

            return $response->successful()
                ? $this->showResults($validated['tipo'], $response->json()['data'])
                : back()->with('error', 'Error: ' . $response->status());

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
