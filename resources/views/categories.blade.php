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

        <p>&nbsp;&nbsp;<a href="/add-category">Add new category</a></p>
        <table class="table">
            <thead>
            <td>Category</td>
            <td>Operations</td>
            </thead>

            @foreach ($categories as $category)
                <tr>
                    <td><a href="/edit-category/{{ $category->category_name }}">{{ $category->category_name }}</a></td>
                    <td><a href="/delete-category/{{ $category->category_name }}">Delete</a></td>
                </tr>
            @endforeach

        </table>

    </div>

</div>

</body>
</html>