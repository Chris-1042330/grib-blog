<div>
    <div>

        <div class="flex">
            <p class="opacity-70">
                <strong>Created: </strong> {{ $post->created_at }}
            </p>
            <p>
                <strong>Updated at: </strong> {{ $post->updated_at->diffForHumans() }}
            </p>
            <p>
                @if($post->status == 1)
                    ✅ Active
                @else
                    ⛔ Inactive
                @endif
            </p>


            <a href="{{ route('posts.edit', $post) }}" class="btn-link ml-auto">Edit Post</a>
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you wish to delete this post?')">Delete Post</button>
            </form>

        </div>


        <div>
            <h2>
                {{ $post->title }}
            </h2>
            <p>
                {{ $post->text }}
            </p>
            <p>
                Expires on: {{ $post->expiration_date }}
            </p>
        </div>
    </div>
</div>

<a href="{{ route('posts.index') }}">return to posts</a>

