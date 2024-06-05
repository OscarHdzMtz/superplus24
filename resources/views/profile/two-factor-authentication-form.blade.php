<x-action-section>
    <x-slot name="title">
        {{ __('Autenticación de dos factores') }}
    </x-slot>

    <x-slot name="description">
        {{-- {{ __('Agregue seguridad adicional a su cuenta mediante la autenticación de dos factores.') }} --}}
        {{ __('') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                @if ($showingConfirmation)
                    {{ __('Termine de habilitar la autenticación de dos factores.') }}
                @else
                    {{ __('Ha habilitado la autenticación de dos factores.') }}
                @endif
            @else
                {{ __('No ha habilitado la autenticación de dos factores.') }}
            @endif
        </h3>

        <div class="max-w-xl mt-3 text-sm text-gray-600">
            <p>
                {{ __('Cuando la autenticación de dos factores está habilitada, se le solicitará un token aleatorio seguro durante el inicio de sesion. Este token se genera desde la aplicación de Google Authenticator.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="max-w-xl mt-4 text-sm text-gray-600">
                    <p class="font-semibold">
                        @if ($showingConfirmation)
                            {{ __('
                            Para terminar de habilitar la autenticación de dos factores, escanee el siguiente código QR usando la aplicación de autenticación de su teléfono o ingrese la clave de configuración. posterior a eso ingrese el código temporal generado en la aplicacion authenticador y presione confirmar.') }}
                        @else
                            {{ __('La autenticación de dos factores ahora está habilitada. Escanee el siguiente código QR usando la aplicación de autenticación de su teléfono o ingrese la clave de configuración.') }}
                        @endif
                    </p>
                </div>

                <div class="inline-block p-2 mt-4 bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div class="max-w-xl mt-4 text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Clave de configuración') }}: {{ decrypt($this->user->two_factor_secret) }}
                    </p>
                </div>

                @if ($showingConfirmation)
                    <div class="mt-4">
                        <x-label for="code" value="{{ __('Codigo') }}" />

                        <x-input id="code" type="text" name="code" class="block w-1/2 mt-1" inputmode="numeric" autofocus autocomplete="one-time-code"
                            wire:model="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />

                        <x-input-error for="code" class="mt-2" />
                    </div>
                @endif
            @endif

            @if ($showingRecoveryCodes)
                <div class="max-w-xl mt-4 text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Guarde estos códigos de recuperación en un administrador de contraseñas seguro. Se pueden utilizar para recuperar el acceso a su cuenta si pierde su dispositivo de autenticación de dos factores.') }}
                    </p>
                </div>

                <div class="grid max-w-xl gap-1 px-4 py-4 mt-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-button type="button" wire:loading.attr="disabled">
                        {{ __('Habilitar') }}
                    </x-button>
                </x-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    {{-- BOTON PARA REGENERAR CODIGO DE SEGURIDAD --}}
                   {{--  <x-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-secondary-button class="me-3">
                            {{ __('Regenerar códigos de recuperación') }}
                        </x-secondary-button>
                    </x-confirms-password> --}}
                @elseif ($showingConfirmation)
                    <x-confirms-password wire:then="confirmTwoFactorAuthentication">
                        <x-button type="button" class="me-3" wire:loading.attr="disabled">
                            {{ __('Confirmar') }}
                        </x-button>
                    </x-confirms-password>
                @else
                {{-- MOSTRAR CODIGO DE DE SEGURIDAD TWO FACTOR --}}
                    {{-- <x-confirms-password wire:then="showRecoveryCodes">
                        <x-secondary-button class="me-3">
                            {{ __('Mostrar códigos de recuperación') }}
                        </x-secondary-button>
                    </x-confirms-password> --}}
                @endif

                @if ($showingConfirmation)
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-secondary-button wire:loading.attr="disabled">
                            {{ __('Cancelar') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-danger-button wire:loading.attr="disabled">
                            {{ __('Desabilitar') }}
                        </x-danger-button>
                    </x-confirms-password>
                @endif

            @endif
        </div>
    </x-slot>
</x-action-section>
