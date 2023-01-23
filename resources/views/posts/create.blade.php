<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input
        type="text"
        name="title"
        placeholder="Title"
        autocomplete="off">

    <textarea
        name="text"
        rows="10"
        placeholder="Start typing here..."
    ></textarea>

    <input
        type="date"
        name="expiration"
        autocomplete="off">
    <input
        type="text"
        name="author"
        placeholder="Author">

    <button class="mt-6">Save Blog Item</button>
</form>
