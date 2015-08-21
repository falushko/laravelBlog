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

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">{{ $post->post_name }}</h3>
                </div>

                <div class="panel-body">
                    <p>Post category: {{ $post->post_category }}</p>

                    <p>Post date: @datetime($post->post_date)</p>

                    <p>{{ $post->post_body }}</p>
                </div>

            </div>


        </div>

        @include('includes.sidebar')

    </div>

    </body>
    </html>
