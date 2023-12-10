<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Blog')</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/font-awesome.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div id="header">
    <div class="container">
        <div class="row">
            <div class=" col-md-offset-4 col-md-4">
                <a href="{{ url('/') }}" id="logo"><img src="images/blog_logo.jfif"></a>
            </div>
        </div>
    </div>
</div>
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class='menu'>
                    <li><a href='category.php'>Business</a></li>
                    <li><a href='category.php'>Entertainment</a></li>
                    <li><a href='category.php'>Sports</a></li>
                    <li><a href='category.php'>Politics</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    @yield('content')



<!--   Footer   -->
<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>© Copyright 2023 BLOG | Powered by <a href="https://github.com/dashboard">IESA</a></span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
