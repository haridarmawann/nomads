@extends('layout.admin')

@section('content')

<div class="container-fluid">

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
   <a href="{{ route('gallery.create') }}" class="btn btn-primary">
    <i class="fas fa-plus text-white"> Tambah Gallery</i>
   </a>
 </div>

<div class="row">
    <div class="card-body">
        <div class="table   ">
        <table class="table-bordered" width="100%" cellspacing ="100">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Travel</th>  
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @forelse($items as $item)
                <tr>
                    <td>{{ $item ->id }}</td>
                    <td>{{ $item ->travel_package->title}}</td>
                    <td>
                    <img src="{{ Storage::url($item->image)}}" style="width: 150px" class="iGallery" >
                    </td>
                    <td>
                        <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('gallery.destroy', $item->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">
                        Data Kosong
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        </div>
    </div>
</div>

   
</div>
    
@endsection