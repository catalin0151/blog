@extends('layouts.dashboard');
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">User</div>
                <div class="card-body">
                    @include('parts.messages')
                    <form method="POST" action="{{route('users.store')}}">
                        @include('users.form')
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password" />
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password confirmation</label>
                            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" />
                        </div>
                        <button class="btn btn-primary" type="submit">Create user</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
