<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
Index page
    <hr>
        <div>
            <a href="{{route('worker.create')}}">Добавить</a>
        </div>
    <hr>

        @foreach($workers as $worker)
            <div>Name: {{$worker->name}}</div>
            <div>Surname: {{$worker->surname}}</div>
            <div>Email: {{$worker->email}}</div>
            <div>Age: {{$worker->age}}</div>
            <div>Description: {{$worker->description}}</div>
            <div>Is married: {{$worker->is_married}} </div>
            <a href="{{route('worker.show', $worker->id)}}">Посмотреть</a>
            <hr>
        @endforeach

</body>
</html>
