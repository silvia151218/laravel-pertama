@extends('layouts.app')

@section('title', 'Urutan')

@section('content')

@foreach ($friends as $friend)

<h2> nama - {{$friend['nama']}}</h2>
 <h2>no telp- {{$friend['no_telp']}}</h2>
 <h2>alamat- {{$friend['alamat']}}</h2>

@endforeach
@endsection