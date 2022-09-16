@extends('layout')
@section('content')
<div class='form'>
    <label style='font-weight:bold;color:black;text-decoration:underline'>Created New Post<br><br></label>
    <form action='{{route("post.store")}}' method="POST">
        @csrf <br>
        <label style='font-weight:bold;color:crimson'>What's on your mind?</label><br>
        <textarea style='width:90%;height:150px'name='post' >{{ old('post') }}</textarea><br>
        @if ($errors->has('post'))
            <div class="error">No Blank Post can be made</div>
        @endif
        <input class='button' type='submit' value='SUBMIT' />
    </form>
</div>
@endsection
