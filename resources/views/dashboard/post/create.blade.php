<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer crud</title>
</head>
<body>
    <h1>ingreso de Post </h1>
    <br>
    <br>
    <form action="{{route('post.store')}}"method="post">
        
           
    @csrf
        <button typle="submit">Enviar</button>
    </form>
    
</body>
</html>