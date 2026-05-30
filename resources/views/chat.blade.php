<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoidChat</title>

    <style>
        body{
            margin:0;
            background:#0a0a0a;
            color:#d4d4d4;
            font-family:Segoe UI, sans-serif;
        }

        .container{
            max-width:900px;
            margin:auto;
            padding:20px;
        }

        .title{
            color:#8b5cf6;
        }

        .room{
            background:#151515;
            border:1px solid #252525;
            padding:15px;
            border-radius:10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="title">VoidChat</h1>

    <div class="room">
        Room: {{ $room->name }}

        <div class="messages">
            @forelse($room->messages as $message)
                <p>
                    <strong>{{ $message->username }}</strong>:
                    {{ $message->message }}
                </p>
            @empty
                <p>El vacío guarda silencio...</p>
            @endforelse
        </div>
        
    </div>
</div>

</body>
</html>