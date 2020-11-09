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
                                <h1>Who is Going?</h1>
                                <p>Trip to Ubud, Bali, Indonesia</p>
                                <div class="attende">
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <td>Picture</td>
                                                <td>Name</td>
                                                <td>Nationality</td>
                                                <td>Visa</td>
                                                <td>Passport</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="frontend/images/usergoing.png" alt="">
                                                </td>
                                                <td class="align-middle">Hari Darmawan</td>
                                                <td class="align-middle">ID</td>
                                                <td class="align-middle">N/A</td>
                                                <td class="align-middle">Active</td>
                                                <td class="align-middle">
                                                    <img src="frontend/images/X.png" alt="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="frontend/images/usergoing.png" alt="">
                                                </td>
                                                <td class="align-middle">Nada Salsabila</td>
                                                <td class="align-middle">KR</td>
                                                <td class="align-middle">N/A</td>
                                                <td class="align-middle">Active</td>
                                                <td class="align-middle">
                                                    <a href="">
                                                    <img src="frontend/images/X.png" alt="">
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="frontend/images/usergoing.png" alt="">
                                                </td>
                                                <td class="align-middle">Nada Salsabila</td>
                                                <td class="align-middle">KR</td>
                                                <td class="align-middle">N/A</td>
                                                <td class="align-middle">Active</td>
                                                <td class="align-middle">
                                                    <a href="">
                                                    <img src="frontend/images/X.png" alt="">
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="frontend/images/usergoing.png" alt="">
                                                </td>
                                                <td class="align-middle">Nada Salsabila</td>
                                                <td class="align-middle">KR</td>
                                                <td class="align-middle">N/A</td>
                                                <td class="align-middle">Active</td>
                                                <td class="align-middle">
                                                    <a href="">
                                                    <img src="frontend/images/X.png" alt="">
                                                    </a>
                                                </td>
                                            </tr>

                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="member mt-3">
                                    <h2>Add Member</h2>
                                    <form action="" class="form-inline">
                                        <Label for="inputUsername" class="sr-only">Name</Label>
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername"
                                        placeholder="Username" name="inputUsername">

                                        <Label for="inputVisa"class="sr-only">Visa</Label>
                                        <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                            <option value="Visa" selected>VISA</option>
                                            <option value="30 days">30 days</option>
                                            <option value="N/A">N/A</option>
                                        </select>

                                        <Label for="DOEPassport"class="sr-only">DOE</Label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control datepicker" id="DOEPassport"
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
                                        <td width="50%" class="text-right">2 Person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Additional Visa</th>
                                        <td width="50%" class="text-right">$190,00</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Trip Price</th>
                                        <td width="50%" class="text-right">$80,00/person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total Price</th>
                                        <td width="50%" class="text-right">$280,00</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total Pay(+Unique)</th>
                                        <td width="50%" class="text-right text-total">
                                            <span class="textblue">$279</span>,<span class="text-orange">33</span>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <h2>Payment</h2>
                                <p class="payment">Please complete the payment before you 
                                    continue Wonderful the trip</p>
                                    <div class="bank">
                                        <div class="bank-item pb-3">
                                            <img src="frontend/images/ic_payment.png" class="bank-image">
                                            <div class="description">
                                                <h3>PT Nomads ID</h3>
                                                <h3>Bank Central Asia</h3>
                                                <h3>0829 0999 8390</h3>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                        <div class="bank-item pb-3">
                                            <img src="frontend/images/ic_payment.png" class="bank-image">
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
                                        <a href="succes.html" class="btn btn-block btn-join-now mt-3">I Have my Payment</a>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="detail.html" class="text-muted">Cancel booking</a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </main>
@endsection
@push('prepend-style')
    <link rel="stylesheet" href="frontend/libraries/combined/css/gijgo.min.css">
@endpush

@push('addon-script')
    <script src="frontend/libraries/combined/js/gijgo.min.js"></script>
    <script>
        $(document).ready(function(){
                $('.datepicker').datepicker({
                uiLibrary:'bootstrap4',
                icons:{
                    rightIcon:'<img src="frontend/images/ic__Cal.png">'
                } 
            });
        });
    </script>
@endpush


