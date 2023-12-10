<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" href="../css/style.css">
       
        <title>@yield('admin-title') </title>

    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="post.php"><img class="logo" src="images/blog_logo.jfif"></a>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                      @if (session()->has('user') )

                    <div class="col-md-offset-9  col-md-1">
                        <a href="{{url('logout') }}" class="admin-logout" > {{  session('name') }} <br> logout</a>
                    </div>
                    <!-- /LOGO-Out -->
                    @else 
                    <div class="col-md-offset-9  col-md-1">
                     <a href="{{url('login') }}" class="admin-logout" > Login</a>
                 </div>
                    @endif


                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                            <li>
                                <a href="post.php">Post</a>
                            </li>
                            <li>
                                <a href="category.php">Category</a>
                            </li>
                            <li>
                                <a href="users.php">Users</a>
                            </li>
                            <li>
                           <a href="#">  </a> 
                        </li>
                     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->

@yield('admin-content')


<!-- Footer -->
<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>© Copyright 2023 Blog | Powered by <a href="">IESA</a></span>
            </div>
        </div>
    </div>
</div>
<!-- /Footer -->
</body>
</html>
