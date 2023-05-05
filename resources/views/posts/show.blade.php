@extends('Layout.app')

@section('content')
    <div class="p-mainPaddingX flex flex-col gap-6 text-white">
        <div class="flex flex-col gap-6">
            <div class="flex flex-row justify-between">
                <a href="" onclick="history.back()">
                    <div class="w-16 h-16 border border-white rounded-full flex algin-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-8" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </div>
                </a>

                @guest
                @else
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }} " class="flex flex-row gap-5 align-center"
                        method="POST">
                        <a href="{{ route('posts.edit', $post->id) }}" action="{{ route('posts.destroy', $post->id) }}"
                            method="POST"
                            class="w-16 h-16 flex align-center justify-center border border-white rounded-full text-white bg-blue-500 hover:bg-blue-500/70 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-8" viewBox="0 0 24 24"
                                strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-16 h-16 flex align-center justify-center border border-white rounded-full text-white bg-red-500 hover:bg-red-500/70 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </form>
                @endguest
            </div>
            <img src="{{ asset('storage/posts/' . $post->image) }}" alt="gambar"
                class="w-full h-[500px] object-cover rounded-xl border">
            <div class="text-4xl font-bold">{{ $post->title }}</div>
        </div>

        <div class="text-xl">{!! $post->content !!}</div>
    </div>
@endsection
