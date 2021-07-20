<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>

<body>
<p class="{{ $nav == 'Bleu' ? 'text-info' : '' }}">Bleu</p>
<p class="{{ $nav == 'Red' ? 'text-danger' : '' }}">Red</p>
<p class="{{ $nav == 'Green' ? 'text-success' : '' }}">Green</p>
<p class="{{ $nav == 'white' ? 'bolder' : '' }}">White</p>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
