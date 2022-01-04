
<html>
    <head>
    </head>
    <body>
    <ul>
        @if (count($post) == 1)
        <div><span><a href="../posts"> Go Back</a></span></div>
        @endif 
    
        @foreach ($post as $task)
        <a href="/posts/{{ $task->id }}">
            <li>{{ $task->body }} </li></a>
        
        <li>{{ $task->created_at }} </li>
        <li>{{ $task->updated_at }} </li>
        @endforeach
    </ul>
    
    </body>
    </html>