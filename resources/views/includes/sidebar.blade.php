<div class="panel panel-primary" id="categories">

    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>

    <div class="list-group">

        @foreach ($categories as $category)
            <a href="/category/{{ $category->category_name }}"
               class="list-group-item">{{ $category->category_name }}</a>
        @endforeach

    </div>

</div>