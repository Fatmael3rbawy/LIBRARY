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
                    Category {{$category->id}}</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<div>{{$category->category_name}}</div>
<ul>
    @foreach($category->books as $book)
    <li>Book: {{$book->id}}</li>
    <li>Titel: {{$book->titel}}</li>
    <li>Author: {{$book->author}}</li>
    <li>publisher: {{$book->publisher}}</li>
    <hr>

    @endforeach

@extends('layout.footer')
