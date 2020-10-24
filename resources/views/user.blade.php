@extends('layouts.master')

@section('title')
Perfil de {{$usr -> name}}
    @endsection

@section('content')
<p><strong>Email:</strong>{{$usr->email}}</p>
<p><strong>Contraseña:</strong>{{$usr->password}}</p>

@endsection
