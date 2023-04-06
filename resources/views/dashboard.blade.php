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
@endsection
