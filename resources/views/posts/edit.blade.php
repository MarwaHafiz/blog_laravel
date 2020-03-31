@extends('layouts.app')
  @section('content')
    <div class="container">
        <form method="post" action="/posts/{{ $post->id }}"> 
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="title" value="{{$post->title}}" type="text" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input name="description" value="{{$post->description}}" type="text" class="form-control" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">User</label>
            <select class="form-control" name="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
  @endsection