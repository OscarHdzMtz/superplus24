@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-white text-gray-900 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm transition-all duration-200 placeholder:text-gray-400']) !!}>
