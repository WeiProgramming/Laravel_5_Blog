<!DOCTYPE html>
<html lang="en">

@include('partials/_head')

  <body>
@include('partials/_nav')
        @include('partials/_messages')


    <div class="container">

        @yield('content') <!-- yield this area this wil lbe different and not use html but blade yieliding content-->

        @include('partials/_footer')
    </div>
    <!-- end of .container -->

    @include('partials/javascript')

    @yield('scripts') 
  </body>

</html>