@extends('layout.header')
<!--start section sin up-->
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Edit Profile</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index-2.html">Home</a></li>
                <li>Edit Profile</li>
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
                            <h2>Update Profile</h2>
                        </div>
                        <form action="{{route('user.updateprofile',Auth::user()->id)}}" validate method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="name">
                                <div class="input-header">
                                    <i class="fa fa-user"></i>
                                    <label>Name</label>
                                </div>
                                <input type="text" name="name" value="{{Auth::user()->name}}">
                            </div>

                            <div class="email">
                                <div class="input-header">
                                    <i class="fa fa-envelope"></i>
                                    <label>E-mail</label>
                                </div>
                                <input type="email" name="email" value="{{Auth::user()->email}}">
                            </div>
                            <input type='file' name='img' class="form-control-file">

                            <div class="submit">
                                <input class="button" type="submit" name="btnsave" value="Update">
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
