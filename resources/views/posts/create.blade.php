<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" field="title" placeholder="Title" class="w-full" autocomplete="off"></input>
    @error('title')
    <div class="text-red-600 text-sm">{{ $message }}</div>
    @enderror

    <textarea name="text" rows="10" field="text" placeholder="Start typing here..." class="w-full mt-6"></textarea>


    <button class="mt-6">Save Blog Item</button>
</form>
