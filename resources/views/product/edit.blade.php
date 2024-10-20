<x-app-layout>
<div class="product">
    <!-- @if(count($errors)>0)
    <div class="alert alert-danger">
        <strong>Errors: </strong>
        <ul>
            @foreach($errors->all() as $errors)
            <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(Session::has('success'))
    <div class="alert alert-success">
        <strong>Success: </strong>{{ Session::get('success') }}
    </div>
    @endif -->
    <div class="max-w-3xl my-10 mx-auto bg-white p-8 rounded-md shadow-md">
        <h2 class="text-2xl font-bold mb-4">Edit New Product</h2>
        <form action="{{ route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
            <div class="mb-4">
                <label  class="block text-gray-700 font-bold mb-2">Product Name</label>
                <input type="text" name="productname" value="{{$product->productname}}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    placeholder="Enter product name" required>
            </div>
            
            <div class="mb-4">
                <label  class="block text-gray-700 font-bold mb-2">Product Category</label>
                <select name="productcatagory" value="{{$product->productcatagory}}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    required>
            
                    <option value="" disabled>Select Categories</option>
        <option value="Punjabi" {{$product->productcategory == 'Punjabi' ? 'selected' : ''}}>Punjabi</option>
        <option value="T-Shirt" {{$product->productcategory == 'T-Shirt' ? 'selected' : ''}}>T-Shirt</option>
        <option value="Jainamaz" {{$product->productcategory == 'Jainamaz' ? 'selected' : ''}}>Jainamaz</option>
        <option value="Attar" {{$product->productcategory == 'Attar' ? 'selected' : ''}}>Attar</option>
        <option value="Kufi" {{$product->productcategory == 'Kufi' ? 'selected' : ''}}>Kufi</option>
        <option value="Tasbih" {{$product->productcategory == 'Tasbih' ? 'selected' : ''}}>Tasbih</option>
        <option value="Books" {{$product->productcategory == 'Books' ? 'selected' : ''}}>Books</option>
        <option value="Dates" {{$product->productcategory == 'Dates' ? 'selected' : ''}}>Dates</option>
       
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Product Price</label>
                <input type="number" name="productprice" value="{{$product->productprice}}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    placeholder="Enter product price" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Product Image</label>
                <input type="file" name="photo"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    accept="image/*">
            </div>
            <div class="mb-4">
                <label  class="block text-gray-700 font-bold mb-2">Product
                    Description</label>
                    <textarea name="productdescription"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-amber-400"
                    rows="4" placeholder="Enter product description" required>{{$product->productdescription}}</textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit"  onclick="return confirm(' Are you sure to Edit')"
                    class="bg-amber-500 w-full text-white px-6 py-2 rounded-md hover:bg-amber-600 focus:outline-none focus:bg-amber-600">Update
                    Product</button>
            </div>
        </form>
    </div>
</div>
</x-app-layout>