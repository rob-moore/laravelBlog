<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel</title>
</head>
<body>
    <ul>
        @foreach($tasks as $task)
            @if ($task->completed)
                <li><strike>{{ $task->body }}</strike></li>    
            @else
                <li>{{ $task->body }}</li>
           @endif
        @endforeach
    </ul>
</body>
</html>