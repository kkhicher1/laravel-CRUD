@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h2>Create New Todo</h2>
                <form action="{{route('todo.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                    <input id="title" class="form-control" type="text" name="title" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                    <textarea id="description" class="form-control" name="description" rows="3">{{old('description')}}</textarea>
                    </div>
                    <input type="submit" value="Store Todo" class="btn btn-success btn-block">
                </form>
            </div>
        </div>
    </div>
@endsection