<form action="{{ route('posts.update', $post) }}" method="post">
    @method('put')
    @csrf
    <input
        type="text"
        name="title"
        placeholder="Title"
        class="w-full"
        value="{{$post->title}}">

    <textarea
        name="text"
        rows="10"
        placeholder="Start typing here..."
        class="w-full mt-6">{{$post->text}}</textarea>
    <input
        type="date"
        name="expiration"
        placeholder="Expiration Date"
        class="w-full mt-6"
        value="{{$post->expiration_date}}">



    <button class="mt-6">Save Post</button>
</form>
