@extends('layouts.'.((\Auth::check()) ? 'backend' : 'frontend'))

@section('title', 'Error | ')

@section('head')
<style>
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
}
</style>
@endsection

@section('content')
<div class="flex-center">
    <div class='pos-a t-0 l-0 bgc-white w-100 h-100 d-f fxd-r fxw-w ai-c jc-c pos-r p-30'>
        <div class='mR-60'>
            @yield('img')
        </div>

        <div class='d-f jc-c fxd-c'>
            <h1 class='mB-30 fw-900 lh-1 c-red-500' style="font-size: 60px;">@yield('code')</h1>
            <h3 class='mB-10 fsz-lg c-grey-900 tt-c'>@yield('message_min')</h3>
            <p class='mB-30 fsz-def c-grey-700'>@yield('message')</p>
            <div>
                <a href="{{ asset('/') }}" type='primary' class='btn btn-primary'>Ir a casa.</a>
            </div>
        </div>
    </div>
</div>
@endsection