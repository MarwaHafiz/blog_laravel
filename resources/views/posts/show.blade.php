@extends('layouts.app')
  @section('content')
    <div class="container" style="padding-top:50px; ">
        
        <div class="card">
            <div class="card-header">
                Post Info
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                
                <p>Title: {{$post->title}}</p>
                <h5>Description:</h5>
                <p class="card-text"> {{$post->description}}</p>
                </blockquote>
            </div>
        </div>
        <div style="padding-top:50px;">
            <div class="card" >
                <div class="card-header">
                    Post Creater Info
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Name: {{$post->user->name}}</p>
                    <p class="card-text">Email: {{$post->user->email}}</p>
                    <p class="card-text">Created At: {{$post->created_at}}</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
     @endsection