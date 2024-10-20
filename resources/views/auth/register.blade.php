<x-guest-layout>


<div class="w-full max-w-2xl p-6 m-auto mx-auto bg-white rounded-lg shadow-md ">
    <div class="flex gap-3 justify-center mx-auto">
        <img class="w-auto h-10 mt-1 " src="https://i.ibb.co/2dRzgGf/image.png" alt="">
        <p class="font-semibold text-4xl uppercase">Islamic Store</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
    @csrf
        <div class="mt-4">
            <label for="name"  class="block text-xl text-gray-800 ">Full Name </label>
            <input id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg   focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>


        <div class="mt-4">
            <label for="email"  class="block text-xl text-gray-800 ">Email Address</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg   focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div class="mt-4">
            <label for="password"  class="block text-xl text-gray-800 ">Password</label>
            <input id="password" type="password"
                            name="password"
                            required autocomplete="new-password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg   focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

        </div>

        <div class="mt-4">
            <label for="password_confirmation"  class="block text-xl text-gray-800 ">Confirm Password</label>
            <input id="password_confirmation" type="password"
            type="password"
                            name="password_confirmation" required autocomplete="new-password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg   focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-6 mb-6">
            <button class="w-full px-6 py-2.5 text-xl h-16 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
            Register
            </button>
        </div>
    </form>




    <p class="mt-8 text-xl font-light text-center text-gray-400">Already, you have an account? <a href="{{route('login')}}" class="font-medium text-gray-700 dark:text-gray-200 hover:underline">Login</a></p>
</div>





  
</x-guest-layout>
