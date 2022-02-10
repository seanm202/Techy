<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
      <a href="{{ route('logout') }}">Logout</a>
      Guest dashboard
      <div class="guestDetails">
        @foreach ($userDetails as $userDetail)
        <h2>{{$userDetail->name}}</h2>
        <h2>{{$userDetail->email}}</h2>
    @endforeach
      </div>
    </body>
</html>
