
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Document</title>
   
</head>
<body>
    
    <div class="container">
        <div class="navbar">
            <a class="navbar-brand" href="{{ url('RHP') }}">RHP Crud</a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('RHP') }}">Shows</a>
                </li>
                <li>
                    <a href="{{ url('RHP/create') }}">Create</a>
                </li>
                <li>
                    <a href="{{ url('RHP/about/Tran Dinh Dat') }}">About</a>
                </li>
            </ul>
        </div>
        @yield('content')
    </div>
    
</body>
</html>