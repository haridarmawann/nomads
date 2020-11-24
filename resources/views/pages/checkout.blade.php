@extends('layout.checkout')
@section('title','checkout')

@section('content')
<!-- content -->
    <main>
        <div class="section-details-header">
        </div>

            <div class="section-details-content">
                <div class="container">
                    <div class="row">
                        <!-- breadcrumb -->
                        <div class="col">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">    
                                        Paket Travel
                                    </li>
                                    <li class="breadcrumb-item">
                                        Details
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Checkout
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <!-- kotakkanan -->
                        <div class="col-lg-8">
                            <div class="card card-details">
                                
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                                <h1>Who is Going?</h1>
                                <p>Trip to {{ $item->travel_package->title}},{{ $item->travel_package->location}}</p>
                                <div class="attende">
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <td>Picture</td>
                                                <td>Name</td>
                                                <td>Nationality</td>
                                                <td>Visa</td>
                                                <td>Passport</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($item->details as $detail)
                                            <tr>
                                                <td>
                                                <img src="https://ui-avatars.com/api/?name={{ $detail-> username}}" class="rounded-circle">
                                                </td>
                                                <td class="align-middle">{{ $detail->username }}</td>
                                                <td class="align-middle">{{ $detail->nationality}}</td>
                                                <td class="align-middle">{{ $detail->is_visa ?'30 days' : 'N/A'}}</td>
                                                <td class="align-middle">{{ \Carbon\Carbon::createFromdate($detail->doe_passport) >
                                                \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}</td>
                                                <td class="align-middle">
                                                    <a href="{{ route('checkout-remove',$detail->id) }}">
                                                    <img src="{{ url('frontend/images/X.png') }}" alt=""></a>
                                                </td>
                                            </tr>
                                            @empty
                                                <tr>
                                                    <td colspan ='6' class="text-center">
                                                        No Visitor
                                                    </td>
                                                </tr>
                                            @endforelse
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <div class="member mt-3">
                                    <h2>Add Member</h2>
                                    <form action="{{ route('checkout-create',$item->id)}}" method="post" class="form-inline">
                                        @csrf
                                        <Label for="username" class="sr-only">Name</Label>
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="username"
                                        placeholder="Username" name="username">

                                        <Label for="nationality" class="sr-only">Nationality</Label>
                                        <input type="text" class="form-control mb-2 mr-sm-2" style="width: 50px" required id="nationality"
                                        placeholder="Nationality" name="nationality">

                                        <Label for="is_visa"class="sr-only">Visa</Label>
                                        <select name="is_visa" id="inputVisa" required class="custom-select mb-2 mr-sm-2">
                                            <option value= "is_visa" selected>VISA</option>
                                            <option value="1">30 days</option>
                                            <option value="0">N/A</option>
                                        </select>

                                        <Label for="doe_passport"class="sr-only">DOE</Label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" 
                                                   class="form-control datepicker" 
                                                   name="doe_passport" 
                                                   id="doe_passport"
                                                   placeholder="DOE Passport">
                                        </div>

                                        <button type="submit" class="btn btn-add-now px-4 mb-2">Add Now</button>

                                        
                                    </form>
                                    <h3 class="mt-2 mb-0">Note</h3>
                                    <p class="disclaimer mb-0">You are only able to invite member that has registered in Nomads.</p>
                                </div>
                            </div>
                        </div>
                        <!-- kotakiri -->
                        <div class="col-lg-4">
                            <div class="card card-details card-right">
                                <h2>Checkout Information</h2>
                                <table class="trip-information">
                                    <tr>
                                        <th width="50%">Members</th>
                                        <td width="50%" class="text-right">{{ $item->details->count() }} person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Trip Price</th>
                                        <td width="50%" class="text-right">${{ $item->travel_package->price }},00 / person </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Additional_visa</th>
                                        <td width="50%" class="text-right">${{ $item->additional_visa }},00/person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total Price</th>
                                        <td width="50%" class="text-right">${{ $item->transaction_total }},00</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total Pay(+Unique)</th>
                                        <td width="50%" class="text-right text-total">
                                            <span class="textblue">${{ $item->transaction_total }}</span>,
                                            <span class="text-orange">{{ mt_rand(0,99) }}</span>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <h2>Payment</h2>
                                <p class="payment">Please complete the payment before you 
                                    continue Wonderful the trip</p>
                                    <div class="bank">
                                        <div class="bank-item pb-3">
                                            <img src="{{ url('frontend/images/ic_payment.png') }}" class="bank-image">
                                            <div class="description">
                                                <h3>PT Nomads ID</h3>
                                                <h3>Bank Central Asia</h3>
                                                <h3>0829 0999 8390</h3>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                        <div class="bank-item pb-3">
                                            <img src="{{ url('frontend/images/ic_payment.png') }}" class="bank-image">
                                            <div class="description">
                                                <h3>PT Nomads ID</h3>
                                                <h3>Bank Central Asia</h3>
                                                <h3>0829 0999 8390</h3>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                
                            </div>
                                    <div class="join-container">
                                        <a href="{{ route('checkout-success',$item->id) }}" class="btn btn-block btn-join-now mt-3">I Have my Payment</a>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="{{ route('detail',$item->travel_package->slug ) }}" class="text-muted">Cancel booking</a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </main>
@endsection
@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/combined/js/gijgo.min.js')}}"></script>
    <script>
        $(document).ready(function(){
                $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                icons:{
                    rightIcon:'<img src="{{ url('frontend/images/ic__Cal.png') }}" />'
                } 
            });
        });
    </script>
@endpush


