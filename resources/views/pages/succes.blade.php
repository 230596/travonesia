@extends('layouts.succes')
@section('title','Checkout Succes')

@section('content')
<main>
    <div class="section-succes d-flex align-items-center">
        <div class="col text-center">
            <img src="{{url('frontend/images/ic_mail.png')}}" alt="" class="mt-5">
            <h1>Yay! Success</h1>
            <p>We’ve sent you email for trip instruction
                <br>
                please read it as well
            </p>
            <a href="{{ url('/')}}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>
@endsection