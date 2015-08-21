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

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/javascript.js"></script>



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
            <thead><td>Post name</td><td>Post date</td><td>Operations</td></thead>

            @foreach ($posts as $post)
                <tr><td class="post_name">{{ $post->post_name }}</td><td>@datetime($post->post_date)</td><td><a href="#" class="delete">Delete</a></td></tr>
            @endforeach

        </table>

        {!! $posts->render() !!}
    </div>

</div>

</body>
</html>