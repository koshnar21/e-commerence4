@vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<center>
<div class="bg-cyan-100 flex rounded-2xl shadow-lg max-w-xl p-3 mt-20">
    <div class="sm:w-full px-24">
        <h2 class="font-bold text-3xl">Register</h2>
        <p class="text-lg mt-4">Join us by registering your account</p>
        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4 ">
            @csrf

            <div>
                <x-input id="name" class="p-3 mt-2 rounded-xl border w-full"  placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-input id="email" class="p-3 mt-2 rounded-xl border w-full"  placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div>
                <x-input id="phone" class="p-3 mt-2 rounded-xl border w-full"  placeholder="Number" type="number" name="phone" :value="old('phone')" required autocomplete="username" />
            </div>

            <div>
                <x-input id="address" class="p-3 mt-2 rounded-xl border w-full" placeholder="Address" type="text" name="address" :value="old('address')" required autocomplete="username" />
            </div>

            <div>
                <x-input id="password" class="p-3 mt-2 rounded-xl border w-full"  placeholder="Password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-input id="password_confirmation" class="p-3 mt-2 rounded-xl border w-full" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms" class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />
                        <span class="ml-2 text-lg text-gray-600">{!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline hover:text-gray-900 focus:outline-none focus:underline transition ease-in-out duration-150">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline hover:text-gray-900 focus:outline-none focus:underline transition ease-in-out duration-150">'.__('Privacy Policy').'</a>',
                        ]) !!}</span>
                    </x-label>
                </div>
            @endif

            <div class=" items-center justify-center mt-4">
                <a href="{{ route('login') }}" class="underline text-lg text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{ __('Already registered?') }}</a>
                <button class="bg-[#41a2e2] text-white mt-3  py-3 px-40 rounded-md hover:bg-blue-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
    {{ __('Register') }}
</button>
            </div>
            
        </form>
    </div>
</div>

</center>