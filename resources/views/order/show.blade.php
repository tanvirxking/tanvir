@extends('layouts.master')

@section('content')

        <div class="overflow-x-auto p-8">
            <h1 class="text-4xl text-center font-bold mb-6">Order Items</h1>
            <table class="min-w-[44rem] container mx-auto shadow-md border border-gray-100 my-6">
                <thead>
                    <tr class="bg-amber-500 text-white">
                        <th class="py-4 px-6 text-lg text-left border-b">Product ID</th>
                        <th class="py-4 px-6 text-lg text-left border-b">Product Name</th>
                        <th class="py-4 px-6 text-lg text-left border-b">Quantity</th>
                        <th class="py-4 px-6 text-lg text-left border-b">Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orderItems as $item)
                        <tr class="bg-amber-100 border-b transition duration-300">
                            <td class="py-4 px-6 border-b text-xl font-medium">{{ $item->product_id}}</td>
                            <td class="py-4 px-6 border-b text-xl font-medium">{{ $item->name }}</td>
                            <td class="py-4 px-6 border-b text-xl font-medium">{{ $item->qty }}</td>
                            <td class="py-4 px-6 border-b text-xl font-medium">{{ $item->price }}</td>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
 
@endsection
