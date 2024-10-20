<x-app-layout>
@if ($product->total()==0)

<p class="text-5xl text-center flex justify-center items-center gap-2 mt-36"><i class="fa-solid fa-triangle-exclamation"></i> No Product was found. Please add some product.</p>
    
@else
<section class="max-w-screen-2xl container mx-auto">
<h1 class="text-4xl my-6 text-amber-500 text-center">My Product List:  {{ $product->total() }}</h1>
<div class="overflow-x-auto">
    <table class="min-w-[90%] shadow-md border mx-auto border-gray-100 my-6">
        <thead>
            <tr class="bg-amber-500 text-white">
                <th class="py-4 px-6 text-lg text-left border-b">ID</th>
                <th class="py-4 px-6 text-lg text-left border-b">Image</th>
                <th class="py-4 px-6 text-lg text-left border-b">Name</th>
                <th class="py-4 px-6 text-lg text-left border-b">Category</th>
                <th class="py-4 px-6 text-lg text-left border-b">Price</th>
                <th class="py-4 px-6 text-lg text-left border-b">Description</th>
                <th class="py-4 px-6 text-lg border-b text-end">Action</th>
                <th class="py-4 px-6 text-lg border-b text-end">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($product as $item)
            <tr class="hover:bg-gray-50 border-b transition duration-300">
            <td class="py-4 px-6 border-b text-xl font-medium">{{$item->id}}</td>
                <td class="py-4 px-4 flex justify-start">
                    <img src="{{asset('upload/product')}}/{{ $item->photo}}" alt="productpic" class="h-16 w-16 object-cover bg-gray-300" />
                </td>
                <td class="py-4 px-6 border-b text-xl font-medium">{{$item->productname}}</td>
                <td class="py-4 px-6 border-b text-xl font-medium">{{$item->productcatagory}}</td>
                <td class="py-4 px-6 border-b text-lg font-medium"><i class="fa-solid fa-bangladeshi-taka-sign"></i> {{$item->productprice}}</td>
                <td class="py-4 px-6 border-b text-lg font-medium">{{$item->productdescription}}</td>
                <td class="py-4 px-6 border-b text-end">
                    <a href="{{route('product.edit',$item->id)}}">
                    <button class="bg-green-500 hover:scale-110 scale-100 transition-all duration-100 text-white py-2 px-4 rounded-md">Edit</button>
                    </>
                </td>
                <td class="py-4 px-6 border-b text-end">
                    <a  onclick="return confirm(' Are you sure to Delete')"  href="{{route('product.delete',$item->id)}}">
                    <button class="bg-red-500 hover:scale-110 scale-100 transition-all duration-100 text-white py-2 px-4 rounded-md">Delete</button>
                    </a>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    {{$product->links()}}
</div>
</section>
@endif
</x-app-layout>