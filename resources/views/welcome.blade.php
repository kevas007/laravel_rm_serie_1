<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (($kev/4) ===1)
    <p>le resulat de 4 * {{ $kev }}</p>
    @elseif (($kev/4) === 0)
    <p>erreur</p>
    @else
    I don't have any records!
    @endif
</body>
</html>
