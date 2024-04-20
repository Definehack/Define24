<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="display: flex;">
                    <div style="flex: 1; padding-right: 1rem;">
                        <!-- Other content goes here -->
                        <h2>Available Foods</h2>
                        @foreach ($foods as $food)
                            <div>
                                <img src="{{ asset('storage/' . $food->photo) }}" alt="{{ $food->name }}">
                                <h3>{{ $food->name }}</h3>
                                <p>{{ $food->description }}</p>
                                <p>Category: {{ $food->category }}</p>
                                <p>Quantity: {{ $food->quantity }}</p>
                                <p>Price: {{ $food->price }}</p>
                                <!-- Add more fields as needed -->
                                <form action="{{ route('foods.destroy', $food->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                    <div style="flex: 1; border-left: 2px solid #001; padding-left: 1rem;">
                        <!-- Other content goes here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
