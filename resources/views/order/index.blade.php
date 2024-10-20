@extends('layouts.master')

@section('content')
    @if ($orders->isEmpty())
        <p class="text-5xl text-center flex justify-center items-center gap-2 min-h-[61.8vh]">
            <i class="fa-solid fa-triangle-exclamation"></i> 
            No Order was found. Please order some product.
        </p>
    @else
        <div class="overflow-x-auto p-8 min-h-[86.8vh]">
            <h1 class="text-4xl text-center font-bold mb-6">My Order</h1>
            <table class="min-w-[44rem] container mx-auto shadow-md border border-gray-100 my-6">
                <thead>
                    <tr class="bg-amber-500 text-white">
                        <th class="py-4 px-6 text-lg text-left border-b">ID</th>
                        <th class="py-4 px-6 text-lg text-left border-b">Full Name</th>
                        <th class="py-4 px-6 text-lg text-left border-b">Delivery Address</th>
                        <th class="py-4 px-6 text-lg text-left border-b">Phone Number</th>
                        <th class="py-4 px-6 text-lg text-left border-b">Email Address</th>
                        <th class="py-4 px-6 text-lg text-left border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="bg-amber-100 border-b transition duration-300">
                            <td class="py-4 px-6 border-b text-xl font-medium">{{ $order->id }}</td>
                            <td class="py-4 px-6 border-b text-xl font-medium">{{ $order->name }}</td>
                            <td class="py-4 px-6 border-b text-xl font-medium">{{ $order->address }}</td>
                            <td class="py-4 px-6 border-b text-xl font-medium">{{ $order->phone }}</td>
                            <td class="py-4 px-6 border-b text-xl font-medium">{{ $order->email }}</td>
                            <td class="py-4 px-6 border-b text-xl font-medium">
                                <a href="{{ route('order.show', $order) }}" class="px-6 py-2 text-2xl font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-amber-500 rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Order Info</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
