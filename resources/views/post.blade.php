<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/resources/assets/twitter_bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/resources/assets/template.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Main</a></li>
                <li><a href="users.php">Categories</a></li>
                <li><a href="invites.php">Posts manager</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<div class="content">

    <div class="content_body">


            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">{{ $post->post_name }}</h3>
                </div>

                <div class="panel-body">
                    <p>Post category: {{ $post->post_category }}</p>

                    <p>Post date: @datetime($post->post_date)</p>

                    <p>{{ $post->post_body }}</p>
                </div>

            </div>

    </div>
    <div class="panel panel-primary" id="categories">

        <div class="panel-heading">
            <h3 class="panel-title">Categories</h3>
        </div>

        <div class="list-group">

            @foreach ($categories as $category)
                <a href="http://localhost/public/category/{{ $category->category_name }}" class="list-group-item">{{ $category->category_name }}</a>
            @endforeach

        </div>

    </div>

</div>

</body>
</html>