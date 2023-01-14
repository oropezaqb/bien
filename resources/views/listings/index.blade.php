<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($header) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h6 class="font-weight-bold">Add</h6>
                        <p>Want to record a new listing? Click <a class="text-primary" href="{{ url('/listings/create') }}">here</a>!</p>
                        <br>
                        <h6 class="font-weight-bold">List</h6>
                        @forelse ($listings as $listing)
                            <div id="content">
                                <div id="title">
                                    <div style="display:inline-block;"><button class="btn btn-link" onclick="location.href = '{{ \App\Models\Listing::find($listing->id)->path(); }}'">View</button></div>
                                    <div style="display:inline-block;"><button class="btn btn-link" onclick="location.href = '/listings/{{ $listing->id }}/edit';">Edit</button></div>
                                    <div style="display:inline-block;"><form method="POST" action="/listings/{{ $listing->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-link" type="submit" onclick="return confirm('Are you sure you want to delete this listing?');">Delete</button>
                                    </form></div>
                                    <div style="display:inline-block;">&nbsp;&nbsp;Property {{ $listing->property_type }}
                                        , {{ $listing->property_description }}
                                        , {{ $listing->floor_area }}
                                        , {{ $listing->contract }}
                                        , {{ $listing->price }}
                                        , {{ $listing->address_barangay }}
                                        , {{ $listing->address_city }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No listings recorded yet.</p>
                        @endforelse
                        {{ $listings->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
