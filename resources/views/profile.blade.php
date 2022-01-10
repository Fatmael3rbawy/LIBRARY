@extends('layout.header')
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>
                Profile</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index-2.html">Home</a></li>
                <li>
                    Profile</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<!--start section profile-->
<section class="profile">
    <div class="overlay"></div>
    <div class="container">


        <div class="row justify-content-md-center">
            <div class="col-sm-9">
                <div class="profile-content">

                    <center>
                        <table class="table table-border table-striped" style="margin:25px;width:75%">
                            {{-- <div>{{$msg}}</div> --}}
                            <div class="prifile-image">
                                <tr><img src="{{asset('users_images/'. Auth::user()->image)}}" class="img-fluid" /></tr>
                                <div class="img-upload-profile">
                                    <i class="fa fa-camera"></i>
                                </div>
                                <h1 class="username">Profile Data</h1>
                                <div class="name">

                                    <tr>
                                        <td>
                                            <h6>Name</h6>
                                        </td>
                                        <td>
                                            <h5> {{Auth::user()->name}} </h5>
                                        </td>
                                    </tr>
                                </div>
                                <div class="email">
                                    <tr>
                                        <td>
                                            <h6>E-mail</h6>
                                        </td>
                                        <td>
                                            <h5> {{Auth::user()->email}} </h5>
                                        </td>
                                    </tr>

                                </div>

                                <div class="name">
                                    <tr>
                                        <td style="text-align:center"> <a href="{{route('user.editprofile',Auth::user()->id)}}" class="btn btn-warning">Update My Profile</a> </td>
                                        <td style="text-align:center"> <a href="{{route('user.deleteprofile',Auth::user()->id)}}" class="btn btn-danger">Delete My Account</a> </td>
                                    </tr>
                                </div>
                        </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End section profile-->


@extends('layout.footer')
