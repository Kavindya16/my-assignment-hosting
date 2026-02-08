<x-app-layout>
    <div class="max-w-xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Pet</h1>

        <form method="POST" action="{{ route('pets.update', $pet) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Name</label>
                <input type="text" name="name" value="{{ $pet->name }}" class="w-full border p-2">
            </div>

            <div class="mb-4">
                <label>Type</label>
                <input type="text" name="type" value="{{ $pet->type }}" class="w-full border p-2">
            </div>

            <div class="mb-4">
                <label>Price</label>
                <input type="number" step="0.01" name="price" value="{{ $pet->price }}" class="w-full border p-2">
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded">
                Update Pet
            </button>
        </form>
    </div>
</x-app-layout>
