@extends('layout')
@section('content')
    <div class='post-comment'>
        <button class='create-post-button' onclick='location.replace(`{{ route('post.create') }}`)'>Create new Post</button>
        @php $i=1 @endphp
        @foreach ($posts as $post)
            <div class='post'>
                # {{ $i . '- ' . $post['post'] . ' - ' . $post['posted_on'] }}
                <button class='edit-post' onclick='location.replace(`{{ route('post.edit', $post['id']) }}`)'>Edit
                    Post</button>
                <form action='{{ route('post.destroy', $post['id']) }}' method='POST'>
                    @csrf
                    @method('delete')
                    <button class='delete-post' type='submit'>Delete Post</button>
                </form>

                <div class='comments'>
                    @foreach ($post['comments'] as $comment)
                        <div class='comment'>
                            -->{{ $comment['comment'] . ' --- ' . $comment['updated_at'] }}
                            <button class='edit-comment'
                                onclick='location.replace(`{{ route('comment.edit', $comment['id']) }}`)'>Edit
                                comment</button>
                            <form action='{{ route('comment.destroy', $comment['id']) }}' method='POST'>
                                @csrf
                                @method('delete')
                                <button type='submit' class='delete-comment'>Delete comment</button>
                            </form>
                        </div>
                    @endforeach
                    <form action='{{ route('comment.store') }}' method='POST'>
                        @csrf
                        <input name='post_id' hidden value={{ $post['id'] }} />
                        <textarea style='height:50px;width:75%;border-radius:5px' name='comment'></textarea>
                        <button class='create-comment-button'
                            onclick='location.replace(`{{ route("comment.create")}}`)'>Add new Comment</button>
                    </form>
                </div>
            </div>
            @php $i++ @endphp
        @endforeach
    </div>
@endsection
