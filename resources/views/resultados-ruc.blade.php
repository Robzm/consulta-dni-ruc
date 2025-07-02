@extends('layouts.app')

@section('title', 'Resultados RUC - Prueba')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6 my-8">
    <!-- Encabezado -->
    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold text-blue-800">RESULTADOS DE CONSULTA RUC</h1>
        <div class="mt-2 p-2 bg-blue-100 inline-block rounded-lg">
            <span class="font-semibold">RUC:</span> {{ $data['numero'] ?? '-' }}
        </div>
    </div>

    <!-- Datos principales -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Columna izquierda -->
        <div class="space-y-4">
            <div class="p-4 bg-gray-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Razón Social</h2>
                <p class="text-lg font-medium">{{$data['nombre_o_razon_social'] ?? '-'}} </p>
            </div>
            
            <div class="p-4 bg-gray-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Tipo de Contribuyente</h2>
                <p>{{$data['tipo_contribuyente'] ?? '-'}}</p>
            </div>
        </div>
        
        <!-- Columna derecha -->
        <div class="space-y-4">
            <div class="p-4 bg-yellow-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Estado</h2>
                <p class="inline-block px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 {{ $data['estado'] == 'ACTIVO' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">{{$data['estado'] ?? '-'}} </p>
            </div>
            
            <div class="p-4 bg-green-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Condición</h2>
                <p class="inline-block px-3 py-1 rounded-full bg-green-100 text-green-800 {{ $data['condicion'] == 'HABIDO' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{$data['condicion'] ?? '-'}} </p>
            </div>
        </div>
    </div>

    <!-- Dirección -->
    <div class="p-6 bg-blue-50 rounded-lg mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Dirección</h2>
        <p class="mb-2 font-medium">{{$data['direccion_completa'] ?? '-'}} </p>
        
        <div class="mt-4 grid grid-cols-3 gap-4">
            <div>
                <span class="block text-sm text-gray-500">Departamento</span>
                <p>{{$data['departamento'] ?? '-'}} </p>
            </div>
            <div>
                <span class="block text-sm text-gray-500">Provincia</span>
                <p>{{$data['provincia'] ?? '-'}}</p>
            </div>
            <div>
                <span class="block text-sm text-gray-500">Distrito</span>
                <p>{{$data['distrito'] ?? '-'}}</p>
            </div>
        </div>
    </div>

    <!-- Ubigeo -->
    <div class="p-4 bg-gray-100 rounded-lg mb-8">
        <h2 class="text-lg font-semibold mb-2 text-gray-800">Ubigeo SUNAT</h2>
        <p>{{$data['ubigeo_sunat'] ?? '-'}} </p>
    </div>

    <!-- Botón de regreso -->
   <div class="text-center">
        <a href="/" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
            ← Volver a consultar
        </a>
    </div>
</div>
@endsection