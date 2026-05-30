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

        .message{
            background:#1a1a1a;
            border:1px solid #2a2a2a;
            padding:10px;
            margin-top:10px;
            border-radius:10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="title">VoidChat</h1>

    <div class="room">
        Room: {{ $room->name }}

        <div id="messages" class="messages">
            
        </div>
        
    </div>

    <form method="POST" action="{{ url('/message') }}">
        @csrf
        <div>
            <label for="username">User</label>
            <input id="username" type="text" name="username">
        </div>
        <div>
            <label for="message">Message</label>
            <input id="message" type="text" name="message">
        </div>
    
        <button>Send</button>
    </form>
</div>

<script>

    
    async function loadMessages() {
        const res = await fetch('/messages');
        const data = await res.json();

        const box = document.getElementById('messages');
        box.innerHTML = '';

        data.forEach(m => {
            box.innerHTML += `
                <div>
                    <b>${m.username}</b>: ${m.message}
                </div>
            `;
        });
    }

    setInterval(loadMessages, 500);
    loadMessages();
</script>
    
</body>
</html>