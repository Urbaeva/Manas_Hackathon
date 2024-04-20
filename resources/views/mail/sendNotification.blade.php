<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Manas Notification</title>
</head>
<body>
<div class="card card-block">
    <div class="card-header d-flex justify-content-between pb-0">
        <div class="header-title">
            <h6 class="card-title mb-0">Урматтуу {{$user->name}}</h6>
        </div>
    </div>
    <div class="card-body">
        <p>
            {{$notification->message}}
        </p>
    </div>
</div>
</body>
</html>
