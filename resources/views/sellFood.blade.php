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
                          <div style="" class="input-group">
                            <input type="file" name="photo" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                          </div>
                          <div class="form-group mb-3 w-50">
                            <label>Select a type</label>
                        <select name ="foodCategory" class="form-select mb-3" aria-label="Default select example">
                            <option value="" selected>Open this select menu</option>
                            <option value="fruits">Fruits</option>
                            <option value="vegetables">Vegetables</option>
                            <option value="grains">Grains</option>
                            <!-- Add more options as needed -->
                        </select>
                        <div class="input-group mb-3">
                            <span class="input-group-text"></span>
                            <input name="foodItemName" placeholder="Name of Food Item" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"></span>
                            <input name="quantity" placeholder="Quantity" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text">₹</span>
                            <input name="Price" placeholder="Price" type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <input type='submit' value="Sell Food" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>