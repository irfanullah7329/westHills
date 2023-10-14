<!DOCTYPE html>
<html lang="en">
    @include('admin.partials.head')
<body>
    
        <div class="container-scroller">
        <div id="app">
            @include('admin.partials.navbar')
                <div class="container-fluid page-body-wrapper">
                @include('admin.partials.sidebar')
                    <div class="main-panel">
                        @yield('content')
                        @include('admin.partials.footer')
                    </div> <!-- main-panel ends -->
                </div><!-- page-body-wrapper ends -->
        </div>
     </div><!-- container-scroller -->
     @include('admin.partials.scripts')
 </body>

</html>

