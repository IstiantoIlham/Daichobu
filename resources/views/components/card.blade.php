<a href="{{$link}}">
    <div
        class="w-[360px] h-[270px] rounded-3xl overflow-hidden relative hover:scale-110 transition duration-300 group border-2">
        {{ $image }}
        <div
            class="absolute z-10 left-[17px] bottom-[15px] w-[325px] mainCard flex flex-col gap-1 group-hover:opacity-0   transition duration-700">
            <div class="text-xl font-bold text-white m-0">{{ $title ?? 'Lorem Ipsum' }}</div>
        </div>
    </div>
</a>
