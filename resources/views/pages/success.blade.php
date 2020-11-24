@extends('layout.success')
@section('title','success')

@section('content')
    <main>
        <div class="section-succes d-flex align-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_mail.png') }}" width="200" height="200">
                <h1>Yay! Success</h1>
                <p>We,ve sent you email for trip instruction
                    <br>
                Please read it well</p>
                <a href="{{ route('home') }}" class="btn btn-homepage px-5 mt-2 ">Homepage</a>
            </div>
        </div>
    </main>
@endsection


    
