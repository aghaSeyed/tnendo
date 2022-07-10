<x-guest-layout>
    
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <div class="mt-1" style="margin-bottom : 10px; text-align: center;">
        <h1>فرم ثبت نام</h1>
</div>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-3" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('نام')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>


            <!-- family -->

            <div class="mt-3">
                <x-label for="family" :value="__('نام خانوادگی')" />

                <x-input id="family" class="block mt-1 w-full" type="text" name="family" :value="old('family')" required
                    autofocus />
            </div>

            <!-- gender -->
            <div class="mt-3">
                <x-label for="gender" :value="__('جنسیت')" />
                <select name="gender" id="gender"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="male">مرد</option>
                    <option value="female">زن</option>
                </select>

            </div>

            <!-- age -->

            <div class="mt-3">
                <x-label for="age" :value="__('سن')" />

                <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required
                    autofocus />
            </div>

            <!-- location -->
            <div class="mt-3">
                <x-label for="isCity" :value="__('محل سکونت')" />
                <select name="isCity" id="isCity"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="yes">شهر</option>
                    <option value="no">روستا</option>
                </select>

            </div>

            <!-- sickness -->
            <div class="mt-3">
                <x-label for="isSick" :value="__('سابقه بیماری های اضطرابی')" />
                <select name="isSick" id="isSick"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="no">ندارم</option>
                    <option value="yes">دارم</option>
                   
                </select>

            </div>

              <!-- hospitalized -->
              <div class="mt-3">
                <x-label for="hospitalized" :value="__('سابقه بستری شدن در بیمارستان')" />
                <select name="hospitalized" id="hospitalized"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="no">ندارم</option>
                    <option value="yes">دارم</option>
                   
                </select>

            </div>

             <!-- married -->
             <div class="mt-3">
                <x-label for="married" :value="__('وضعیت تاهل')" />
                <select name="married" id="married"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="yes">متاهل</option>
                    <option value="no">مجرد</option>
                </select>

            </div>

            <!-- married -->
            <div class="mt-3">
                <x-label for="educated" :value="__('تحصیلات')" />
                <select name="educated" id="educated"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="0">بی سواد</option>
                    <option value="1">زیر دیپلم</option>
                    <option value="2">لیسانس</option>
                    <option value="3">بالاتر</option>

                </select>

            </div>

            

            <!-- Email Address -->
            <div class="mt-3">
                <x-label for="email" :value="__('کدملی')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')"
                    required />
            </div>

            <div class="flex items-center  mt-4 mb-3">
                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                    href="{{ route('login') }}">
                    {{ __('قلا ثبت نام کرده اید؟') }}
                </a>
            </div>

            <div class="mt- ">
            <x-button class="ml-4">
                    {{ __('ثبت نام') }}
                </x-button>
</div>
        </form>
    </x-auth-card>
</x-guest-layout>
