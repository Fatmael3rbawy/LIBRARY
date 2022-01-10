@extends('layout.header')

<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>
                Categories</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index-2.html">Home</a></li>
                <li>
                    Categories</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->
<br><br>
@foreach($all_categories as $category)
<li><a href="{{route('category.show',$category->id)}}">{{$category->category_name}}</a></li>
@endforeach
<br><br>

@extends('layout.footer')