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
                <form action="/user/card/edit/{{$card->id}}" method="post" enctype="multipart/form-data"
                      class="col-sm-12
                col-md-8 ">
                    {{csrf_field()}}
                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" name="title" id="inputIconEx2" class="form-control"
                               placeholder="{{$card->title}}">
                        <label for="inputIconEx2">Title</label>
                    </div>
                    <div class="md-form form-group mt-5">
                        <i class="fas fa-envelope prefix"></i>
                        <label for="exampleFormControlTextarea3">Card content</label>
                        <textarea class="form-control" name="content" id="exampleFormControlTextarea3"
                                  rows="7"></textarea>
                    </div>

                    <div class="file-field form-group">
                        <div class="btn btn-primary btn-sm ">
                            <span>Выбрать Image</span>
                            <input type="file" name="image">
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


