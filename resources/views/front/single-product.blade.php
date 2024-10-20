@extends('layouts.master')
@section('content')

<main class="flex justify-center items-start gap-10 py-[53px]">

    <div class="max-w-2xl">
    <img class="w-full h-full rounded-2xl" src="{{asset('upload/product')}}/{{ $items->photo}}" alt="avatar">
    </div>
<div class="w-full max-w-2xl overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
 

    <div class="flex items-center px-6 py-3 bg-gray-900">
        
        <h1 class="mx-3 text-lg font-semibold uppercase text-white"><i class="fa-solid fa-list"></i> {{ $items->productcatagory}}</h1>
    </div>

    <div class="px-6 py-4">
        <div class="flex justify-between">
        <h1 class="text-xl font-semibold text-gray-800">{{$items->productname}}</h1>
        <h1 class="text-xl font-bold text-green-700 "><i class="fa-solid fa-bangladeshi-taka-sign"></i>{{$items->productprice}}</h1>
        </div>
        <p class="py-2 text-gray-700 ">{{$items->productdescription}}</p>

        

      <div class="mt-10 mb-3">
      <a href="{{ route('cart.add', $items->id) }}" class="px-6 py-2 m text-2xl font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add To Cart</a>






    </div>
</div>
</main>

@endsection