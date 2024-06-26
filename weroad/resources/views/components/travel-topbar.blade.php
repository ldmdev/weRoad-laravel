<x-card class="p-2 flex space-x-6">
    @can('isEditor')
        <a href="{{ route('travels.edit', ['slug' => $travel->slug]) }}" id="edit-travel-link">
            Edit Travel
        </a>
    @endcan
    @can('isAdmin')
        <a href="{{ route('tours.create', ['slug' => $travel->slug]) }}" id="add-tour-link">
            Add a new tour
        </a>

        <form method="POST" action="{{ route('travels.destroy', ['travel' => $travel->id]) }}" id="delete-travel-form">
            @csrf
            @method('DELETE')
            <button class="text-red-500">Delete travel</button>
        </form>
    @endcan
    <a href="{{ route('dashboard') }}" class="text-black ml-4">Back</a>
</x-card>
