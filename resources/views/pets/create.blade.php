<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Dog Product
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">

           <form method="POST"
      action="{{ route('pets.store') }}"
      enctype="multipart/form-data">
    @csrf


                <!-- Product Name -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1">Product Name</label>
                    <input type="text"
                           name="name"
                           class="w-full border rounded px-3 py-2"
                           required>
                </div>

                <!-- Category -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1">Category</label>
                    <select name="category_id"
                            class="w-full border rounded px-3 py-2"
                            required>
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1">Price</label>
                    <input type="number"
                           name="price"
                           step="0.01"
                           class="w-full border rounded px-3 py-2"
                           required>
                </div>

                <!-- Image -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1">Product Image</label>
                    <input type="file"
                           name="image"
                           class="w-full border rounded px-3 py-2">
                </div>

          <hr class="my-6">

<div style="display: flex; gap: 15px;">
    <button type="submit"
            style="background-color:#4f46e5; color:white; padding:10px 25px; border-radius:6px;">
        Add Product
    </button>

    <a href="{{ route('pets.index') }}"
       style="background-color:#d1d5db; padding:10px 25px; border-radius:6px; text-decoration:none; color:black;">
        Cancel
    </a>
</div>


            </form>

        </div>
    </div>
</x-app-layout>
