@extends('main.master')

@section('title','Mobile & Accessory')

@section('content')
    <div class="container">
        <div class="row mob_row">
            @foreach($mob as $mobs)
                <div class="col-xs-3 mob_a">
                    <a href="#"><img src="{{'/uploads/'.$mobs->img}}" alt="brandImg"></a>
                    <div class="mob_brand">
                        <p>{{$mobs->brand}}</p>
                    </div>
                    <div class="body">
                        <p>{{$mobs->about}}</p>
                        <p>{{$mobs->price}}</p>
                    </div>
                    <div class="body_foot">
                        <button class="btn btn-default btn-sm">Ph-{{$mobs->phone}}</button>
                        <a href="#" class="btn btn-primary btn-sm pull-right">$ Order</a>
                    </div>
                </div>
                @endforeach
        </div>
        <div class="text-center">
            {!! $mob->links(); !!}
        </div>
    </div>
    @endsection