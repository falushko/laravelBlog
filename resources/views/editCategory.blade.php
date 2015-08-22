<!DOCTYPE html>
<html>
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

        <div class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title">Edit category</h3>
            </div>
            <form role="form" name="form" action="/submit-edited-category/{{ $category->category_name }}" method="post">

                <div class="panel-body">

                    <div class="form-group">
                        <label for="comment">Category Name</label>
                        <input type="text" name="category_name" class="form-control" disabled value="{{ $category->category_name }}">
                    </div>

                    <div class="form-group">
                        <label for="comment">Category Description</label>
                        <textarea name="category_description" class="form-control" rows="5">{{ $category->category_description }}</textarea>
                    </div>

                </div>

                <div class="panel-footer">

                    <button type="submit" class="btn btn-labeled btn-success" id="send">
                        <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>&nbsp;&nbsp;&nbsp;Edit
                    </button>
                </div>
                {!! csrf_field() !!}
            </form>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>


</div>

</body>
</html>
