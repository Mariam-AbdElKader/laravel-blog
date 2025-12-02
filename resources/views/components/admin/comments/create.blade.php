<form action="{{ route('admin.posts.comments.store', $post) }}" method="POST"
     class="bg-gray-800 p-6 rounded-lg shadow-lg mt-8 max-w-4xl mx-auto">
     @csrf
     <div class="mb-4">
         <label for="name" class="block text-gray-300 mb-2">Name</label>
         <input type="text" name="name" id="name"
             class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
             required value="{{ old('name') }}">
         @error('name')
             <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
         @enderror
     </div>
     <div class="mb-4">
         <label for="comment" class="block text-gray-300 mb-2">Comment</label>
         <textarea name="comment" id="comment" rows="6"
             class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
             required>{{ old('comment') }}</textarea>
         @error('comment')
             <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
         @enderror
     </div>
     <div class="flex justify-end space-x-4">
         {{-- <a href="{{ route('admin.posts.index') }}"
             class="px-6 py-2 bg-gray-700 text-gray-200 rounded-md shadow hover:scale-105 transition">Cancel</a> --}}
         <button type="submit"
             class="px-6 py-2 bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-md shadow hover:scale-105 transition">Create
             Comment</button>
     </div>
 </form>
