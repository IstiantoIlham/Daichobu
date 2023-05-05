@extends('Layout.app')

@section('content')
    <div class="w-full min-h-screen bg-mainblack p-mainPaddingX">
        <div class="grid grid-cols-3 gap-12 justify-items-center">
            @forelse ($posts as $post)
                <x-card>
                    <x-slot:link>
                        {{ route('posts.show', $post->id) }}
                    </x-slot:link>
                    <x-slot:image>
                        <img src="{{ asset('/storage/posts/' . $post->image) }}" alt="gambar"
                            class="w-full h-full object-cover">
                    </x-slot:image>
                    <x-slot:title>
                        {{ $post->title }}
                    </x-slot:title>
                </x-card>
            @empty
                <div class=" text-white text-9xl animate-bounce">Empty</div>
            @endforelse
        </div>
    </div>
@endsection
