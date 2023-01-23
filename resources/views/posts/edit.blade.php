<form action="{{ route('posts.update', $post) }}" method="post">
    @method('put')
    @csrf
    <input
        type="text"
        name="title"
        field="title"
        placeholder="Title"
        autocomplete="off"
        :value="@old('title', $post->title)">

    </input>

    <textarea
        name="text"
        rows="10"
        field="text"
        placeholder="Start typing here..."
        :value="@old('text', $post->text)">

    </textarea>


    <button class="mt-6">Save Post</button>
</form>
