@include('includes.head')
@include('includes.leftsidebar')
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="vertical-align:middle;">menu</i></a>
<div class="main">
  @include('includes.header')
  @yield('content')
</div>

@yield('scripts')
@include('includes.footer')