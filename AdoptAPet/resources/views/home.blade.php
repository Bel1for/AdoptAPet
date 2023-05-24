@extends('layout')
@section('title') Home @endsection
@section('main')

    @if($errors->any())
        <div class="alert alert-danger" >
            <ul>
                @foreach($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form method="post" action="/">
    @csrf
    <h1>Введите номер телефона</h1>
    <input type="text" name="phone" id="phone"class="form-control" placeholder="Введите номер телефона" ></br>
    <button type="submit" class="btn btn-success col-1">GO</button></br></br></br>
</form>
    <h1>Number</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <table class="table table-striped">
                        <tbody>
                        <tr><td>Valid:</td><td>{{$reviews->phone_valid}}</td></tr>
                        <tr><td>Country:</td><td>{{$reviews->phone_country}}</td></tr>
                        <tr><td>Carrier:</td><td>{{$reviews->carrier}}</td></tr>
                        <tr><td>Type:</td><td>{{$reviews->phone_type}}</td></tr>
                        <tr><td>Int. number:</td><td>{{$reviews->international_number}}</td></tr>
                        <tr><td>Local number:</td><td>{{$reviews->local_number}}</td></tr>
                        <tr><td>E164 number:</td><td>{{$reviews->phone_e164}}</td></tr>
                        <tr><td>Region:</td><td>{{$reviews->phone_region}}</td></tr>
                        <tr><td>Dial code:</td><td>{{$reviews->country_prefix}}</td></tr>
                        <tr><td>Dial code:</td><td>{{$reviews->country_code}}</td></tr>
                        </tbody></table>
                </div>
            </div>
        </div>

<section >

</section>
@endsection
