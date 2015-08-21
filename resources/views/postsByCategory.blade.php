@extends('main')

@section('content')
        <div class="panel panel-info">

            <div class="panel-heading">
                <h3 class="panel-title">Category: {{ $category->category_name }}</h3>
            </div>

            <div class="panel-body">

                <p>{{ $category->category_description }}</p>
            </div>

        </div>
@endsection