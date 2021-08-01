@extends('layouts.FrontheaderandFooter')
@section('content')


<div class="articles">
    <div class="container title">
        <div class="head-text">
            <h2>المقالات</h2>
        </div>
    </div>
    <div class="view">
        <div class="container">
            <div class="row">
                <!-- Set up your HTML -->
                <div class="owl-carousel articles-carousel">

                    @foreach ($postss as $post )
                    <div class="card">
                        <div class="photo">
                            <img src="{{asset("Front/imgs/p2.jpg")}}" class="card-img-top" alt="...">
                            <a href="article-details.html" class="click">المزيد</a>
                        </div>
                        <a href="#" class="favourite">
                            <i class="far fa-heart"></i>
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">{{$post->tittle}}</h5>
                            <p class="card-text">
                               {{$post->content}}
                            </p>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
