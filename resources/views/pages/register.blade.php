@extends('pages.layout')
@section('header-bottom')
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Register page</h1>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('content')
    <div class="register">
        <div class="container">
            <div class="register-top heading">
                <h2>REGISTER</h2>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger text-center" role="alert">{{$error}}</div>
                    @endforeach
                </div>
            </div>
            <div class="register-main">
                @if(session('error_regisrt_user'))
                    {{session('error_regisrt_user')}}
                @endif
                <form action="/user/register" method="post" class="form_reg">
                    {{csrf_field()}}
                    <div class="col-md-10 offset-md-1 account-left">
                        <input placeholder="Name" type="text" value="{{old('name')}}" name="name" >
                        <input placeholder="Email address" type="text" name="email" value="{{old('email')}}" >
                        <input placeholder="Password" type="text" name="password" value="{{old('password')}}"
                               id="password">
                    </div>
                    <div class="address submit">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection





