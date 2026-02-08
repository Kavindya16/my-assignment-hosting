<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 px-6">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Products</h2>

            <a href="{{ route('pets.create') }}"
               class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
                + Add Product
            </a>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-xl shadow overflow-hidden">

            <table class="min-w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Category</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Price</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Image</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @forelse ($pets as $pet)
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4">
                                <span class="font-medium text-gray-800">
                                    {{ $pet->name }}
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <span class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                                    {{ $pet->category->name ?? '-' }}
                                </span>
                            </td>

                            <td class="px-6 py-4 text-gray-700">
                                Rs. {{ number_format($pet->price, 2) }}
                            </td>

                            <td class="px-6 py-4">
                                @if($pet->image)
                                    <img src="{{ asset('storage/'.$pet->image) }}"
                                         class="w-16 h-16 object-cover rounded-lg border">
                                @else
                                    <span class="text-gray-400 text-sm">No image</span>
                                @endif
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex gap-4">
                                    <a href="{{ route('pets.edit', $pet) }}"
                                       class="text-indigo-600 font-medium hover:underline">
                                        Edit
                                    </a>

                                    <form action="{{ route('pets.destroy', $pet) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                onclick="return confirm('Delete this product?')"
                                                class="text-red-600 font-medium hover:underline">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-10 text-gray-500">
                                No products found.
                                Click <span class="text-indigo-600 font-semibold">Add Product</span> to add one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

    </div>
</x-app-layout>
