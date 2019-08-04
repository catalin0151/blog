@extends('layouts.dashboard');
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row align-items-center">
                <h1 class="col display-5">Users</h1>
                <a href="{{route('users.create')}}" class="col-auto btn btn-primary">New User</a>
            </div>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{route('users.show', ['id' => $user->id])}}"><i class="fas px-1 fa-eye"></i></a>
                            <a href="{{route('users.update', ['id' => $user->id])}}"><i
                                    class="fas px-1 fa-edit"></i></a>
                            <a href="{{route('users.delete', ['id' => $user->id])}}"
                               onclick="event.preventDefault();
                                   document.querySelector('#delete-form-{{$user->id}}').submit()"
                            >
                            <i class="fas px-1 fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                    <form id="delete-form-{{$user->id}}" method="POST"
                          action="{{route('users.delete', ['id' => $user->id])}}">
                        @method('DELETE')
                        @csrf
                    </form>
                @endforeach
                </tbody>

            </table>

            {{$users->links()}}
        </div>
    </div>

@endsection
