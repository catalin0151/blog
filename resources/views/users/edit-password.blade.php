@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Change password</div>
                <div class="card-body">
                    @include('parts.messages')
                    <form method="POST" action="{{route('users.update-password', ['id' => $user->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password" />
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password</label>
                            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" />
                        </div>
                        <button type="submit" class="btn btn-primary">Change password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
