<x-app-layout>
    EST ES LA VISTA INDEX USER

    <div class="container">
        <!-- Aqui pongo la tabla que me busque con Tailwind CSS v2.0+ -->
        <div class="row">
            <!-- component -->
            <h1 class="upperCase text-center text-3xl font-bold">Datos Personales</h1>



            <body class="flex items-center justify-center">
                <div class="container">
                    <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                        <thead class="text-white">
                            <tr class="bg-green-300 flex flex-col flex-no wrap sm:table-row  rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                <th class="p-3 text-left">ID</th>
                                <th class="p-3 text-left">NOMBRE</th>
                                <th class="p-3 text-left">EMAIL</th>
                                <th class="p-3 text-left">INGRESO</th>
                                
                            </tr>
                        </thead>
                        <tbody class="flex-1 sm:flex-none">


                            <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$id = Auth::user()->id}}</td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$name = Auth::user()->name}}</td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3 ">{{$email = Auth::user()->email}}</td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3 ">{{$created_at = Auth::user()->created_at}}</td>
                            </tr>

                        </tbody>
                    </table>
                    <!--Gracias al metodo render () podemos paginar los datos-->

                </div>
            </body>

            <style>
                html,
                body {
                    height: 100%;
                }

                @media (min-width: 640px) {
                    table {
                        display: inline-table !important;
                    }

                    thead tr:not(:first-child) {
                        display: none;
                    }
                }

                td:not(:last-child) {
                    border-bottom: 0;
                }

                th:not(:last-child) {
                    border-bottom: 2px solid rgba(0, 0, 0, .1);
                    background-color: rgba(110, 231, 183, var(--tw-bg-opacity));

                }
            </style>
        </div>
    </div>
</x-app-layout>