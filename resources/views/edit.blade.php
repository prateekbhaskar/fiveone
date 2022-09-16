@extends('layout')
@php
if (isset($post)) {
    $route = route('post.update', $post->id);
    $text = $post->post;
    $name='post';
}
if (isset($comment)) {
    $route = route('comment.update', $comment->id);
    $text = $comment->comment;
    $name='comment';
}
@endphp
@section('content')
    <div class='form'>
        <label style='font-weight:bold;color:black;text-decoration:underline'>Edit your Post/Comment<br><br></label>
        <form action='{{ $route }}' method="POST">
            @csrf
            @method('PUT')<br>
            <label style='font-weight:bold;color:crimson'>What's on your mind?</label><br>
            <textarea style='width:90%;height:150px'name='{{$name}}'>{{ $text }}</textarea><br>
            @if ($errors->has('post'))
                <div class="error">No Blank Post can be made</div>
            @endif
            <input class='button' type='submit' value='SUBMIT' />
        </form>
    </div>
@endsection
