@extends('layouts.app')
  @section('content')
  <h2>Create Page</h2>
    <div class="container">
        <form method="post" action="{{route('posts.store')}}"> 
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="title" type="text" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input name="description" type="text" class="form-control" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">User</label>
            <select class="form-control" name="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection