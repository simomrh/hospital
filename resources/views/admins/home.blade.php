
    <!DOCTYPE html>
<html lang="en">
  <head>
    @include('admins.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">

      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admins.sidebar')
      <!-- partial -->
        @include('admins.navbar')
        <!-- partial -->
        @include('admins.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admins.js')
    <!-- End custom js for this page -->
  </body>
</html>

