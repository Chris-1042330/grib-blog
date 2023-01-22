
<form action="{{ route('posts.update', $post) }}" method="post">
    @method('put')
    @csrf
    <input
        type="text"
        name="title"
        field="title"
        placeholder="Title"
        class="w-full"
        autocomplete="off"
        :value="@old('title', $post->title)">

    </input>

    <textarea
        name="text"
        rows="10"
        field="text"
        placeholder="Start typing here..."
        class="w-full mt-6"
        :value="@old('text', $post->text)">

    </textarea>


    <button class="mt-6">Save Post</button>
</form>
