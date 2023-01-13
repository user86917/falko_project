<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('css')
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  
    <title>Document</title>
</head>
<body>
  <div>
    <h2>falko is zo cool</h2>
    <p>hahahah </p>
  </div>
{{-- <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div> --}}
@yield("content")
</body>
</html>