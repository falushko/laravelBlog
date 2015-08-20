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
                <li class="active"><a href="/public">Main</a></li>
                <li><a href="/public/admin/all-posts">Categories</a></li>
                <li><a href="invites.php">Posts manager</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<div class="content">

    <div class="content_body">

        <table class="table">
            <thead><td>Post name</td><td>Post date</td><td>Operations</td></thead>

            @foreach ($posts as $post)
                <tr><td>{{ $post->post_name }}</td><td>@datetime($post->post_date)</td><td></td></tr>
            @endforeach

        </table>

        {!! $posts->render() !!}
    </div>

</div>

</body>
</html>