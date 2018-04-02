@extends('layouts.base.app')

@section('end')
<body class="app">
    @include('layouts.partials._partials.loader')
	<div id="app">
		@yield('content')
	</div>
</body>
@endsection
