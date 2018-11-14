@extends('main.master')

@section('title','IT & Accessory Buyform')

@section('content')
    <div class="container">
        <div class="col-xs-8 col-xs-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">IT & Accessories BuyForm</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post">
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach

                        @if(session('status'))
                            <p class="alert alert-success">{{session('status')}}</p>
                        @endif
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="name" class="col-xs-4 control-label">Your Name</label>
                            <div class="col-xs-6">
                                <input type="text" name="name" id="name" class="form-control" required=""">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mail" class="col-xs-4 control-label">Email</label>
                            <div class="col-xs-6">
                                <input type="email" name="mail" id="mail" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-xs-4 control-label">Your Phone</label>
                            <div class="col-xs-6">
                                <input type="number" name="phone" id="phone" class="form-control" required="">
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="pdname" class="col-xs-4 control-label">You Choice ProductName</label>
                                <div class="col-xs-6">
                                    <input type="text" name="pdname" id="pdname" class="form-control" value="{{$info->title}}">
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="dtail" class="col-xs-4 control-label">Address & Dtails</label>
                            <div class="col-xs-6">
                                <textarea name="dtail" id="dtail" class="form-control" required="">{{$info->about}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6 col-xs-offset-4">
                                <button class="btn-success" name="create">OrderNow</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection