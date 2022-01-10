@include('layout.header')

<!--start section sin up-->
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Create New Book</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index-2.html">Home</a></li>
                <li>Create New Book</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->



<section class="">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="signup-content">
                <!--start form-->
                <div class="col-sm-12">
                    <div class="form-content">

                        <form action="{{route('book.store')}}" validate method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="name">
                                <div class="input-header">

                                    <label>Titel</label>
                                </div>
                                <input type="text" name="titel" value='{{old('titel')}}'>
                                @error('titel')
                                <span style='color:red'>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="author">
                                <div class="input-header">
                                    <label>Author</label>
                                </div>
                                <input type="text" name="author" value='{{old('author')}}'>
                                @error('author')
                                <span style='color:red'>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="publisher">
                                <div class="input-header">
                                    <label>Publisher</label>
                                </div>
                                <input type="text" name="pub" value='{{old('pub')}}'>
                                @error('pub')
                                <span style='color:red'>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="desc">
                                <div class="input-header">
                                    <label>Description</label>
                                </div>
                                <textarea name="desc" rows='3'>{{old('desc')}} </textarea>
                            </div>
                            <input type='file' name='img'><br>
                            @error('img')
                            <span style='color:red'>{{ $message }}</span>
                            @enderror
                            Select Categories:
                            @foreach($categories as $category )
                            <div class='form-check'>
                                <input type="checkbox" id="category" name="category_ids[]" value="{{$category->id}}">
                                <label for="category">{{$category->category_name}} </label><br>
                            </div>
                            @endforeach
                            <br>
                            <div class="submit">
                                <input class="button" type="submit" name="btnsave" value="Save" style="text-align:center">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End section sin up-->
@extends('layout.footer')
