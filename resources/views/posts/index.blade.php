@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 style="padding-top:20px;">Blog</h1>
        <div style="text-align:center; padding-top:20px;padding-bottom:20px;">
        <a href="{{route('posts.create')}}" class="btn btn-success" >Create Post</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Title</th>
                    <th scope="col">CreatedAt</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->description}}</td>
                    <td>
                        <form method="POST" action="{{route('posts.destroy',[$post->id])}}">
                            <a href="{{route('posts.show',['post'=>$post->id])}}" class="btn btn-primary">View</a>
                            <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary" type="submit" on_click="confirm('are you sure you want to delete this post?')">Delete</button>
                            <!-- <a href=""value="Delete" class="btn btn-primary">Delete</a> -->
                        </form>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
        @endsection   