<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>user_id</title>
    </head>
    <body>
        <h1>user_idと名前</h1>
        
        <div class="user_id">
        {{ Auth::id() }}
        </div>
        <div class="user_name">
        {{ Auth::user()->name }}
        </div>
    </body>
</html>