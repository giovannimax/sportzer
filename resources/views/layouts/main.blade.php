@include('includes.head')
@include('includes.leftsidebar')

<div class="main">
  @include('includes.header')
  @yield('content')
</div>


  @include('includes.footer')