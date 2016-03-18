<!DOCTYPE html>
<html lang="it">

    @include('layout.head')
    
    <body>

        <!-- Page preloader (display loading animation while page loads) -->
        <div id="preloader"><div class="pulse"></div></div>

        <!-- Begin page borders -->
        <div class="border-top"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
        <div class="border-right"></div>
        <!-- End page borders -->

        @yield('header')

        <!-- Begin menu  (more info: http://codyhouse.co/gem/secondary-expandable-navigation/) -->
        @include('layout.menu')

        <div id="body-content">
        
            @yield('content')

            <!-- Scroll to top button -->
            <a href="#" class="scrolltotop hidden-xs"><i class="fa fa-arrow-up"></i></a>

            @include('layout.footer')
        
        </div> <!-- /.body-content -->
          
        @include('layout.foot')
        
    </body>
    
</html>