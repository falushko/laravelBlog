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
                <h3 class="panel-title">Add post</h3>
            </div>

            <form role="form" name="form" action="/submit-edited-post/{{ $post->post_name }}" method="post">
                <div class="panel-body">


                    <div class="form-group">
                        <label for="comment">Post name</label>
                        <input type="text" name="post_name" class="form-control" disabled value="{{ $post->post_name }}">
                    </div>

                    <div class="form-group">
                        <label for="comment">Post category</label>
                        <select name="post_category" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="comment">Post date</label>
                        <input type="text" id="datepicker" name="post_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="comment">Post preview</label>
                        <textarea name="post_preview" class="form-control" rows="4">{{ $post->post_preview }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="comment">Post Description</label>
                        <textarea name="post_body" class="form-control" rows="7">{{ $post->post_body }}</textarea>
                    </div>

                </div>

                <div class="panel-footer">
                    <button type="submit" class="btn btn-labeled btn-success" id="send">
                        <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Add
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
