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
                        <form method="POST" action="{{ route('cuentas.store') }}">
                            @csrf
                            @method('POST')
                            <div>
                                <x-label for="numero" value="Numero" />

                                <x-input
                                id="numero"
                                class="block mt-1 w-full"
                                type="text"
                                name="numero"
                                placeholder="Numero"
                                value="{{ old('numero') }}" />
                                @error('numero')
                                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="flex justify-center mt-4">
                                <x-button>
                                    Submit
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
