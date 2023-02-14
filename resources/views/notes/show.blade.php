<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Note</h1>
    <ul>
        <li>Note: {{$note->degree}}</li>
        <li>Region: {{$note->region}}</li>
        <li>Tanana: {{$note->city}}</li>
    </ul>

    <p>{{$note->note}}</p>

    <div style="margin-bottom: 20px">
        <a href="{{route('notes.edit', $note)}}">Edit</a> | 
        <a href="">Delete</a>
    </div>
    <a href="/">Retour to home</a>
</body>
</html>