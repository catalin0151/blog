@extends('layouts.dashboard');
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">User</div>
                <div class="card-body">
                    <form method="POST" action="{{route('users.create')}}">
                        @include('users.form')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection