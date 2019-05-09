<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
        <div class="content">
            @if (count($errors)>0) 
                 {{-- <div class="alert alert-danger">
                    <span>Có lỗi xảy ra :(</span>
                </div>    --}}
                <ul style="margin: 0; padding: 0">
                    @foreach ($errors->all() as $error)
                        <li style="list-style:none" class="alert alert-danger">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
</body>
</html>