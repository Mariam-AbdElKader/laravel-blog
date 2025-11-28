<x-admin.layout title="Edit Post #{{ $post->id }}">
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-300 mb-2">Title</label>
            <input type="text" name="title" id="title" class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required value="{{ old('title', $post->title) }}">
            @error('title')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-300 mb-2">Content</label>
            <textarea name="content" id="content" rows="6" class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>{{ old('content', $post->content) }}</textarea>
            @error('content')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>
        {{-- is active  --}}
        <div class="mb-6">
            <label for="is_active" class="inline-flex items-center text-gray-300">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" id="is_active" @if($post->is_active) checked @endif value="1" class="form-checkbox h-5 w-5 text-purple-600">
                <span class="ml-2">Active</span>
            </label>
        </div>
        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.posts.index') }}" class="px-6 py-2 bg-gray-700 text-gray-200 rounded-md shadow hover:scale-105 transition">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-md shadow hover:scale-105 transition">Update</button>
        </div>
    </form>
</x-admin.layout>
