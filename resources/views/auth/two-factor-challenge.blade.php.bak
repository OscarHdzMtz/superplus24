<x-guest-layout>
    
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{-- {{ __('Confirme el acceso a su cuenta ingresando el código generado por la aplicación authenticador') }} --}}
                {{ __('Favor de solcitar al area de sistemas el código generado por la aplicación authenticador para confirmar el acceso a su cuenta') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-cloak x-show="recovery">
                {{ __('Confirme el acceso a su cuenta ingresando un código de recuperación de emergencia.') }}
            </div>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4 text-center" x-show="! recovery">
                    <x-label for="code" value="{{ __('Codigo Authenticador') }}" />
                    <x-input id="code" class="block w-full mt-1" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4 text-center" x-cloak x-show="recovery">
                    <x-label for="recovery_code" value="{{ __('Código de recuperación') }}" />
                    <x-input id="recovery_code" class="block w-full mt-1" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 underline cursor-pointer hover:text-gray-900"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Utilizar un código de recuperación') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 underline cursor-pointer hover:text-gray-900"
                                    x-cloak
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Utilizar un código del autenticador') }}
                    </button>

                    <x-button class="ms-4">
                        {{ __('Iniciar Sesion') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
