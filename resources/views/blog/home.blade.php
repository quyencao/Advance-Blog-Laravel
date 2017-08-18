@extends('blog.layout.master')

@section('site-heading', 'Clean Blog')

@section('site-subheading', 'Welcome to my blog')

@section('bg-image')
    {{ asset('blog/img/home-bg.jpg') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
