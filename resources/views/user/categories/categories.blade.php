@extends('user.layout')
@section('content')
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <!--Grid row-->
                <div class="row">
                    <div class="col-sm-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger text-center" role="alert">{{$error}}</div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <h4 class="text-center text-capitalize mb-3">All categories</h4>
                        <ul class="list-group list-group-flush">
                            @foreach($cats as $cat)
                                <li class="list-group-item">{{$cat->title}}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!--Main layout-->
            <div class="row">
                <div class="col-12">
                    <form action="/user/categories/create" method="post" class="col-sm-12  col-md-8 ">
                        {{csrf_field()}}
                        <div class="md-form form-group mt-5">
                            <input type="text" name="title" class="form-control" id="formGroupExampleInputMD" placeholder=""
                                   value="{{old('title')}}">
                            <label for="formGroupExampleInputMD">Add Title Category</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-rounded mt-4"><i class="fas fa-cat fa-lg pr-2"
                                                                                         aria-hidden="true"></i>Создать</button>
                    </form>
                </div>
            </div>

            </div>
    </main>
    <!--Main layout-->
@endsection





