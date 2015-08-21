@foreach ($posts as $post)

<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><a href="/post/{{ $post->post_name }}">{{ $post->post_name }}</a></h3>
    </div>

    <div class="panel-body">
        <p>Post category: {{ $post->post_category }}</p>

        <p>Post date: @datetime($post->post_date)</p>

        <p>{{ $post->post_preview }}</p>
    </div>

</div>
@endforeach

<div class="pagination">
    {!! $posts->render() !!}
</div>