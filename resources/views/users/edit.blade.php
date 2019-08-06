@extends('layouts.dashboard');
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Editing {{$user->name}}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('users.update', ['id' => $user->id])}}">
                        @method('PUT')
                        @include('users.form')
                        <div class="form-group">
                            <a href="{{route('users.edit-password',['id' => $user->id])}}" class="btn btn-primary">
                                Change password
                            </a>
                        </div>
                        <button type="submit" class="btn btn-primary">Update user data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
