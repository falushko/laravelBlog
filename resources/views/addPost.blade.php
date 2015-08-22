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

            <div class="panel-body">

                <form role="form" name="form">
                    <div class="form-group">
                        <input type="text" name="post_title" class="form-control" placeholder="Title">
                    </div>

                    <div class="form-group">
                        <select name="category" class="form-control">
                            <option value="default" selected disabled>Category</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" type="text" class="form-control" id="datepicker" data-date-format="mm/dd/yyyy">
                    </div>



                    <div class="form-group">
                        <input type="text" name="post_preview" class="form-control" placeholder="Preview">
                    </div>

                    <div class="form-group">
                        <input type="text" name="post_body" class="form-control" placeholder="Body">
                    </div>




                </form>
            </div>

            <div class="panel-footer">

                <button type="button" class="btn btn-labeled btn-success" id="send">
                    <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Add</button>
            </div>

        </div>

    </div>


</div>

</body>
</html>
