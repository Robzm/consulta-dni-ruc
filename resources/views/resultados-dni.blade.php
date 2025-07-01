@extends('layouts.app')

@section('title', 'Resultados DNI - Prueba')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6 my-8">
    <!-- Encabezado -->
    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold text-blue-800">RESULTADOS DE CONSULTA DNI</h1>
        <div class="mt-2 p-2 bg-blue-100 inline-block rounded-lg">
            <span class="font-semibold">DNI:</span> {{ $data['numero'] ?? '-' }}
        </div>
    </div>

    <!-- Datos personales -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Columna izquierda -->
        <div class="space-y-4">
            <div class="p-4 bg-gray-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Nombre Completo</h2>
                <p class="text-lg font-medium">
                    {{ $data['nombre_completo'] ?? '' }}
                </p>
            </div>
            
            <div class="p-4 bg-gray-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Nombres</h2>
                <p>{{ $data['nombres'] ?? '-' }}</p>
            </div>
        </div>
        
        <!-- Columna derecha -->
        <div class="space-y-4">
            <div class="p-4 bg-gray-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Apellidos</h2>
                <p>{{ $data['apellido_paterno'] ?? '' }} {{ $data['apellido_materno'] ?? '' }}</p>
            </div>
            
            <div class="p-4 bg-gray-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Sexo</h2>
                <p class="text-gray-500">{{ $data['sexo'] ?: 'No especificado' }}</p>
            </div>
        </div>
    </div>

    <!-- Dirección -->
    <div class="p-6 bg-blue-50 rounded-lg mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Dirección</h2>
        <p class="mb-2 font-medium">{{ $data['direccion'] ?? '-' }}</p>
        <p>{{ $data['direccion_completa'] ?? '-' }}</p>
        <div class="mt-4 grid grid-cols-3 gap-4">
            <div>
                <span class="block text-sm text-gray-500">Departamento</span>
                <p>{{ $data['departamento'] ?? '-' }}</p>
            </div>
            <div>
                <span class="block text-sm text-gray-500">Provincia</span>
                <p>{{ $data['provincia'] ?? '-' }}</p>
            </div>
            <div>
                <span class="block text-sm text-gray-500">Distrito</span>
                <p>{{ $data['distrito'] ?? '-' }}</p>
            </div>
        </div>
    </div>

    <!-- Ubigeo -->
    <div class="p-4 bg-gray-100 rounded-lg mb-8">
        <h2 class="text-lg font-semibold mb-2 text-gray-800">Ubigeo</h2>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <span class="block text-sm text-gray-500">RENIEC</span>
                <p>{{ $data['ubigeo_reniec'] ?? '-' }}</p>
            </div>
            <div>
                <span class="block text-sm text-gray-500">SUNAT</span>
                <p>{{ $data['ubigeo_sunat'] ?? '-' }}</p>
            </div>
        </div>

        {{-- Mostrar array 'ubigeo' sin error --}}
       
    </div>

    <!-- Botón de regreso -->
    <div class="text-center">
        <a href="/" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
            ← Volver a consultar
        </a>
    </div>
</div>
@endsection
