<!doctype html>
<html lang="en" dir="rtl">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">

        <!--google fonts css-->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

        <!--font awesome css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="icon" href="{{asset("Front/imgs/Icon.png")}}">

        <!--owl-carousel css-->
        <link rel="stylesheet" href="{{asset("Front/css/owl.carousel.min.css")}}">
        <link rel="stylesheet" href="{{asset("Front/css/owl.theme.default.min.css")}}">

        <!--style css-->
        <link rel="stylesheet" href="{{asset("Front/css/style.css")}}">

        <title>Blood Bank</title>
    </head>
    <body class="create">
        <!--upper-bar-->
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="language">
                            <a href="create-account.html" class="ar active">عربى</a>
                            <a href="create-account-ltr.html" class="en inactive">EN</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="social">
                            <div class="icons">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="accounts" dir="ltr">
                            <a href="signin-account.html" class="signin">الدخول</a>
                            <a href="create-account.html" class="create-new">إنشاء حساب جديد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--nav-->
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset("Front/imgs/logo.png")}}" class="d-inline-block align-top" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">عن بنك الدم</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">المقالات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="donation-requests.html">طلبات التبرع</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="who-are-us.html">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">اتصل بنا</a>
                            </li>
                        </ul>
                        <a href="#" class="donate">
                            <img src="{{asset("Front/imgs/transfusion.svg")}}">
                            <p>طلب تبرع</p>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <!--form-->
        <div class="form">
            <div class="container">
                <div class="path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">انشاء حساب جديد</li>
                        </ol>
                    </nav>
                </div>
                <div class="account-form">
                    <form method="post" action={{url("createNewClient")}}>
                        @csrf
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="التليفون">
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الإسم">
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الإلكترونى">
                        <input placeholder="تاريخ الميلاد" name="d_o_b" class="form-control" type="text" onfocus="(this.type='date')" id="date">



                        <select class="form-control" id="exampleInputblood" name="blood_type_id" placeholder="فصيلة الدم">
                            @foreach ($bloodTypes as $blood_type )


                            <option  value="{{$blood_type->id}}">{{$blood_type->name}}</option>




                            @endforeach
                        </select>



                        <input placeholder="آخر تاريخ تبرع" name="last_donation_date" class="form-control" type="text" onfocus="(this.type='date')" id="date">

                        <select class="form-control"name ="" id="governorates" name="governorate">
                            @foreach ($governorate as $govern )


                            <option selected disabled hidden value="">المحافظة</option>
                            <option value="{{$govern->id}}" id="">{{$govern->name}}</option>



                            @endforeach
                        </select>

                        <select class="form-control" id="cities" name="city_id">
                            <option  selected disabled hidden value="city_id"name ="city_id" value="">المدينة</option>
                        </select>




                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور">

                        <input type="password"name="possword-confirm" class="form-control" id="exampleInputPassword1" placeholder="تأكيد كلمة المرور">

                        <div class="create-btn">
                            <input type="submit" value="إنشاء">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!--footer-->
        <div class="footer">
            <div class="inside-footer">
                <div class="container">
                    <div class="row">
                        <div class="details col-md-4">
                            <img src="{{asset("Front/imgs/logo.png")}}">
                            <h4>بنك الدم</h4>
                            <p>
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها.
                            </p>
                        </div>
                        <div class="pages col-md-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action" id="list-home-list" href="index.html" role="tab" aria-controls="home">الرئيسية</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" href="#" role="tab" aria-controls="profile">عن بنك الدم</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" href="#" role="tab" aria-controls="messages">المقالات</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" href="donation-requests.html" role="tab" aria-controls="settings">طلبات التبرع</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" href="who-are-us.html" role="tab" aria-controls="settings">من نحن</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" href="contact-us.html" role="tab" aria-controls="settings">اتصل بنا</a>
                            </div>
                        </div>
                        <div class="stores col-md-4">
                            <div class="availabe">
                                <p>متوفر على</p>
                                <a href="#">
                                    <img src="{{asset("Front/imgs/google1.png")}}">
                                </a>
                                <a href="#">
                                    <img src="{{asset("Front/imgs/ios1.png")}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other">
                <div class="container">
                    <div class="row">
                        <div class="social col-md-4">
                            <div class="icons">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="rights col-md-8">
                            <p>جميع الحقوق محفوظة لـ <span>بنك الدم</span> &copy; 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset("Front/js/jquery-3.5.1.min.js")}}"></script>

        <script src="{{asset("Front/js/bootstrap.bundle.js")}}"></script>
        <script src="{{asset("Front/js/bootstrap.bundle.min.js")}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>

        <script src="{{asset("Front/js/owl.carousel.min.js")}}"></script>

        <script src="{{asset("Front/js/main.js")}}"></script>


        <script>



$("#governorates").change(function() {
    var governorateId = $("#governorates").val();
    console.log("selected gov:" + governorateId);
    $("#cities").empty();
    var option = '<option value=""> المدينة </option>';
    $("#cities").append(option);
    $.ajax({
    url: '{{url("/")}}/api/v1/cities?governorates_id=' + governorateId,
        type: 'get',
        data: {},
        success: function(result) {
            console.log("success");



            $.each(result.data, function(index, city) {
                console.log(city);
                var option = '<option value="' + city.id + '">' + city.name + '</option>';
                $("#cities").append(option);
            });
        },

        error: function() {
            console.log("error");
        }
    });
});


        </script>








    </body>
</html>
