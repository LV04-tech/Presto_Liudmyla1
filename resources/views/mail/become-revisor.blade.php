<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>

<body>
    <div>
        <h1>{{__("ui.mess")}}</h1>
        <h2>{{__("ui.info")}}</h2>
        <p>{{__("ui.name")}} {{ $user->name }}</p>
        <p>{{__("ui.mailAddress")}} {{ $user->email }}</p>
        <p>{{__("ui.info")}}</p> 
        <a href="{{ route('make.revisor', compact('user')) }}">{{__("ui.becomeAnAuditor")}}</a>
    </div>
    
</body>


</html>