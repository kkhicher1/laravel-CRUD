@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard 
                <a href="{{route('todo.create')}}" class="btn btn-success btn-sm float-right">Add New Todo</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-light">
                        <tbody>
                            <tr>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Action</td>
                            </tr>
                            @forelse ($todos as $todo)
                                <tr>
                                    <td>{{$todo->title}}</td>
                                <td>{{str_limit($todo->description, 50)}} <a href="{{route('todo.show', ['todo'=>$todo->id])}}">Read More</a></td>
                                    <td class="d-flex">
                                    <a href="{{route('todo.edit', ['todo'=>$todo->id])}}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                    <form action="{{route('todo.destroy', ['todo'=>$todo->id])}}" method="post" >
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    </form>
                                    </td>
                                </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
