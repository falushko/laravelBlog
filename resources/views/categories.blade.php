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
    <link href="/assets/twitter_bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/template.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Main</a></li>
                <li><a href="/admin/all-posts">Posts manager</a></li>
                <li><a href="/admin/all-categories">Categories manager</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<div class="content">

    <div class="content_body">

        <table class="table">
            <thead><td>Category</td><td>Operations</td></thead>

            @foreach ($categories as $category)
                <tr><td>{{ $category->category_name }}</td><td>Delete</td></tr>
            @endforeach

        </table>

    </div>

</div>

</body>
</html>