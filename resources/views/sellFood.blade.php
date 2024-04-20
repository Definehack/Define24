<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sell Your Surplus Food') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('sellFood.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="photo" />

                        <select name="foodCategory">
                            <option value="">Select a category</option>
                            <option value="fruits">Fruits</option>
                            <option value="vegetables">Vegetables</option>
                            <option value="grains">Grains</option>
                            <!-- Add more options as needed -->
                        </select>

                        <input type="text" name="foodItemName" placeholder="Name of Food Item" />
                        <input type="text" name="quantity" placeholder="Quantity" />
                        <input name="Price" placeholder="Price" type="text" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>