<tr class="border-b border-gray-700 hover:bg-gray-700">
    <td class="py-3 px-4">{{ $post->id }}</td>
    <td class="py-3 px-4">{{ $post->title }}</td>
    <td class="py-3 px-4">
        @if ($post->is_active)
            <span title="Active"><i class="fas fa-check text-green-500 text-xl"></i></span>
        @else
            <span title="Inactive"><i class="fas fa-times text-red-500 text-xl"></i></span>
        @endif
    </td>
    <td class="py-3 px-4">{{ $post->created_at->diffForHumans() }}</td>
    <td class="py-3 px-4">{{ $post->comments_count }}</td>
    <td class="py-3 px-4">
        <a href="{{ route('admin.posts.show', $post) }}" class="text-yellow-400 hover:underline mr-2">Show</a>
        <a href="{{ route('admin.posts.edit', $post) }}" class="text-blue-400 hover:underline mr-2">Edit</a>
        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
        <a href="{{ route('admin.posts.destroy', $post) }}"
            onclick="event.preventDefault();
            if(confirm('Are you sure you want to delete this post?')) {
                this.previousElementSibling.submit();
            }"
            class="text-red-400 hover:underline">
            Delete
        </a>
    </td>
</tr>
