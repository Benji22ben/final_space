 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
     <title>{{ $datas->name }}</title>
 </head>
 <body>
    @include('layouts/header')
    <div class="character">
        <div class="status-name">
                <h3 class="character-name" >{{ $datas->name }}</h3>
            @if ($datas->status = "Alive")
                <div class="greenpoint"></div>
            @else
            <div class="redpoint"></div>
            @endif
        </div>
        <div class="character-alias">
        @foreach ($datas->alias as $alias)
            <p class="alias" >{{ $alias }},</p>
        @endforeach
        </div>
        <div class="div-character-stats">
            <img class="character-img" src="{{ $datas->img_url }}" alt="{{ $datas->name }} in person">
            <div class="character-stats">
        @if (array_key_exists("species", $datas))
            <p class="datas" >{{ $datas->species }}</p>
        @else
        @endif        
            <p class="datas" >{{ $datas->gender }}</p>
            <p class="datas" >{{ $datas->hair }}</p>
            <p class="datas" >{{ $datas->origin }}</p> 
        </div>
        <div class="character-abilities">
        @if ($datas->abilities != null)
        <p class="title-abilities">Abilities :</p>
        @foreach ($datas->abilities as $abilities) 
            <p class="abilities" >{{ $abilities }}</p> 
        @endforeach
        @else
        @endif
        </div>
    </div>
    </div>
 </body>
 </html> 