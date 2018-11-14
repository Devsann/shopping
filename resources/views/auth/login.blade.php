@extends('main.master')
@section('title','LogIn')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading">LogIn</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="post">
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">Name</label>
                                <div class="col-xs-6">
                                    <input type="text" id="name" name="name" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-xs-4 control-label">Email</label>
                                <div class="col-xs-6">
                                    <input type="email" name="email" id="email" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-xs-4 control-label">Password</label>
                                <div class="col-xs-6">
                                    <input type="password" id="password" name="password" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6 col-xs-offset-4">
                                    <button type="submit" name="add" class="btn btn-primary">Log In</button>
                                    <a href="{{url('/register')}}" class="btn btn-default pull-right" role="button">အေကာင့္မရွိပါကဒီမွာ၀င္ပါ</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
