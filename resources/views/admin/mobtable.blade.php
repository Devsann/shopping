@extends('main.master')

@section('title','Mobile Table')

@section('content')
    <div class="container">
        <div class="row mob_head">
            <div class="col-xs-6 mob_left">
                <h4>Mobile & Accessories</h4>
            </div>
            <div class="col-xs-6 mob_right">
                <a href="{{url('admin/compani/mobtable/mobform')}}" class="btn btn-primary pull-right" role="button">Create New Post</a>
            </div>
        </div><br>
    </div><hr>

    <div class="container">
        <table class="table">
            <thead>
            <th>#</th>
            <th>brand / name</th>
            <th>body</th>
            <th>price</th>
            <th>created_at</th>
            <th>action</th>
            </thead>
                <tbody>
                @foreach($mob as $mobs)
                    <tr>
                        <td>{{$mobs->id}}</td>
                        <td>{{$mobs->brand}}</td>
                        <td>{{$mobs->about}}</td>
                        <td>{{$mobs->price}}</td>
                        <td>{{$mobs->created_at}}</td>
                        <td>
                            <a href="{{url('/mobview')}}" class="btn btn-default btn-sm">Views</a>
                            <a href="#" class="btn btn-default btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

        </table>
    </div>
    @endsection