<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--        <a href="{{ route('posts.create') }}" class="btn-link btn-lg mb-2">+ New Post</a>--}}


        <a href="{{ route('posts.index') }}?all" class="btn-link btn-lg mb-2">View all posts</a>
        <br>
        <a href="{{ route('posts.index') }}" class="btn-link btn-lg mb-2">View active posts</a>

        @foreach ($posts as $post)
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-2xl">
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </h2>

                <p>
                    {{ Str::limit($post->text, 120) }}
                </p>
                <span>
                        {{ $post->author }} - {{ $post->updated_at }}
                    </span>
                <p class="opacity-80">
                    @if(date('Y-m-d H:i:s') < $post->expiration_date)
                        ✅ Active
                    @else
                        ⛔ Inactive
                    @endif
                </p>
            </div>
        @endforeach
        {{ $posts->links() }}

    </div>
</div>
