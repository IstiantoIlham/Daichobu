<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<body class="bg-mainblack">
    <div class="px-mainPaddingX py-10 flex flex-col gap-12">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-12  text-white">
            @csrf
            @method('PUT')
            <div class="flex flex-row gap-5 items-center">
                <button onclick="history.back()">
                    <svg class="text-white w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <div class="text-white font-bold text-2xl">Edit Recipe</div>
            </div>

            <div class="space-y-5">
                <div class="w-full">
                    <label class="flex justify-center w-full h-[500px] px-4 form">
                        <span class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <div class="">Click Here to Upload Your Image</div>
                            <input type="file" name="image" class="">
                        </span>

                    </label>
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div class="text-2xl font-bold">Title</div>
                <input type="text" class="form" name="title" value="{{ old('title', $post->title) }}"
                    placeholder="Insert your food">
            </div>

            <div class="flex flex-col gap-6">
                <div class="text-2xl font-bold">Content</div>
                <div class="form">
                    <div class="bg-white p-5 rounded-xl text-mainblack">
                        <input id="x" type="hidden" name="content" value="{{ old('content', $post->content) }}">
                        <trix-editor input="x" class=""></trix-editor>
                    </div>
                </div>
            </div>

            <div class="flex flex-row gap-5 w-full justify-end">
                <button type="reset" class="text-red-500 ">RESET</button>

                <button type="submit"
                    class="w-fit bg-mainOrange hoverOrange flex flex-row gap-3 items-center rounded-xl p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" fill="none" viewBox="0 0 24 24"
                        strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                    </svg>
                    <div class="text-xl font-bold">Publish</div>
                </button>
            </div>
        </form>

    </div>
</body>

</html>
