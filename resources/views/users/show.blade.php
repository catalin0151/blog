@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <h5 class="display-4">{{$user->name}}</h5>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th>email</th>
                    <td>{{$user->email}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
