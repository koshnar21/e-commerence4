@vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<center>

        

        <x-validation-errors class="mb-4" /> 

        @if (session('status'))
            <div class="">
                {{ session('status') }}
            </div>
        @endif 

        <div class="bg-cyan-100  rounded-2xl shadow-lg max-w-xl p-5 mt-20">
<div class="sm:w-/12 px-16">
<center>
<h2 class="font-bold text-2xl ">Login</h2>
<p class="text-sm mt-4">if you already a member, easily log in
</p>
<form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
@csrf


    
    <x-input id="email" class="p-2 mt-8 rounded-xl border" type="email" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username" />


  
  <div class="relative">
  <x-input id="password" class="p-2 rounded-xl border w-full" type="password"  placeholder="password" name="password" required autocomplete="current-password" />
  
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg>
</div>

<div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
  <button class="bg-[#0E86D4] py-2 hover:scale-105 duration-300 text-white hover:bg-blue-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> {{ __('Log in') }}</button>
  
</form>
<div class="mt-10 grid grid-cols-3 items-center text-gray-400">
<hr class="border-gray-400">
<p class="text-center text-sm">QR</p>
<hr class="border-gray-400">
</div>
<button class="bg-white border py-2 mt-5 w-full rounded-xl flex justify-center items-center">
<svg  xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-google mr-3 text-sm hover:scale-105 duration-300" viewBox="0 0 16 16">
  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
</svg>Login with Google</button>


<div class="mt-3 text-xs border-b border-gray-400 py-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif     
            </div>
<div class="mt-3 text-sm flex justify-between items-center">
  <p>If you Don't have an  account... </p>
  <a href="register" class="bg-[#41a2e2] text-white py-3 px-6 rounded-md hover:bg-blue-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</a>
</div>
</div>
      
  
</center>
</center>