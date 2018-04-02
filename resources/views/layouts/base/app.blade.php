<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex, nofollow, noarchive">

  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', '') {{ config('app.name') }}</title>

  {{-- Styles --}}
  <link rel="shortcut icon" href="{{ asset('/favicon.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
  {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
@yield('head')
</head>

@yield('end')

<script src="{{ asset('/js/app.js') }}"></script>
@yield('footer')
</html>
