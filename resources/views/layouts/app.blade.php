@extends('layouts.frame')
@section('insidesection')
    <div class="banner">

    </div>
    <div class="header">
        <div class="container">
            <div class="header-menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand logo">
                                <h1><a href="index.html"><span>Valkyria  </span> Hotel</a></h1>
                            </div>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        @yield("navbar")

                    </div><!-- /.container-fluid -->
                </nav>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---header--->
    <div class="content">
        @yield('content')
    </div>
@endsection