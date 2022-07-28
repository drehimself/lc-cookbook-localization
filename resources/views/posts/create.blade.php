<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('posts.store') }}" method="POST" class="lg:w-1/2">
                        @csrf
                        <div class="mt-4">
                            <label for="title" class="font-semibold block">Title</label>
                            <input type="text" name="title" id="title" class="border border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{ old('title') }}">
                            @error('title')
                                <div class="bg-red-200 text-red-700 rounded-md px-4 py-2 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="body" class="font-semibold block">Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="border border-gray-400 rounded w-full px-2 py-2 mt-2">{{ old('body') }}</textarea>
                            @error('body')
                                <div class="bg-red-200 text-red-700 rounded-md px-4 py-2 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-8">
                            <button type="submit" class="bg-blue-600 rounded inline-block text-white px-4 py-4">
                                {{ __('Create Post') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
