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


                    {{$clientes}}
                    <br>
                    @foreach ($clientes as $cliente)
                    {{$cliente}}
                    <br>
                    br
                    @endforeach

                    <table>
                        <thead>
                            <th>
                                Dni
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>

                            </th>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>

                                    <td> <a href="{{ route('clientes.show', $cliente) }}">{{ $cliente->dni }} </a></td>
                                    <td> {{ $cliente->nombre }} </td>
                                    <td> <a href="{{ route('clientes.show', $cliente) }}">Mostrar</a> </td>
                                    <td> <a href="{{ route('clientes.edit', $cliente) }}">Editar</a> </td>
                                    <td>
                                        <form action="{{ route('clientes.destroy', $cliente) }}" method="post">

                                            @csrf
                                            @method('delete')

                                            <button type="submit">borrar</button>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach

                            <br>

                            <a href="{{ route('clientes.create') }}">Crear cliente</a>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
