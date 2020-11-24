@extends('layout.admin')

@section('content')

<div class="container-fluid">

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
   <a href="{{ route('travel-package.create') }}" class="btn btn-primary">
    <i class="fas fa-plus text-white"> Tambah Paket Travel</i>
   </a>
 </div>

<div class="row">
    <div class="card-body">
        <div class="table   ">
        <table class="table-bordered" width="100%" cellspacing ="100">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>Location</th>
                    <th>type</th>
                    <th>Departure Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @forelse($items as $item)
                <tr>
                    <td>{{ $item ->id }}</td>
                    <td>{{ $item ->title}}</td>
                    <td>{{ $item ->location}}</td>
                    <td>{{ $item ->type}}</td>
                    <td>{{ $item ->departure_date}}</td>
                    <td>
                        <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('travel-package.destroy', $item->id) }}" method="post" class="d-inline">
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