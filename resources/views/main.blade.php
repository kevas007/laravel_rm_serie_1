<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(is_numeric($var1)==true && is_numeric($var2)==true)
    <h1>Addition</h1>
    <h3>{{$var1.' + '.$var2}} = {{$var1+$var2}}</h3>
    <h1>Soustraction</h1>
    <h3>{{$var1.' - '.$var2}} = {{$var1-$var2}}</h3>
    @else
    <h1>Vous devez avoir des chiffres</h1>
    @endif


</body>
</html>
