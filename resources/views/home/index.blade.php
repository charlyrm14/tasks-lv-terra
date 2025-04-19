@extends('layouts/master')

@section('title', 'Inicio')

@section('content')
    <section>
        <h1 class="text-start text-4xl uppercase"> Tareas </h1>
        <p class="mt-2 mb-6 text-indigo-500"> Listado de tareas </p>
        <div class="flex justify-end">
            <a href="{{ route('tasks.create') }}"
                class="bg-black px-5 py-2 text-white hover:opacity-75 cursor-pointer rounded flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg> Agregar tarea
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mt-10 gap-x-3">
            <div class="border border-gray-300 rounded shadow-md divide-y-1 divide-gray-300 px-2">
                <div class="px-2 my-2">
                    <p class="uppercase text-start text-lg"> Pendientes </p>
                </div>
                <div class="px-1 mt-6 border-1 border-gray-300 rounded mb-5 cursor-pointer">
                    <div class="flex w-full items-center">
                        <div class="w-1/5 p-2">
                            <div class="bg-gray-200 p-4 rounded border-2 border-gray-300"></div>
                        </div>
                        <div class="w-4/5 p-2">
                            <p class="text-normal text-indigo-500"> Ecommerce </p>
                            <p class="text-sm"> Una breve descripción </p>
                        </div>
                    </div>
                    <div class="my-2 border-t-1 border-gray-300">
                        <div class="flex justify-between mt-2 px-2">
                            <button class="text-gray-400 hover:text-red-500 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                            <a 
                                href="{{ route('tasks.edit', 1) }}"
                                class="uppercase bg-blue-600 px-3 rounded cursor-pointer text-white hover:opacity-75">
                                    Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-violet-400 rounded shadow-md divide-y-1 divide-gray-300 px-2">
                <div class="px-2 my-2">
                    <p class="uppercase text-start text-lg"> En Espera </p>
                </div>
                <div class="px-1 mt-6 border-1 border-gray-300 rounded mb-5 cursor-pointer">
                    <div class="flex w-full items-center">
                        <div class="w-1/5 p-2">
                            <div class="bg-gray-200 p-4 rounded border-2 border-gray-300"></div>
                        </div>
                        <div class="w-4/5 p-2">
                            <p class="text-normal text-indigo-500"> Ecommerce </p>
                            <p class="text-sm"> Una breve descripción </p>
                        </div>
                    </div>
                    <div class="my-2 border-t-1 border-gray-300">
                        <div class="flex justify-between mt-2 px-2">
                            <button class="text-gray-400 hover:text-red-500 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                            <a 
                                href="{{ route('tasks.edit', 2) }}"
                                class="uppercase bg-blue-600 px-3 rounded cursor-pointer text-white hover:opacity-75">
                                    Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-blue-400 rounded shadow-md divide-y-1 divide-gray-300 px-2">
                <div class="px-2 my-2">
                    <p class="uppercase text-start text-lg"> En revisión </p>
                </div>
                <div class="px-1 mt-6 border-1 border-gray-300 rounded mb-5 cursor-pointer">
                    <div class="flex w-full items-center">
                        <div class="w-1/5 p-2">
                            <div class="bg-gray-200 p-4 rounded border-2 border-gray-300"></div>
                        </div>
                        <div class="w-4/5 p-2">
                            <p class="text-normal text-indigo-500"> Ecommerce </p>
                            <p class="text-sm"> Una breve descripción </p>
                        </div>
                    </div>
                    <div class="my-2 border-t-1 border-gray-300">
                        <div class="flex justify-between mt-2 px-2">
                            <button class="text-gray-400 hover:text-red-500 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                            <a 
                                href="{{ route('tasks.edit', 3) }}"
                                class="uppercase bg-blue-600 px-3 rounded cursor-pointer text-white hover:opacity-75">
                                    Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-green-400 rounded shadow-md divide-y-1 divide-gray-300 px-2">
                <div class="px-2 my-2">
                    <p class="uppercase text-start text-lg"> Completadas </p>
                </div>
                <div class="px-1 mt-6 border-1 border-gray-300 rounded mb-5 cursor-pointer">
                    <div class="flex w-full items-center">
                        <div class="w-1/5 p-2">
                            <div class="bg-gray-200 p-4 rounded border-2 border-gray-300"></div>
                        </div>
                        <div class="w-4/5 p-2">
                            <p class="text-normal text-indigo-500"> Ecommerce </p>
                            <p class="text-sm"> Una breve descripción </p>
                        </div>
                    </div>
                    <div class="my-2 border-t-1 border-gray-300">
                        <div class="flex justify-between mt-2 px-2">
                            <button class="text-gray-400 hover:text-red-500 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                            <a 
                                href="{{ route('tasks.edit', 4) }}"
                                class="uppercase bg-blue-600 px-3 rounded cursor-pointer text-white hover:opacity-75">
                                    Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection