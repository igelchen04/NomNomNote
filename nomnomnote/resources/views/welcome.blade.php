<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <x-head/>
    <body class="bg-nomblue-pastel text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        </header>


             @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                            <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal"
                            >
                            Dashboard
                            </a>
                        @else
                            <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 font-sans text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal"
                            >
                            Log in
                            </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 font-sans border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18]  dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Regis
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif

            <!-- <img src="{{ asset('images/example.jpg') }}" alt="Example Image"> -->

        
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
