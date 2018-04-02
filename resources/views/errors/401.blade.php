@extends('layouts.errors')

@section('title', 'No autorizado.')

@section('img')
<img alt="#" src="/images/401.png" />
@endsection

@section('code', '401')

@section('message_min', 'Oops usted no esta autorizado.')

@section('message', 'Lo sentimos, la página que está buscando no tiene permisos para acceder.')