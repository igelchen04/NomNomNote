<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head />

    <body class="bg-nomblue-pastel text-[#1b1b18] flex items-center justify-center min-h-screen">
        <div class="flex flex-col lg:flex-row items-center justify-center gap-12">

            <!-- Left Side: Logo and Title -->
            <div class="flex flex-col items-center gap-4">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="w-32 h-32" />
                <h1 class="font-inter text-nomblue-dark text-5xl lg:text-7xl font-bold">NOMNOMNOTE</h1>
            </div>

            @if (Route::has('login'))
                <div class="flex flex-col items-center gap-4 w-80">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-4 font-inter bg-nomblue-azur text-nomblue-pastel rounded-full w-full text-xl text-center">
                            Registrieren
                        </a>
                    @endif
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-4 font-inter bg-nomblue-azur text-nomblue-pastel rounded-full w-full text-xl text-center">
                        Anmelden
                    </a>
                </div>
            @endif

        </div>

    </body>
</html>
