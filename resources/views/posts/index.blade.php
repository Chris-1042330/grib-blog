<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--        <a href="{{ route('posts.create') }}" class="btn-link btn-lg mb-2">+ New Post</a>--}}
            @foreach ($posts as $post)
                @if($post->updated_at < $post->expiration)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </h2>
                    <p>
                        {{ Str::limit( $post->text, 10 ) }}
                    </p>
                    <span>
                            {{ $post->updated_at }} - {{ $post->updated_at->diffForHumans() }}
                        </span>
                </div>
                @endif
            @endforeach
            {{ $posts->links() }}

    </div>
</div>
