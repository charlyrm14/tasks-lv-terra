@extends('layouts/master')

@section('title', 'Nueva tarea')

@section('content')
<section>
        <h1 class="text-start text-4xl uppercase"> Tareas </h1>
        <p class="mt-2 mb-6 text-indigo-500"> Nueva tarea </p>
        <div class="flex justify-end">
            <a href="{{ route('home') }}"
                class="bg-black px-5 py-2 text-white hover:opacity-75 cursor-pointer rounded flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                    </svg> Regresar
            </a>
        </div>
        <div class="mx-auto w-full max-w-[600px] mt-10">
            <div class="border-1 border-gray-300 shadow-lg px-10 py-5 rounded">
                <h2 class="uppercase text-indigo-600 text-xl"> Ingresa los siguientes datos </h2>
                <p class="text-gray-500 mb-5"> Crea una nueva tarea</p>
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf

                    <div>
                        <label for="name" class="uppercase mb-3"> Nombre </label>
                        <input 
                            type="text"
                            id="name" 
                            name="name" 
                            placeholder="Ej; ecommerce, sitio web"
                            class="w-full my-3 border-1 border-gray-300 px-5 py-3 rounded"
                            value="{{ old('name') }}"/>
                        @error('name')
                        <p class="pl-1 text-red-500 text-sm"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="status" class="uppercase mb-3"> Estatus </label>
                        <div class="flex space-x-4 mt-3">
                            <label class="flex items-center space-x-2">
                                <input 
                                    type="radio" 
                                    name="status" 
                                    value="pendiente" 
                                    class="accent-indigo-500"
                                    {{ old('status') === 'pendiente' ? 'checked' : '' }}>
                                <span class="uppercase"> Pendiente </span>
                            </label>

                            <label class="flex items-center space-x-2">
                                <input 
                                    type="radio" 
                                    name="status" 
                                    value="en_espera" 
                                    class="accent-indigo-500"
                                    {{ old('status') === 'en_espera' ? 'checked' : '' }}>
                                <span class="uppercase"> En espera </span>
                            </label>

                            <label class="flex items-center space-x-2">
                                <input 
                                    type="radio" 
                                    name="status" 
                                    value="en_revision" 
                                    class="accent-indigo-500"
                                    {{ old('status') === 'en_revision' ? 'checked' : '' }}>
                                <span class="uppercase"> En revisión </span>
                            </label>

                            <label class="flex items-center space-x-2">
                                <input 
                                    type="radio" 
                                    name="status" 
                                    value="completada" 
                                    class="accent-indigo-500"
                                    {{ old('status') === 'completada' ? 'checked' : '' }}>
                                <span class="uppercase"> Completado </span>
                            </label>

                        </div>
                        @error('status')
                        <p class="mt-2 pl-1 text-red-500 text-sm"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="description" class="uppercase mb-3"> Descripción </label>
                        <textarea 
                            type="text"
                            id="description" 
                            name="description" 
                            class="w-full mt-3 border-1 border-gray-300 px-5 py-3 rounded">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="mt-1 pl-1 text-red-500 text-sm"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="flex justify-between items-center mt-10">
                        <a
                            href="{{ route('home') }}"
                            class="uppercase border border-red-500 text-red-500 py-2 px-3 rounded-lg cursor-pointer hover:bg-red-500 hover:text-white">
                            Cancelar
                        </a>
                        <button
                            type="submit"
                            class="uppercase bg-black text-white py-2 px-5 rounded-lg cursor-pointer flex items-center gap-2 hover:opacity-75">
                                Crear tarea
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                        </button>
                    </div>

                </form>
            </div>
        </div>
</section>
@endsection
