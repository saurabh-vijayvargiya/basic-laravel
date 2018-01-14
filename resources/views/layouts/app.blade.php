<html>
<head>
    <title>Ingrid went waste</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
    @include('inc.nav')
    @include('inc.carousal')
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>
</body>
</html>