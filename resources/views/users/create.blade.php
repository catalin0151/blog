@extends('layouts.dashboard');
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">User</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br />
                    @endif
                    <form method="POST" action="{{route('users.store')}}">
                        @include('users.form')
                        <button class="btn btn-primary" type="submit">Create user</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
