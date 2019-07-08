@extends('layouts.app')

@section('content')
     <h1 class="text-center">{{$post->title}}</h1>
     </br>
     </br>
     <img class="text-center" style="width:100%" src="{{ Storage::url('cover_image/'.$post->cover_image) }}">
             <div>
                <p>{!!$post->body!!}</p>
             </div>
             <hr>
                <small>Written On: {{$post->created_at}} by {{$post->user->name}}</small>
                <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
@endsection