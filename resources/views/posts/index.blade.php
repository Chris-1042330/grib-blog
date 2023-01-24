<div>
    <div>
        <a href="{{ route('posts.create') }}" >New Post</a><br>
        <a href="{{ route('posts.index') }}" >Show all posts</a><br>
        <a href="{{ route('posts.index') }}?active" >View active posts</a>

        @if($posts->isEmpty())
            <h2>no blog posts :(</h2>
        @else
            @foreach ($posts as $post)
                <div>
                    <h2>
                        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </h2>
                    <p>{{ Str::limit($post->text, 120) }}</p>
                    <span>{{ $post->author }} - {{ $post->updated_at }}</span>
                    <p>
                        @if($post->status == 1)
                            ✅ Active
                        @else
                            ⛔ Inactive
                        @endif
                    </p>
                </div>
            @endforeach
        {{ $posts->links() }}
        @endif
    </div>
</div>
