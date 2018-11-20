@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                {{--<div class="card-header">Dashboard</div>--}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="">
                        <div class="">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <div class="float-right">
                                        <h2>{{Auth::user()->name}}</h2>
                                    </div>
                                    <div class="float-left ">
                                        {{--<img src="{{Auth::user()->image}}" alt="User Image">--}}
                                        <img src="{{asset('img/pro-pic.jpg')}}" width="100px;" alt="" class="rounded-circle">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table-striped">
                                        <tr>
                                            <th width="50%">Name</th>
                                            <td>{{Auth::user()->name}}</td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Email</th>
                                            <td>{{Auth::user()->email}}</td>
                                        </tr>
                                        <tr>
                                            <th width="50%">Mobile Number</th>
                                            <td>{{Auth::user()->mobile_number}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
