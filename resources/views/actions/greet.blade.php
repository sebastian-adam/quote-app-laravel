@extends('layouts.master')

@section('content')
    <div class="centered">
        <a href="{{ route('home') }}">back</a>
        <h1>Greeet {{ $name === null ? 'you' : $name}}</h1>
    </div>
@endsection