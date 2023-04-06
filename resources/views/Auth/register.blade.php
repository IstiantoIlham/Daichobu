@extends('Layout.login-register')

@section('content')
    <div
        class="flex flex-col w-[500px] gap-12 justify-center absolute text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">

        <a href="{{ route('homepage') }}" class="flex gap-4 items-center loginForm hover:bg-white/20 transition duration-300">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.9209 1.50495C17.9206 1.90264 17.7623 2.28392 17.4809 2.56495L9.80895 10.237C9.57673 10.4691 9.39252 10.7447 9.26684 11.0481C9.14117 11.3515 9.07648 11.6766 9.07648 12.005C9.07648 12.3333 9.14117 12.6585 9.26684 12.9618C9.39252 13.2652 9.57673 13.5408 9.80895 13.773L17.4709 21.435C17.7442 21.7179 17.8954 22.0968 17.892 22.4901C17.8885 22.8834 17.7308 23.2596 17.4527 23.5377C17.1746 23.8158 16.7983 23.9735 16.405 23.977C16.0118 23.9804 15.6329 23.8292 15.3499 23.556L7.68795 15.9C6.65771 14.8677 6.0791 13.4689 6.0791 12.0105C6.0791 10.552 6.65771 9.15322 7.68795 8.12095L15.3599 0.443953C15.5697 0.234037 15.8371 0.0910666 16.1281 0.0331324C16.4192 -0.0248017 16.7209 0.00490445 16.9951 0.118492C17.2692 0.232079 17.5036 0.424443 17.6684 0.671242C17.8332 0.918041 17.9211 1.20818 17.9209 1.50495V1.50495Z"
                    fill="white" />
            </svg>
            <div class="text-xl">Back To Daichobu</div>
        </a>

        <div class="flex flex-col gap-6 items-center loginForm">
            <div class="text-4xl text-white"><span class="font-bold text-mainOrange">Daicho</span>bu</div>

            <form action="{{ route('store') }}" method="POST" class="w-full flex flex-col gap-6">
                @csrf
                <div>
                    <input type="name" name="name" id="name"
                        class="form w-full text-xl text-white @error('name') is-invalid @enderror"
                        placeholder="{{ $errors->has('name') ? $errors->first('name') : 'Name' }}"
                        value="{{ old('name') }}">
                </div>

                <div>
                    <input type="email" name="email" id="email"
                        class="form w-full text-xl text-white @error('email') is-invalid @enderror"
                        placeholder="{{ $errors->has('email') ? $errors->first('email') : 'Email' }}"
                        value="{{ old('email') }}">
                </div>

                <div>
                    <input type="password" name="password" id="password"
                        class="form w-full text-xl text-white @error('password') is-invalid @enderror"
                        placeholder="{{ $errors->has('password') ? $errors->first('password') : 'Password' }}">
                </div>

                <div>
                    <input type="password" class="form w-full text-xl text-white" id="password_confirmation"
                        name="password_confirmation" placeholder="Confirm Password">
                </div>

                <button type="submit"
                    class="w-full bg-mainOrange p-5 rounded-3xl mainBorder text-xl hoverOrange">Register</button>
            </form>




        </div>

    </div>
@stop
