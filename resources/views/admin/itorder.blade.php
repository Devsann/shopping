@extends('main.master')

@section('title','IT & Accessory OrderList')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <h4>IT & Accessory Order Lists</h4>
                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>ProductName</th>
                        <th>Address & Dtails</th>
                        <th>Create_at</th>
                        </thead>
                        <tbody>

                        @foreach($itorder as $itorder)
                            <tr>
                                <td>{{$itorder->id}}</td>
                                <td>{{$itorder->name}}</td>
                                <td>{{$itorder->mail}}</td>
                                <td>{{$itorder->phone}}</td>
                                <td>{{$itorder->pdname}}</td>
                                <td>{{$itorder->dtail}}</td>
                                <td>{{$itorder->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection