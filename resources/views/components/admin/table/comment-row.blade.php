<tr class="border-b border-gray-700 hover:bg-gray-700">
    <td class="py-3 px-4">{{ $comment->id }}</td>
    <td class="py-3 px-4">{{ $comment->name }}</td>
    <td class="py-3 px-4">{{ $comment->comment }}</td>
    <td class="py-3 px-4">{{ $comment->created_at->diffForHumans() }}</td>
    <td class="py-3 px-4">
        <a href="{{ route('admin.posts.comments.edit', [$comment->post_id, $comment]) }}" class="text-blue-400 hover:underline mr-2">Edit</a>
        <form action="{{ route('admin.posts.comments.destroy', [$comment->post_id, $comment]) }}" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
        <a href="{{ route('admin.posts.comments.destroy', [$comment->post_id, $comment]) }}"
            onclick="event.preventDefault();
            if(confirm('Are you sure you want to delete this Comment?')) {
                this.previousElementSibling.submit();
            }"
            class="text-red-400 hover:underline">
            Delete
        </a>
    </td>
</tr>
