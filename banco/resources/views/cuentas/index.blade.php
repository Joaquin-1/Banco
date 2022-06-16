<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <table>
                        <thead>
                            <th>
                                Numero
                            </th>
                            <th>

                            </th>
                        </thead>
                        <tbody>
                            @foreach ($cuentas as $cuenta)
                                <tr>
                                    <td> {{ $cuenta->numero }} </td>

                                    <td>
                                        <a href="{{ route('cuentas.titulares',$cuenta) }}">añadir titular</a>
                                    </td>

                                </tr>
                            @endforeach

                            <br>



                        </tbody>
                    </table>

                    <a href="{{ route('cuentas.create') }}">Crear cuenta</a>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
