<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <body id="page-top">

        @include('partials.navbar')

        @yield('content')
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                  
                </div>
            </div>
        </div> -->

        @include('partials.footer')
    </body>
</html>



@include('includes.scroll')