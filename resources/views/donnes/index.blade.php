<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index </title>
</head>
<body>
    <h1>contenu de la page index</h1>
    <h1>{{$name}}</h1>
    <h1>{{$age}}</h1>

    @foreach($names as $name )
        <div>
              le nom est : {{$name}}
        </div>

    @endforeach
   

</body>
</html>