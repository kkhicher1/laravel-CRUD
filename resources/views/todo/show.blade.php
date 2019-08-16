@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$todo->title}} 
                <a href="{{route('todo.create')}}" class="btn btn-success btn-sm float-right">Add New Todo</a>
                </div>

                <div class="card-body">
                <p>{{$todo->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
