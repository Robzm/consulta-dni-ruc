@extends('layouts.app')
@section('title', 'Consultar DNI/RUC')

@section('content')
<div class=" w-[400px]  bg-white rounded-lg shadow-md p-6 my-[200px]" >
    <h1 class="text-2xl font-bold text-center mb-6">Consultor de DNI/RUC</h1>
    
    <form action="{{ route('consulta') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="tipo" class="block text-gray-700 mb-2">Tipo de documento:</label>
            <select name="tipo" id="tipo" class="w-full px-3 py-2 border rounded-lg">
                <option value="dni">DNI</option>
                <option value="ruc">RUC</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label for="numero" class="block text-gray-700 mb-2">Número:</label>
            <input type="text" name="numero" id="numero" 
                   class="w-full px-3 py-2 border rounded-lg" 
                   placeholder="Ingrese el número" required>
        </div>
        
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg cursor-pointer">
            Consultar
        </button>
    </form>
</div>
@endsection
