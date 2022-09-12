<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('layouts.header')
  </head>
  <body class="nav-md" style="background: transparent;">
    <div class="container body">
      <div class="main_container" style="background: #2A3F54;">
        @include('layouts.sidebar')

        @include('layouts.navbar')

        @yield('content')

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN SANTRI
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    @include('layouts.footer')
	
  </body>
</html>
