@extends('layouts.app')

@section('title', 'Resultados RUC - Prueba')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6 my-8">
    <!-- Encabezado -->
    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold text-blue-800">RESULTADOS DE CONSULTA RUC</h1>
        <div class="mt-2 p-2 bg-blue-100 inline-block rounded-lg">
            <span class="font-semibold">RUC:</span> 20552103816
        </div>
    </div>

    <!-- Datos principales -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Columna izquierda -->
        <div class="space-y-4">
            <div class="p-4 bg-gray-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Razón Social</h2>
                <p class="text-lg font-medium">AGROLIGHT PERU S.A.C.</p>
            </div>
            
            <div class="p-4 bg-gray-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Tipo de Contribuyente</h2>
                <p>SOCIEDAD ANONIMA CERRADA</p>
            </div>
        </div>
        
        <!-- Columna derecha -->
        <div class="space-y-4">
            <div class="p-4 bg-yellow-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Estado</h2>
                <p class="inline-block px-3 py-1 rounded-full bg-yellow-100 text-yellow-800">SUSPENSION TEMPORAL</p>
            </div>
            
            <div class="p-4 bg-green-50 rounded-lg">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Condición</h2>
                <p class="inline-block px-3 py-1 rounded-full bg-green-100 text-green-800">HABIDO</p>
            </div>
        </div>
    </div>

    <!-- Dirección -->
    <div class="p-6 bg-blue-50 rounded-lg mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Dirección</h2>
        <p class="mb-2 font-medium">PJ. JORGE BASADRE NRO. 158 URB. POP LA UNIVERSAL 2DA ET.</p>
        <p>LIMA - LIMA - SANTA ANITA</p>
        <div class="mt-4 grid grid-cols-3 gap-4">
            <div>
                <span class="block text-sm text-gray-500">Departamento</span>
                <p>LIMA</p>
            </div>
            <div>
                <span class="block text-sm text-gray-500">Provincia</span>
                <p>LIMA</p>
            </div>
            <div>
                <span class="block text-sm text-gray-500">Distrito</span>
                <p>SANTA ANITA</p>
            </div>
        </div>
    </div>

    <!-- Ubigeo -->
    <div class="p-4 bg-gray-100 rounded-lg mb-8">
        <h2 class="text-lg font-semibold mb-2 text-gray-800">Ubigeo SUNAT</h2>
        <p>150137 (15 - 1501 - 150137)</p>
    </div>

    <!-- Botón de regreso -->
    <div class="text-center">
        <button class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
            ← Volver a consultar
        </button>
    </div>
</div>
@endsection