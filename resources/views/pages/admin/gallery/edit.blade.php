@extends('layout.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
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
            <form action="{{ route('gallery.update' , $item->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="travel_packages_id">Paket Travel</label>
                    <select name="travel_packages_id"  class="form-control">
                    <option value="{{ $item->travel_packages_id }}">Jangan diubah</option>

                    </select>
                </div>

                <div class="form-group">
                    <input type="file" name="image" placeholder="gambar">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Submit
                </button>

                
            </form>
        </div>
    </div>


</div>

@endsection