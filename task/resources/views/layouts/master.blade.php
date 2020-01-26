<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{ Html::style('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}
    {{ Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}
    {{ Html::style('task.css')}}
    <title>Task List App</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-danger container">
        <span class="navbar-brand mb-0 h1">Task Master</span>
    </nav>

    <div class="container">

        @yield('content')

    </div>

</body>
</html>