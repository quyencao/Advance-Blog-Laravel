@include('blog.layout.head')

<!-- Navigation -->
@include('blog.layout.nav')

<!-- Page Header -->
@include('blog.layout.header')

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @yield('content')
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
@include('blog.layout.footer')