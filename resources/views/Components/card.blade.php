<div
    class="w-[360px] h-[270px] rounded-3xl overflow-hidden relative hover:scale-110 transition duration-300 group border-2">
    <img src="{{ asset($image ?? 'images/login-bg.png') }}" alt="gambar" class="w-full h-full object-cover">
    <div
        class="absolute z-10 left-[17px] bottom-[15px] w-[325px] mainCard flex flex-col gap-1 group-hover:translate-y-20 transition duration-300">
        <div class="text-xl font-bold text-white m-0">{{ $title ?? 'Lorem Ipsum' }}</div>
        <div class="text-xs text-white font-bold m-0">By: <span class="font-normal">{{ $name ?? 'Istianto Ilham' }}</span>
        </div>
    </div>
</div>
