<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('success_message'))
                        <div class="bg-green-200 text-green-800 px-4 py-2 mb-4">
                            {{ session('success_message') }}
                        </div>
                    @endif
                    <ul class="list-disc space-y-2 ml-8">
                        @forelse ($posts as $post)
                            <li><a href="{{ route('posts.show', $post) }}" class="text-blue-700">{{ $post->title }}</a></li>
                        @empty
                            <li>No posts found</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
