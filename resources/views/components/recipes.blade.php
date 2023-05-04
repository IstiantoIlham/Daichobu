<div class="px-mainPaddingX py-10 bg-mainblack">
    <div class="grid grid-cols-3 gap-12 justify-items-center">
        <x-card >
            <x-slot:image>
                'images/login-bg'
            </x-slot:image>
            <x-slot:title>
                Hello
            </x-slot:title>
        </x-card>
        @forelse ($posts as $post)
            <x-card>
                <x-slot:title>
                    {{ $post->title }}
                </x-slot:title>
            </x-card>
        @empty
        @endforelse
    </div>
    {{ $posts->links() }}
</div>
