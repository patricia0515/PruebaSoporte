<!-- Ya no se extiende de una plantilla, ahora se pone como un componente.
De igual forma yo no hacemos uso de las directivas  @yiel y contentc, ahora
se hace uso de los slots - slot con asignación de nombre   -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Montechelo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Bienvenido al Home</h1>
                
            </div>
        </div>
    </div>
</x-app-layout>