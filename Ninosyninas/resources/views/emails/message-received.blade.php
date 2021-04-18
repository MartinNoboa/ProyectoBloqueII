<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Mensaje recibido</title>
</head>
<body>

    <p> Recibiste un mensaje de: {{$msg['nombre']}} - {{$msg['email']}}</p>
    <p><strong>Asunto: </strong> {{ $msg['tema']   }}</p> 
    <p><strong>Conte: </strong> {{ $msg['mensaje']   }}</p> 

<footer>

</footer>

</body>
</html>
