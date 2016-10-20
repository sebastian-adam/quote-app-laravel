@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@section('content')
    <div class="centered">
        @foreach($actions as $action)
            <a href="{{ route('niceaction', ['action' => lcfirst($action->name)]) }}">{{ $action->name }}</a>
        @endforeach
        <br><br>
        @if (count($errors) > 0)
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('add_action') }}" method="post">
            <label for="name">Name of action:</label>
            <input type="text" name="name" id="name"/>
            <label for="niceness">Niceness:</label>
            <input type="text" name="niceness" id="niceness"/>
            <button type="submit" onclick="send(event)">Do a nice action</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
        </form>
        <br><br><br>
        <ul>
            @foreach($logged_actions as $logged_action)
                <li>{{ $logged_action->nice_action->name }}</li>
                @foreach($logged_action->nice_action->categories as $category)
                    {{ $category->name }}
                @endforeach
            @endforeach
        </ul>
        <p>Preformatted pagination:</p>
        {!! $logged_actions->links() !!}
        <p>Custom pagination:</p>
        @if($logged_actions->lastPage() > 1)
            @for($i = 1; $i <= $logged_actions->lastPage(); $i++)
                <a href="{{ $logged_actions->url($i) }}">{{ $i }}</a>
            @endfor
        @endif
        <script type="text/javascript">
            function send(event) {
                event.preventDefault();
                $.ajax({
                   type: "POST",
                   url: "{{ route('add_action') }}",
                   data: {name: $("#name").val(), niceness: $("#niceness").val(), _token: "{{ Session::token() }}"}
                });
            }
        </script>
    </div>
@endsection