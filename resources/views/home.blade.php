<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
    </head>
    <body>
    <ul>
        <li>name: {{ $profile->name }}</li>
        @if ($profile->state)
            <li>state: {{ $profile->state }}</li>
        @endif
    </ul>
    </body>
</html>
