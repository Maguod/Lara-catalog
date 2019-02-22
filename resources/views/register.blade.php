@extends('layouts.layoutHome')
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
            <div class="register-main">
                <form action="/register" method="post" class="form_reg">
                    <div class="col-md-10 offset-md-1 account-left">
                        <input placeholder="Name" type="text" tabindex="1" name="name" required>
                        <input placeholder="Email address" type="text" name="email" tabindex="3" required>
                        <input placeholder="Password" type="text" name="password" tabindex="3" required>
                    </div>
                    <div class="address submit">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection





