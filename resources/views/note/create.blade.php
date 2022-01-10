@extends('layout.header')
<!--start section sin up-->
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Add Note</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index-2.html">Home</a></li>
                <li>Add Note</li>
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
                        <div class="form-header">
                            <h2>Add Note</h2>
                        </div>
                        <form action="{{route('note.store')}}" validate method="POST" >
                            @csrf
                            <div class="name">
                               <div class="input-header">
                                    <label>Add Note</label>
                                </div>
                                <textarea name="content" > </textarea>
                            </div>

                            <div class="submit">
                                <input class="button" type="submit" name="btnsave" value="Add">
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
