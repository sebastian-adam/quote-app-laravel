@extends('layouts.master')

@section('content')
<style>
    .input-group label {
        text-align: left;
    }
    
</style>

<form action="" method="post">
    <div class="input-group">
        <label for="name">Your name</label>
        <input type="text" name="name" id="name" placeholder="Your name" />
    </div>
    <div class="input-group">
        <label for="password">Your password</label>
        <input type="text" name="password" id="password" placeholder="Your password" />
    </div>
    <button type='submit'>Submit</button>
</form>
@endsection