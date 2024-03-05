@extends('components.dashboard')
@section('konten')
    <h1>Selamat datang {{ Auth::guard('user')->user()->username }}</h1>
@endsection
