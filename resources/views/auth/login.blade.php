<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <div class="w-full max-w-2xl p-6 m-auto mx-auto bg-white rounded-lg shadow-md ">
    <div class="flex gap-3 justify-center mx-auto">
        <img class="w-auto h-10 mt-1 " src="https://i.ibb.co/2dRzgGf/image.png" alt="">
        <p class="font-semibold text-4xl uppercase">Islamic Store</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="mt-6">
    @csrf
        <div>
            <label for="email"  class="block text-xl text-gray-800 ">Email Address</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg   focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
       
            <div class="flex items-center justify-between">
                <label for="password" class="block text-xl text-gray-800 0">Password</label>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-xs text-gray-600 dark:text-gray-400 hover:underline">Forget Password?</a>
            </div>
            @endif
            <input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg   focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                            
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-6 mb-6">
            <button class="w-full px-6 py-2.5 text-xl h-16 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
               Log In
            </button>
        </div>
    </form>




    <p class="mt-8 text-xl font-light text-center text-gray-400"> Don't have an account? <a href="{{route('register')}}" class="font-medium text-gray-700 dark:text-gray-200 hover:underline">Create One</a></p>
</div>



</x-guest-layout>
