<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="text-center">
        <nav class="nav nav-pills">
            <a href="{{url('/')}}" class="nav-link active">Home</a>
            <a href="{{url('/songly')}}" class="nav-link">Song Lyrics</a>
            <a href="{{url('/img')}}" class="nav-link">Images</a>
        </nav>

        <h2>Prelim Examination</h2>

        <div class="card shadow-sm mx-auto" style="width: 500px">
            <div class="card-body">
                <div class="card-title">
                    <strong>Welcome Message</strong>
                </div>
                
                <p>
                    This is the homepage of my Laravel application.
                </p>

                </div>
            </div>

        </div>
    </div>
</body>
</html>