@extends('layouts.backend')

@section('content')
<div class="masonry-item col-12">
    <div class="bgc-white p-20 bd">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        You are logged in!
    </div>
</div>
@endsection
