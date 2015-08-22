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
        <p>&nbsp;&nbsp;<a href="/add-post">Add new post</a></p>
        <table class="table">
            <thead>
            <td>Post name</td>
            <td>Post date</td>
            <td>Operations</td>
            </thead>

            @foreach ($posts as $post)
                <tr>
                    <td class="post_name"><a href="/edit-post/{{ $post->post_name }}">{{ $post->post_name }}</a></td>
                    <td>@datetime($post->post_date)</td>
                    <td><a href="/delete-post/{{ $post->post_name }}" class="delete">Delete</a></td>
                </tr>
            @endforeach

        </table>
        <div class="pagination">
            {!! $posts->render() !!}
        </div>
    </div>

</div>

</body>
</html>