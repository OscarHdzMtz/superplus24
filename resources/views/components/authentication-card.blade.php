<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div class="mb-8 transform hover:scale-105 transition-transform duration-500">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-8 py-10 glass-card overflow-hidden sm:rounded-2xl transition-all duration-300">
        {{ $slot }}
    </div>
</div>
