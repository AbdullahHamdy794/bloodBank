

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
          <form  method="post" action ="{{route("setting.update",$setting->id)}}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">TextNotification</label>
                    <input type="text" name="notification_setting_text" value="{{$setting->notification_setting_text}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">About App</label>
                    <input type="text" name="about_app" value="{{$setting->about_app}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text"name="phone" value="{{$setting->phone}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" value="{{$setting->email}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook-link</label>
                    <input type="text" name="fb_link" value="{{$setting->fb_link}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter-link</label>
                    <input type="text" name="tw_link" value="{{$setting->tw_link}}" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Inistigram-link</label>
                    <input type="text" name="insta_link" value="{{$setting->insta_link}}" class="form-control" id="exampleInputEmail1">
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
