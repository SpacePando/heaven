<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Heavenly Suites</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="shortcut icon" href="{{ asset('img/logoICN.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
       
    </head>
    <body>

      @yield('content')


    </body>