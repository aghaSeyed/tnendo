<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
            <p style="color : green; font-family: vazirmatn ; font-weight:bold;"> رمز عبور شما همان کد ملی شماست.</p>
            </div>
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('کدملی')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('رمز عبور')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span
                        class="ml-2 text-sm text-gray-600">{{ __('مرا به خاطر داشته باش!') }}</span>
                </label>
            </div>
            <div class="mt-4">
                
            </div>
            <div class="mt-4">
                @if(Route::has('register'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('register') }}">
                        {{ __('ثبت نام') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-3 w-full">
                    {{ __('ورود') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
