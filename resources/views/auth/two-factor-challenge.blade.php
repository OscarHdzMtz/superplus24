<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div x-data="{ recovery: false }" class="space-y-6">
            <div class="space-y-2">
                <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Seguridad de la Cuenta</h1>
                <p class="text-sm text-gray-500" x-show="!recovery">
                    {{ __('Favor de solicitar al área de sistemas el código generado por la aplicación autenticadora.') }}
                </p>
                <p class="text-sm text-gray-500" x-cloak x-show="recovery">
                    {{ __('Confirme el acceso ingresando un código de recuperación de emergencia.') }}
                </p>
            </div>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}" class="space-y-6 text-gray-900">
                @csrf

                <div class="space-y-2" x-show="!recovery">
                    <x-label for="code" value="{{ __('Código del Autenticador') }}" class="text-gray-700" />
                    <x-input id="code" class="block w-full py-3" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" placeholder="000000" />
                </div>

                <div class="space-y-2" x-cloak x-show="recovery">
                    <x-label for="recovery_code" value="{{ __('Código de Recuperación') }}" class="text-gray-700" />
                    <x-input id="recovery_code" class="block w-full py-3" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" placeholder="abcde-fghij" />
                </div>

                <div class="flex flex-col space-y-4 pt-2">
                    <x-button class="w-full justify-center bg-blue-600 hover:bg-blue-700 py-3 rounded-xl transition-all duration-300 transform active:scale-95 shadow-lg shadow-blue-500/20">
                        {{ __('Confirmar Identidad') }}
                    </x-button>

                    <div class="flex justify-center border-t border-gray-200 pt-4">
                        <button type="button" class="text-xs text-gray-500 hover:text-blue-600 transition-colors uppercase tracking-wider font-semibold"
                                        x-show="!recovery"
                                        x-on:click="
                                            recovery = true;
                                            $nextTick(() => { $refs.recovery_code.focus() })
                                        ">
                            {{ __('Usar código de recuperación') }}
                        </button>

                        <button type="button" class="text-xs text-gray-500 hover:text-blue-600 transition-colors uppercase tracking-wider font-semibold"
                                        x-cloak
                                        x-show="recovery"
                                        x-on:click="
                                            recovery = false;
                                            $nextTick(() => { $refs.code.focus() })
                                        ">
                            {{ __('Usar código de autenticación') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
