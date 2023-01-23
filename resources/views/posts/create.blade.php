<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input
        type="text"
        name="title"
        placeholder="Title"
        class="w-full"
        autocomplete="off">

    <textarea
        name="text"
        rows="10"
        placeholder="Start typing here..."
        class="w-full mt-6"></textarea>

    <input
        type="date"
        name="expiration"
        class="w-full mt-6"
        autocomplete="off">
    <input
        type="text"
        name="author"
        disabled="true"
        placeholder="Author"
        class="w-full mt-6"
        value="{{$user}}">

    <button class="mt-6">Save Blog Item</button>
</form>
