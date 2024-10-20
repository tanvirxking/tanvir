@extends('layouts.master')
@section('content')

<main>
    
@if ($product->total()==0)

<p class="text-5xl text-center flex justify-center items-center gap-2 min-h-[61.8vh]"><i class="fa-solid fa-triangle-exclamation"></i> No Product was found. Please add some product.</p>
    
@else

<section class="max-w-screen-xl py-10 container mx-auto grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
@foreach ($product as $item)
<div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">{{$item->productname}}</h1>
    </div>

    <img class="object-cover w-full h-48 mt-2" src="{{asset('upload/product')}}/{{ $item->photo}}" alt="Product Pic">

    <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
        <h1 class="text-lg font-bold text-white"><i class="fa-solid fa-bangladeshi-taka-sign"></i>{{$item->productprice}}</h1>
        <a  href="{{route('single.product',$item->id)}}" class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">View Details</a>
    </div>
</div>
@endforeach
</section>



{{$product->links()}}

@endif
</main>

@endsection