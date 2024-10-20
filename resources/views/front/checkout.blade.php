@extends('layouts.master')

@section('content')
<main class="flex justify-around px-28 py-[114px]">
@if (session('cart') && count(session('cart')) > 0)
    <form action="{{route('place.order')}}" class="w-1/2 container mx-auto bg-gray-100 p-8 rounded-md shadow-md" method="POST" >
        @csrf
        <h1 class="text-4xl text-center font-bold mb-6">Checkout Here</h1>
        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">Full Name</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none bg-white" placeholder="Enter your full name">
            @error('name')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">Email Address</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none bg-white" placeholder="Enter your email address">
            @error('email')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none bg-white" placeholder="Enter your phone number">
            @error('phone')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="address">Delivery Address</label>
            <input type="text" name="address" id="address" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none bg-white" placeholder="Enter your delivery address">
            @error('address')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="flex justify-center">
            <button type="submit" class="bg-amber-500 font-bold uppercase h-16 mt-4 text-2xl w-full text-white px-6 py-2 rounded-md hover:bg-amber-600 transition-all duration-500 focus:outline-none focus:bg-amber-600">Order Now</button>
        </div>
    </form>

    <div class="overflow-x-auto bg-gray-100 p-8 w-1/2">
        <h1 class="text-4xl text-center font-bold mb-6">Cart Items</h1>
        <table class="min-w-[44rem] container mx-auto shadow-md border border-gray-100 my-6">
            <thead>
                <tr class="bg-amber-500 text-white">
                    <th class="py-4 px-6 text-lg text-left border-b">Name</th>
                    <th class="py-4 px-6 text-lg text-left border-b">Quantity</th>
                    <th class="py-4 px-6 text-lg text-left border-b">Price</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @foreach(session('cart') as $cart)
                <tr class="bg-amber-100 border-b transition duration-300">
                    <td class="py-4 px-6 border-b text-xl font-medium">{{ $cart['name'] }}</td>
                    <td class="py-4 px-6 border-b text-xl font-medium">{{ $cart['qty'] }}</td>
                    <td class="py-4 px-6 border-b text-lg font-medium"><i class="fa-solid fa-bangladeshi-taka-sign"></i> {{ $cart['price'] }}</td>
                    @php $total += $cart['qty'] * $cart['price'] @endphp
                </tr>
                @endforeach
                <tr class="bg-amber-100 border-b transition duration-300">
                    <td class="py-4 px-6 border-b text-xl font-medium">Total</td>
                    <td class="py-4 px-6 border-b text-xl font-medium"></td>
                    <td class="py-4 px-6 border-b text-xl font-medium"><i class="fa-solid fa-bangladeshi-taka-sign"></i> {{ $total }}</td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-center">
            <a href="{{ route('clear.cart') }}" class="px-6 py-2 text-2xl font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Clear Cart</a>
        </div>
    </div>
@else
    <p class="text-5xl text-center flex justify-center items-center gap-2 min-h-[61.8vh]"><i class="fa-solid fa-triangle-exclamation"></i> No Product was found. Please add some product.</p>
@endif

</main>
@endsection
