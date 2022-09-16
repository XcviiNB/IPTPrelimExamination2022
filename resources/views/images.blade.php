<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="text-center">
        <nav class="nav nav-pills">
            <a href="{{url('/')}}" class="nav-link">Home</a>
            <a href="{{url('/songly')}}" class="nav-link">Song Lyrics</a>
            <a href="{{url('/img')}}" class="nav-link active">Images</a>
        </nav>

        <div class="card shadow-sm mx-auto" style="width: 500px">
            <div class="card-body">
                <div class="card-title">
                    <strong>
                        Pictures
                    </strong>
                </div>
                <p>
                    Images are displayed here.
                </p>

                <img src="https://images7.alphacoders.com/671/671715.jpg" width="450" height="280" alt="Hitman Blood Money">
                <img src="https://images.alphacoders.com/114/1145361.png" width="450" height="280" alt="Honkai Impact 3 - Bronya">
            </div>

        </div>
    </div>
</body>
</html>