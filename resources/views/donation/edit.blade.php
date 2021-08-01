





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
          <form method="post"action="{{route("donation.update",$donation->id)}}">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">اسم المريض</label>
                    <input type="text" name="patient_name" value="{{$donation->patient_name}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">تليفون المريض</label>
                    <input type="text" name="patient_phone" value="{{$donation->patient_phone}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">المدينه</label>
                    <input type="text"name="city_id" value="{{$donation->city_id}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">المستشفي</label>
                    <input type="text" name="hospital_name" value="{{$donation->hospital_name}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">التفاصيل</label>
                    <input type="text" name="details" value="{{$donation->details}}"   class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">خطوط الطول</label>
                    <input type="text" name="letitude" value="{{$donation->letitude}}"  class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">دوائر العرض</label>
                    <input type="text" name="longitude" value="{{$donation->longitude}}"  class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">العميل</label>
                    <input type="text" name="client_id" value="{{$donation->client_id}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">عدد الاكياس </label>
                    <input type="text" name="bags_num" value="{{$donation->bags_num}}" class="form-control" id="exampleInputEmail1">
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
