@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Algo salió mal.') }}</div>

        <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
            @foreach ($errors->all() as $error)                                
                {{-- <li>{{ $error }}</li> --}}
                @if ($error == "The provided two factor authentication code was invalid.")
                    <li>El código de autenticación de dos factores proporcionado no es válido.</li>
                @elseif($error == "The email has already been taken.")
                    <li>El correo ya se encuentra registrado.</li>
                @else
                    <li>{{ $error }}</li>
                @endif 
                
            @endforeach
        </ul>
    </div>
@endif
