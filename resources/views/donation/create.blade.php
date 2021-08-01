{{-- <form method="post"action="{{route("donation.store")}}">
    @csrf

    <input name ="patient_name" >
    <input name ="patient_phone" >
    <input name ="city_id" >
    <input name ="hospital_name" >
    <input name ="details" >
    <input name ="letitude" >
    <input name ="longitude" >
    <input name ="client_id" >
    <input name ="bags_num" >
    <input type="submit" value="Create">
</form>


 --}}





@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post"action="{{route("donation.store")}}">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">اسم المريض</label>
                    <input type="text" name="patient_name" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">تليفون المريض</label>
                    <input type="text" name="patient_phone"  class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">المدينه</label>
                    <input type="text"name="city_id"  class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">المستشفي</label>
                    <input type="text" name="hospital_name"class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">التفاصيل</label>
                    <input type="text" name="details"  class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">خطوط الطول</label>
                    <input type="text" name="letitude"  class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">دوائر العرض</label>
                    <input type="text" name="longitude"  class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">العميل</label>
                    <input type="text" name="client_id"  class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">عدد الاكياس </label>
                    <input type="text" name="bags_num"  class="form-control" id="exampleInputEmail1">
                  </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        </div>
    </div>
</div>


@stop
