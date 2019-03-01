@extends('pages.layout')
@section('header-bottom')
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Login page</h1>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="account">
        <div class="container">
            <div class="account-top heading">
                <h2>ACCOUNT</h2>
            </div>
            <div class="account-main">
                    <div class="row">
                        <div class="col-sm-12">
                            @foreach($errors->all() as $error)
                               <div class="alert alert-danger text-center" role="alert">{{$error}}</div>
                            @endforeach
                        </div>
                    </div>


                <div class="col-md-6 account-left">

                    @if(session('error_login'))
                        <div class="alert alert-info">
                            {{session('error_login')}}
                        </div>

                    @endif
                    <h3>Existing User</h3>
                    <form class="account-bottom" method="post" action="/user/login">
                        {{csrf_field()}}
                        <input placeholder="Email" type="text"  id="email" name="email" value="{{old('email')}}" >
                        <input placeholder="Password" type="text"  value="{{old('password')}}" name="password" id="password"
                               >
                        <div class="address">
                            {{--<a class="forgot" href="#">Forgot Your Password?</a>--}}
                            <input type="submit" value="Login">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 account-right account-left">
                    <h3>New User? Create an Account</h3>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    <a href="register.html">Create an Account</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection







