<div class="w-full px-mainPaddingX py-[25px] fixed top-0 z-30 flex flex-row justify-between bg-mainblack/50 backdrop-blur-2xl items-center">
    <a href="/">
        <x-application-logo />
    </a>
    @guest
        <div class="flex flex-row gap-5">

            <a href="{{ route('register') }}">
                <button
                    class="w-[150px] py-2.5 text-white text-xl bg-mainOrange mainBorder rounded-xl hover:bg-mainOrange/80 transition duration-300">Sign
                    Up</button>
            </a>

            <a href="{{ route('login') }}">
                <button
                    class="w-[150px] py-2.5 text-white text-xl bg-white/20 mainBorder rounded-xl hover:bg-white/50 transition duration-300">Login</button>
            </a>

        </div>
    @else
        <div class="flex flex-row gap-5 ">
            <a href="{{ route('posts.create') }}"
                class="px-5 py-2.5 text-white text-xl bg-mainOrange mainBorder rounded-xl hover:bg-red-500/10 transition duration-300">Create
                Recipe</a>

            <a class="px-5 py-2.5 text-white text-xl bg-red-500 mainBorder rounded-xl hover:bg-red-500/10 transition duration-300"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>Logout
            </a>

        </div>
    @endguest

</div>
