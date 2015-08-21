<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

    @include('includes.stylesheets')

</head>

<body>

@include('includes.navigation')


<div class="content">

    <div class="content_body">

        @yield('content')

        @include('postsList')

    </div>

    @include('includes.sidebar')

</div>

</body>
</html>

