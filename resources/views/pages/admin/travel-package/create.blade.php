@extends('layout.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket travel</h1>
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="dark shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title"  placehoolder="title" 
                    value="{{ old('title') }}" id="title">
                </div>      

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="location" class="form-control" name="location"  placehoolder="Location" 
                    value="{{ old('location') }}" id="location">
                </div>

                <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" id="about" rows="10" class="d-block w-100 form-control">{{ old('about')}}</textarea>
                </div>

                <div class="form-group">
                    <label for="featured_event">Featured event</label>
                    <input type="text" class="form-control" name="featured_event"  placehoolder="=Featured event" 
                    value="{{ old('featured_event') }}" id="featured_event">
                </div>

                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language"  placehoolder="=Language" 
                    value="{{ old('language') }}" id="language">
                </div>
                
                <div class="form-group">
                    <label for="food">Foods</label>
                    <input type="text" class="form-control" name="food"  placehoolder="Food" 
                    value="{{ old('food') }}" id="food">
                </div>

                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" class="form-control" name="departure_date"  placehoolder="=Departure Date" 
                    value="{{ old('departure_date') }}" id="departure_date">
                </div>

                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration"  placehoolder="=Duration" 
                    value="{{ old('duration') }}" id="duration">
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type"  placehoolder="=Type" 
                    value="{{ old('type') }}" id="type">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="numbber" class="form-control" name="price"  placehoolder="=Price" 
                    value="{{ old('price') }}" id="price">
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Submit
                </button>

                
            </form>
        </div>
    </div>


</div>

@endsection