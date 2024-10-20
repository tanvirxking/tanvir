<x-app-layout>

<main>

    <div class="max-w-4xl container my-10 mx-auto bg-gray-100 p-8 rounded-md shadow-md">
        <h2 class="text-2xl font-bold mb-4">Add New Product</h2>
        <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf


     
        <div class="mb-4">
                <label  class="block text-gray-700 font-bold mb-2">Product Name</label>
                <input type="text" name="productname"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none bg-gray-100"
                    placeholder="Enter product name" value="{{ old('productname')}}" >
                    @error('productname')
                  <span>{{ $message }}</span>
                    @enderror
            </div>

            <div class="mb-4">
                <label  class="block text-gray-700 font-bold mb-2">Product Category</label>
                <select name="productcatagory"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none bg-gray-100"
                    >
                    <option value="select" disabled selected>
                    Select Categories
                    </option>
                    <option value="Punjabi">
                    Punjabi
                    </option>
                    <option value="T-Shirt">
                    T-Shirt
                    </option>
                    <option value="Jainamaz">
                    Jainamaz
                    </option>
                    <option value="Attar">
                    Attar
                    </option>
                    <option value="Kufi">
                    Kufi
                    </option>
                    <option value="Tasbih">
                    Tasbih
                    </option>
                    <option value="Books">
                    Books
                    </option>
                    <option value="Dates">
                    Dates
                    </option>

                </select>
                @error('productname')
                  <span>{{ $message }}</span>
                    @enderror
</div>
  

            
    

            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Product Price</label>
                <input type="number" name="productprice"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none bg-gray-100"
                    placeholder="Enter product price" >
                    @error('productprice')
                  <span>{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Product Image</label>
                <input type="file" name="photo"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none bg-gray-100"
                    accept="image/*" >
                    @error('photo')
                  <span>{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-4 ">
                <label  class="block  text-gray-700 font-bold mb-2">Product
                    Description</label>
                <textarea  name="productdescription"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none bg-gray-100"
                    rows="4" placeholder="Enter product description" ></textarea>
                    @error('productdescription')
                  <span>{{ $message }}</span>
                    @enderror
            </div>
         
            <div class="flex justify-center">
                <button type="submit"  
                    class="bg-amber-500 h-16 mt-0 md:mt-14 text-2xl w-full text-white px-6 py-2 rounded-md hover:bg-amber-600 transition-all duration-500 focus:outline-none focus:bg-amber-600">Add
                    Product</button>
            </div>
        </form>
    </div>

</main>

</x-app-layout>
