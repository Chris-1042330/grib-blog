

<div>
    <p><strong>Created: </strong> {{ $post->created_at }}</p>
    <p><strong>Updated at: </strong> {{ $post->updated_at }}</p>
    <a href="{{ route('posts.edit', $post) }}"
       class="btn-link ml-auto">Edit post</a>

    <form action="{{ route('posts.destroy', $post) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger ml-4"
            onclick="return confirm('Are you sure you wish to delete this post?')">Delete post
        </button>
    </form>
</div>



    <h2>
        {{ $post->title }}
    </h2>
    <p>
        {{ $post->text }}
    </p>


<a href="{{ route('posts.index') }}">return to posts</a>

</div>
