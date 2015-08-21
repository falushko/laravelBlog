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

        <table class="table">
            <thead>
            <td>Category</td>
            <td>Operations</td>
            </thead>

            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->category_name }}</td>
                    <td>Delete</td>
                </tr>
            @endforeach

        </table>

    </div>

</div>

</body>
</html>