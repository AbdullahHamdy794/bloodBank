@extends('layouts.FrontheaderandFooter')
@section('content')

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





@endsection
