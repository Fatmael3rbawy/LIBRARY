@include('layout.header')<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Books & Media Listing</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index-2.html">Home</a></li>
                <li>Books & Media</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<!-- Start: Book & Media Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="books-media-list">
                <div class="container">
                    <div class="row">
                        <!-- Start: Search Section -->
                        <section class="search-filters">
                            <div class="container">
                                <div class="filter-box">
                                    <h3>What are you looking for at the library?</h3>
                                    <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="keywords">Search by Keyword</label>
                                                <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                                            </div>
                                        </div>
                                       
                                        <div  class="col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <select name="category" id="category" class="form-control">
                                                    <option>All Categories</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="submit" value="Search">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <!-- End: Search Section -->
                    </div>
                    <div></div>
                    <div style="text-align:center"> <a href="{{route('book.create')}}" class="btn btn-warning">Add New Book</a>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="filter-options margin-list">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <select name="orderby">
                                            <option selected="selected">Default sorting</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by rating</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="filter-result">Showing items 1 to 9 of 19 total</div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 pull-right">
                                        <div class="filter-toggle">
                                            <a href="books-media-gird-view-v1.html"><i class="glyphicon glyphicon-th-large"></i></a>
                                            <a href="books-media-list-view.html" class="active"><i class="glyphicon glyphicon-th-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="books-list">
                                @foreach($books as $book)
                                <article>
                                    <div class="single-book-box">
                                        <div class="post-thumbnail">
                                            <div class="book-list-icon yellow-icon"></div>
                                            <a href="books-media-detail-v1.html"><img alt="Book" style='width:10/0%;height:70%' src="{{asset('books_images/'.$book->image)}} " /></a>
                                        </div>
                                        <div class="post-detail">
                                            <div class="books-social-sharing">
                                                <ul>
                                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="optional-links">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <header class="entry-header">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h3 class="entry-title">
                                                            <a href="books-media-detail-v1.html">{{$book->titel}}</a>
                                                        </h3>
                                                        <ul>
                                                            <li><strong>Author:</strong>{{$book->author}} </li>
                                                            <li><strong>Publisher:</strong> {{$book->publisher}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                       <strong>Categories:</strong>
                                                        <ul>
                                                        @foreach($book->Categories as $category)
                                                           <li> {{$category->category_name}}</li>
 
                                                        @endforeach                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>{{$book->description}}</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-dark-gray" href="books-media-detail-v1.html">Read More</a>
                                            </footer>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </article>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@extends('layout.footer')
