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

                        <form enctype="multipart/form-data" method="POST" action="/listings">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group custom-control-inline">
                                <label for="contract">For sale/rent:</label>&nbsp;
                                {{ Form::select('classification', array('Sale' => 'Sale', 'Rent' => 'Rent'), $listing->contract,
                                    $attributes = array('class' => 'form-control', 'style' => 'width: 100px;',
                                    'value' => old('contract', $listing->contract), 'id' => 'contract', 'name' => 'contract')); }}
                            </div>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="property_type">House/ Condo unit/ Office/ Lot:&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="property_type"
                                    id="property_type"
                                    value="{{ old('property_type', $listing->property_type) }}">
                            </div>
                            <div class="form-group custom-control-inline">
                                <label for="property_description">No. of bedrooms/ Studio type/ No. of rooms:&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="property_description"
                                    id="property_description"
                                    value="{{ old('property_description', $listing->property_description) }}">
                            </div>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="floor_area">Floor area:&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="floor_area"
                                    id="floor_area"
                                    value="{{ old('floor_area', $listing->floor_area) }}">
                            </div>
                            <div class="form-group custom-control-inline">
                                <label for="lot_area">Lot area:&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="lot_area"
                                    id="lot_area"
                                    value="{{ old('lot_area', $listing->lot_area) }}">
                            </div>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="price">Total price/ Monthly rate:</label>&nbsp;
                                <input type="number" class="form-control amount" id="price" name="price" step="0.01" style="text-align: right;"
                                    value="{!! old('price', $listing->price) !!}">
                            </div>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="available_at">Date available:&nbsp;</label>&nbsp;
                                <input type="date" class="form-control @error('available_at') is-danger @enderror" id="available_at" name="available_at" value="{!! old('available_at', $listing->available_at) !!}">
                            </div>
                            <h6 class="font-weight-bold">Address</h6>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="address_unit">Unit no.&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="address_unit"
                                    id="address_unit"
                                    value="{{ old('address_unit', $listing->address_unit) }}">
                            </div>
                            <div class="form-group custom-control-inline">
                                <label for="address_floor">Floor no.&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="address_floor"
                                    id="address_floor"
                                    value="{{ old('address_floor', $listing->address_floor) }}">
                            </div>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="address_number">House/ Building no.&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="address_number"
                                    id="address_number"
                                    value="{{ old('address_number', $listing->address_number) }}">
                            </div>
                            <div class="form-group custom-control-inline">
                                <label for="address_street">Street&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="address_street"
                                    id="address_street"
                                    value="{{ old('address_street', $listing->address_street) }}">
                            </div>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="address_barangay">Barangay/ District&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="address_barangay"
                                    id="address_barangay"
                                    value="{{ old('address_barangay', $listing->address_barangay) }}">
                            </div>
                            <div class="form-group custom-control-inline">
                                <label for="address_city">City/ Municipality&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="address_city"
                                    id="address_city"
                                    value="{{ old('address_city', $listing->address_city) }}">
                            </div>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="address_province">Province&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="address_province"
                                    id="address_province"
                                    value="{{ old('address_province', $listing->address_province) }}">
                            </div>
                            <div class="form-group custom-control-inline">
                                <label for="address_region">Region&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="address_region"
                                    id="address_region"
                                    value="{{ old('address_region', $listing->address_region) }}">
                            </div>
                            <h6 class="font-weight-bold">Owner</h6>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="owner_name">Complete name&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="owner_name"
                                    id="owner_name"
                                    value="{{ old('owner_name', $listing->owner_name) }}">
                            </div>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="phone_number">Phone number&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="phone_number"
                                    id="phone_number"
                                    value="{{ old('phone_number', $listing->phone_number) }}">
                            </div>
                            <div class="form-group custom-control-inline">
                                <label for="phone_number2">Other phone number&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="phone_number2"
                                    id="phone_number2"
                                    value="{{ old('phone_number2', $listing->phone_number2) }}">
                            </div>
                            <br>
                            <div class="form-group custom-control-inline">
                                <label for="email">Email&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="email"
                                    id="email"
                                    value="{{ old('email', $listing->email) }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Owner's address&nbsp;</label>
                                <textarea class="form-control" rows="3" id="address" name="address">{{ old('address', $listing->address) }}</textarea>
                            </div>
                            <h6 class="font-weight-bold">Photos</h6>
                            <div class="form-group">
                                <tr>
                                    <td>
                                        <?php
                                            $pictures = json_decode($listing->photos);
                                            $arrlength = count($pictures);
                                            for($x = 0; $x < $arrlength; $x++) {
                                        ?>
                                            <img src="{{ asset('/images/'. $pictures[$x]) }}" style="height:120px; width:200px"/>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </div>
                            <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="form-group custom-control-inline">
                                <label>Uploaded by&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    value="{{ $listing->user->name }}" disabled>
                            </div>
                            <div class="form-group custom-control-inline">
                                <label>Published?&nbsp;</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    value="{{ $listing->publish }}" disabled>
                            </div>
                        </form>
                        <br>
                        <div style="clear: both;">
                            <div style="display: inline-block;">
                                <button class="btn btn-outline-primary" onclick="location.href = '/listings/{{ $listing->id }}/edit';">Edit</button>
                            </div>
                            <div style="display: inline-block;">
                                <form method="POST" action="/listings/{{ $listing->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                </form>
                            </div>

                    <?php $browse = \DB::table('users')->leftJoin('roles', 'users.role_id', '=', 'roles.id')
                        ->leftJoin('permission_role', 'roles.id', '=', 'permission_role.role_id')
                        ->leftJoin('permissions', 'permission_role.permission_id', '=', 'permissions.id')
                        ->where('users.id', auth()->user()->id)
                        ->where('permissions.key', 'browse_admin')->exists(); ?>
                    @if ($browse)
                            <div style="display: inline-block;">
                                <form method="POST" action="/listings/publish">
                                    @csrf
                                    <input type="hidden" id="listing_id" name="listing_id" value="{{ $listing->id }}">
                                    <button class="btn btn-outline-success" type="submit" onclick="return confirm('Are you sure you want to publish this item?');">Publish</button>
                                </form>
                            </div>
                            <div style="display: inline-block;">
                                <form method="POST" action="/listings/unpublish">
                                    @csrf
                                    <input type="hidden" id="listing_id" name="listing_id" value="{{ $listing->id }}">
                                    <button class="btn btn-outline-warning" type="submit" onclick="return confirm('Are you sure you want to unpublish this item?');">Unpublish</button>
                                </form>
                            </div>
                    @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
