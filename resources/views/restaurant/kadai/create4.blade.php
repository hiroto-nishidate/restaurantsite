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
        <p>{{ Auth::id() }}さん</p>
        </div>
        <div class="user_name">
        <p>{{ Auth::user()->name }}さん</p>
        <p>Hello World</p>
        </div>
    </body>
</html>