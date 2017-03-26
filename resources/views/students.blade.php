<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


{{--{{ Auth::check() }}--}}

@if (Auth::check())

    <h1>{{ access()->hasRole('Administrator') }}</h1>
    <h1>{{ $logged_in_user }}</h1>
    <h1>{{ $logged_in_user->roles }}</h1>
    <h1>{{ $logged_in_user->roles[0]->name }}</h1>
    <h1>{{ Auth::user()->name  }}</h1>
    <h1>{{ auth()->id() }}</h1>
    <h1>{{ auth()->user()->getAuthPassword() }}</h1>

    {{--<h1>{{ Auth::user()->roles()->name  }}</h1>--}}

@endif


// need all teachers that the student is connected to
<ol>
    @foreach($students as $student)
        {{--<li>{{ $student }}</li>--}}
    @endforeach
</ol>

// need to confirm the relationships

</body>
</html>