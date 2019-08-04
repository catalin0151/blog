@extends('layouts.dashboard');
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Editing {{$user->name}}</div>
                <div class="card-body">
                    <form method="PUT" action="{{route('users.edit', ['id' => $user->id])}}">
                        @method('PUT')
                        @include('users.form')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
