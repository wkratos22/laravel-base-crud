<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Document</title>
</head>
<body>
    <div class="text-center">
        <h1>Fumetti</h1>
    </div>

    @forelse ($fumetti as $fumetto)

        <div class="card text-bg-primary mb-3 text-center inline mt-5" style="max-width: 60%;">
            <div class="card-header">{{ $fumetto -> title }}</div>
            <div class="card-body">
              <img src="{{ $fumetto -> thumb }}" class="card-title">
              <p>DESCRIPTION:</p>
              <p class="card-text">{{ $fumetto -> description }}</p>
              <p class="card-text">SERIES: {{ $fumetto -> series }}</p>
              <p class="card-text">TYPE: {{ $fumetto -> type }}</p>
              <p class="card-text">DATE: {{ $fumetto -> sale_date }}</p>
              <p class="card-text">PRICE: {{ $fumetto -> price }}</p>
            </div>
          </div>
          
    @empty
        <h2>non ci sono oggetti</h2>
    @endforelse



    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>
