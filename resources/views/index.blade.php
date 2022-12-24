<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

<h2 class="p-3 mb-2 bg-success text-white text-center">アニメフィギュアランキング</h2>

<div class="container">
    @foreach($posts as $post)
    <div class="card w-75">
            <h4 class="card-header">
                {{$post["Item"]["rank"]}}位
            </h4>
        <div class="row row-cols-1 row-cols-md-6 g-4">
            <div class="col">
                <img src="{{$post["Item"]["mediumImageUrls"]["0"]["imageUrl"]}}" class="card-img-top" alt="">
            </div> 
            <div class="col-md-8">
                <div class="card-body">
                    <p  class="card-title">{{$post["Item"]["itemName"]}}</p>
                    <h4 class="text-danger">{{$post["Item"]["itemPrice"]}}円</h4>
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="{{$post["Item"]["affiliateUrl"]}}" class="btn btn-danger">楽天市場</a>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    @endforeach
</div>

</body>

</html>