<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Sell Your Surplus Food') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 mx-auto w-100">
                <form method="POST" action="{{ route('sellFood.store') }}" enctype="multipart/form-data">
                        @csrf
                       
                          <div class="form-group mb-3 row">
                            <div style="" class="input-group rounded-3 col">
                                <input type="file" id="file" accept="image/*" name="photo" onchange="loadFile(event)" class="form-control rounded-3 p-3" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" style="display:none">
                                <p><label for="file" class="" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output" width="100%" /></p>
                                <script>
                                    var loadFile = function(event) {
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                    };
                                    </script>
                                
                              </div>
                            <div class="col">
                            <label class="lead">Select a type:</label>
                        <select name ="foodCategory" class="form-select mb-3 rounded-3" aria-label="Default select example">
                            <option value="" selected>Open this select menu</option>
                            <option value="fruits">Fruits</option>
                            <option value="vegetables">Vegetables</option>
                            <option value="grains">Grains</option>
                            <option value="grains">Dairy-Based</option>
                            <option value="grains">Soups and Stews</option>
                            <option value="grains">Breads</option>

                            <!-- Add more options as needed -->
                        </select>
                          
                        <div class="input-group mb-3 border rounded-3">
                            <input name="foodItemName" placeholder="Name of Food Item" type="text" class="form-control rounded-3" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <div class="input-group mb-3 rounded-3">
                            <input name="quantity" placeholder="Quantity" type="text" class="form-control rounded" aria-label="Amount (to the nearest dollar)">
                        </div>
                        
                        <div class="input-group mb-3 rounded-3">
                            <span class="input-group-text rounded-3">₹</span>
                            <input name="Price" placeholder="Price" type="number" class="form-control rounded-3" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <button type='submit' class="container-fluid btn btn-dark btn-block" value="Sell Food">Sell Food</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>