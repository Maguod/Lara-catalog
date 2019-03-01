@extends('user.layout')
@section('content')
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <!--Grid row-->
            <div class="card-deck row wow fadeIn">
                <div class="row">
                    <div class="col-sm-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger text-center" role="alert">{{$error}}</div>
                        @endforeach
                    </div>
                </div>
                <!--Main layout-->
                <form action="/user/profile/edit" method="post" enctype="multipart/form-data" class="col-sm-12 col-md-8 ">
                    {{csrf_field()}}
                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" name="name" id="inputIconEx2" class="form-control"
                               placeholder="{{$user->name}}">
                        <label for="inputIconEx2">Ваше имя</label>
                    </div>
                    <div class="md-form form-group mt-5">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="text" name="email" id="inputIconEx1" class="form-control"
                               placeholder="{{$user->email}}">
                        <label for="inputIconEx1">E-mail address</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-lock prefix"></i>
                        <input type="text" name="password" id="inputValidationEx2" class="form-control validate">
                        <label for="inputValidationEx2" data-error="wrong" data-success="right">Rewrite password</label>
                    </div>
                    <div class="file-field form-group">
                        <div class="btn btn-primary btn-sm ">
                            <span>Выбрать аватар</span>
                            <input type="file" name="avatar">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-purple btn-rounded mt-4"><i class="fas fa-user fa-sm pr-2"
                                                                                     aria-hidden="true"></i>Создать</button>
                </form>
            </div>
        </div>
    </main>
    <!--Main layout-->
@endsection

