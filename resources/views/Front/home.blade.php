


@extends('Front.master')
@section('content')
        <!--intro-->
        <div class="intro">
            <div id="slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item carousel-1 active">
                        <div class="container info">
                            <div class="col-lg-5">
                                <h3>{{$settings->about_app}}</h3>
                                <p>
                                    {{$settings->intro}}
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-2">
                        <div class="container info">
                            <div class="col-lg-5">
                                <h3>{{$settings->about_app}}</h3>
                                <p>
                                    {{$settings->intro}}
                                </p>
                                <a href="#">المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-3">
                        <div class="container info">
                            <div class="col-lg-5">
                                <h3>{{$settings->about_app}}</h3>
                                <p>
                                    {{$settings->intro}}
                                </p>
                                <a href="#">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--about-->
        <div class="about">
            <div class="container">
                <div class="col-lg-6 text-center">
                    <p>
                        <span>بنك الدم</span> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ.
                    </p>
                </div>
            </div>
        </div>

        <!--articles-->
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
                        {{-- <div class="owl-carousel articles-carousel">

                            @foreach ($postss as $post )
                            <div class="card">
                                <div class="photo">
                                    <img src="{{asset("Front/imgs/p2.jpg")}}" class="card-img-top" alt="...">
                                    <a href="article-details.html" class="click">المزيد</a>
                                </div>
                                <a href="javascript:void()" class="favourite">
                                    <i id = "{{$post->id}}"onclick="toogleFavourite(this)" class="far fa-heart
                                        {{$post->is_favourite ?'second-heart':'first-heart'}}



                                        "></i>
                                </a>

                                <div class="card-body">
                                    <h5 class="card-title">{{$post->tittle}}</h5>
                                    <p class="card-text">
                                       {{$post->content}}
                                    </p>
                                </div>
                            </div>

                            @endforeach
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <!--requests-->
        <div class="requests">
            <div class="container">
                <div class="head-text">
                    <h2>طلبات التبرع</h2>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <form class="row filter">
                        <div class="col-md-5 blood">
                            <div class="form-group">
                                <div class="inside-select">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected disabled>اختر فصيلة الدم</option>
                                        @foreach ($bloodTypes as $bloodType )
                                        <option>{{$bloodType->name}}</option>


                                        @endforeach

                                    </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 city">
                            <div class="form-group">
                                <div class="inside-select">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected disabled>اختر المدينة</option>
                                        @foreach ($cities as $city )

                                        <option>{{$city->name}}</option>
                                        @endforeach

                                    </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    {{-- @foreach ($bloodTypes as $bloodType ) --}}

                    @foreach ($donations as $donation )

                    <div class="patients">


                        <div class="details">

                            <div class="blood-type">
                                <h2 dir="ltr">B+</h2>
                                {{-- <h2 dir="ltr">{{$bloodTypes->first()->name}}</h2> --}}

                            </div>

                            <ul>
                                <li><span>اسم الحالة:</span> {{$donation->patient_name}}</li>
                                <li><span>مستشفى:</span> {{$donation->hospital_name}}</li>
                                <li><span>المدينة:</span> {{$donation->City->name}}</li>
                            </ul>
                            <a href="inside-request.html">التفاصيل</a>
                        </div>
                    </div>
                    {{-- @endforeach --}}

                    @endforeach
                    <div class="more">
                        <a href="donation-requests.html">المزيد</a>
                    </div>
                </div>
            </div>
        </div>

        <!--contact-->
        <div class="contact">
            <div class="container">
                <div class="col-md-7">
                    <div class="title">
                        <h3>اتصل بنا</h3>
                    </div>
                    <p class="text">يمكنك الإتصال بنا للإستفسار عن معلومة وسيتم الرد عليكم</p>
                    <div class="row whatsapp">
                        <a href="#">
                            <img src="{{asset("Front/imgs/whats.png")}}">
                            <p dir="ltr">{{$settings->phone}}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--app-->
        <div class="app">
            <div class="container">
                <div class="row">
                    <div class="info col-md-6">
                        <h3>تطبيق بنك الدم</h3>
                        <p>
                           {{$settings->intro}}
                        </p>
                        <div class="download">
                            <h4>متوفر على</h4>
                            <div class="row stores">
                                <div class="col-sm-6">
                                    <a href="#">
                                        <a href="{{$settings->googleStore}}"><img src="{{asset("Front/imgs/google.png")}}"></a>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#">
                                       <a href="{{$settings->googleIos}}"> <img src="{{asset("Front/imgs/ios.png")}}"></a>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="screens col-md-6">
                        <img src="{{asset("Front/imgs/App.png")}}">
                    </div>
                </div>
            </div>
        </div>

@push('scripts')

<script>


 function toogleFavourite(heart){
        var postId = heart.id;
        $.ajax({
            url:'{{url('toogle-Favourite')}}',
            type:'post',
            data:{_token:"{{csrf_token()}}",post_id:postId},
            success:function(data){
                if(data.status ==1)
 {

    var currentClass = $(heart).attr('class')
if(currentClass.includes('first-heart')){
$(heart).removeClass('first-heart').addClass('second-heart');
}else{
$(heart).removeClass('second-heart').addClass('first-heart')

}

 }
            }


        });


    }

</script>

@endpush
@endsection
