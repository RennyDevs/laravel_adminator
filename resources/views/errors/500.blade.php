@extends('layouts.errors')

@section('title', 'Error de servidor.')

@section('img')
<img alt="#" src="/images/500.png" />
@endsection

@section('code', '500')

@section('message_min', 'Oops error de servidor interno.')

@section('message', 'Algo va mal con nuestros servidores, intente de nuevo más tarde.')