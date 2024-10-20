@extends('layouts.master')
@section('content')
<main>
    @include('pages.slider')

<div class="container px-6 py-16 mx-auto">
        <div class="items-center lg:flex">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-3xl font-semibold text-gray-800  lg:text-4xl">Best place to choose <br> your <span class="text-amber-500 ">products</span></h1>
                    
                    <p class="mt-3 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
                    
                    <button class="w-full px-5 py-2 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-amber-600 rounded-lg lg:w-auto hover:bg-amber-500 focus:outline-none focus:bg-amber-500">Shop Now</button>
                </div>
            </div>

            <div class="flex items-center justify-center  w-full mt-6 lg:mt-0 lg:w-1/2">
                <img class="w-full  rounded-xl lg:max-w-3xl hover:grayscale transition-all duration-500" src="https://i.ibb.co/gPm42N1/image.png" alt="pic">
            </div>
        </div>
    </div>


    @include('pages.feature')
  
    @include('pages.blog')
    @include('pages.query')
    @include('pages.cta')


</main>
@endsection