<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Characters</title>
</head>
<body>
    @include('layouts/header')
        <h2 class="page-title">Characters</h2>
    <div class="wrap">
    @foreach($datas as $data)
    <div class="character-presentation">
        <a href="/characters/{{ $data->id }}">
        <img src="{{ $data->img_url }}" alt="{{ $data->name }} in person">       
        </a>
        <h3 class="name">{{ $data->name }}</h3>
    </div>
        @endforeach
    </div>
</body>
</html>