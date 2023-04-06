@extends('Layout.app')

@section('content')
    <div>
        {{-- @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif --}}
    </div>
    @include('Components.lobby')
    <div class="flex justify-center bg-mainblack p-10">
        @include('Components.card')
    </div>
@endsection
