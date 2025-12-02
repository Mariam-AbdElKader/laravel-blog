<x-admin.layout title="View Post #{{ $post->id }}">
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
        <h2 class="text-2xl font-semibold mb-4">{{ $post->title }}</h2>
        <p class="mb-6 whitespace-pre-line">{{ $post->content }}</p>
        <p class="text-sm text-gray-400">Status:
            @if ($post->is_active)
                <span class="text-green-400">Active</span>
            @else
                <span class="text-red-400">Inactive</span>
            @endif
        </p>
        <p class="text-sm text-gray-400">Created at: {{ $post->created_at->format('M d, Y h:i A') }}</p>
        <p class="text-sm text-gray-400">Updated at: {{ $post->updated_at->format('M d, Y h:i A') }}</p>
        <div class="mt-6 flex justify-end space-x-4">
            <a href="{{ route('admin.posts.index') }}"
                class="px-6 py-2 bg-gray-700 text-gray-200 rounded-md shadow hover:scale-105 transition">Back to
                Posts</a>
            <a href="{{ route('admin.posts.edit', $post) }}"
                class="px-6 py-2 bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-md shadow hover:scale-105 transition">Edit
                Post</a>
            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this post?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="px-6 py-2 bg-red-600 text-white rounded-md shadow hover:scale-105 transition">Delete
                    Post</button>
            </form>
        </div>
    </div>

    <x-admin.comments.show :post="$post" />

</x-admin.layout>
