@extends('layouts.base.app')

@section('end')
<body class="app">
    @include('layouts.partials._partials.loader')

    <div>
        @include('layouts.partials.backend.sidebar')
        {{-- #Main ============================ --}}
        <div class="page-container">
            @include('layouts.partials.backend.header')

            {{-- ### $App Screen Content ### --}}
            <div class='main-content bgc-grey-100'>
                <div id='app'> {{-- .full-container --}}
                    <div class="container-fluid"> 
                        <div class="row gap-20 masonry pos-r">
                            @yield('content', 'contenido')
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.partials._partials.footer')
        </div>
    </div>
</body>
@endsection
