<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex">
            <p class="opacity-70">
                <strong>Created: </strong> {{ $post->created_at }}
            </p>
            <p class="opacity-70 ml-8">
                <strong>Updated at: </strong> {{ $post->updated_at->diffForHumans() }}
            </p>
            <p class="opacity-70 ml-8">
                @if(date('Y-m-d H:i:s') < $post->expiration_date)
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


        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <h2 class="font-bold text-4xl">
                {{ $post->title }}
            </h2>
            <p class="mt-6">
                {{ $post->text }}
            </p><br>
            <span>
                    Expires on: {{ $post->expiration_date }}

                </span>
        </div>
    </div>
</div>

<a href="{{ route('posts.index') }}">return to posts</a>

