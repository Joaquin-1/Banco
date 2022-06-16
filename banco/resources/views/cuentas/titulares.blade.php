<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear cuenta
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col items-center">
                    <div class="flex flex-col items-center mt-4">


                        <form method="POST" action="{{ route('cuentas.anadir',$cuenta) }}">
                            @csrf
                            @method('POST')

                            <select name="cliente_id" id="">

                                @foreach ($clientes  as $cliente)



                                <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>


                                @endforeach
                                <br>

                            </select>

                            <button type="submit">enviar</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
