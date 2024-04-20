<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        @foreach ($foods as $food)
                            <div>
                                <img src="{{ asset('storage/' . $food->photo) }}" alt="{{ $food->name }}">
                                <h3>{{ $food->name }}</h3>
                                <p>{{ $food->description }}</p>
                                <p>Category: {{ $food->category }}</p>
                                <p>Quantity: {{ $food->quantity }}</p>
                                <p>Price: {{ $food->price }}</p>
                                <!-- Add more fields as needed -->
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>