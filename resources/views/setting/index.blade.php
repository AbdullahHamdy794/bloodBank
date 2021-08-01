@extends('layouts.app')
@section('content')




 <div class="">
    <!-- Content Header (Page header) -->
    <div class="row">
      <div class="col-12">
        <div class="card">

          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>

                    <th scope="col">notification_setting</th>
                    <th scope="col">about App</th>
                    <th scope="col">phone</th>
                    <th scope="col">email</th>
                    <th scope="col">fb-link</th>
                    <th scope="col">tw-link</th>
                    <th scope="col">insta-link</th>
                    <th>Controller</th>

                  </tr>
              </thead>
              <tbody>

                @foreach ($settings as $setting )

                <tr>


                  <td>{{$setting->notification_setting_text}}</td>
                  <td>{{$setting->about_app}}</td>
                  <td>{{$setting->phone}}</td>
                  <td>{{$setting->email}}</td>
                  <td>{{$setting->fb_link}}</td>
                  <td>{{$setting->tw_link}}</td>
                  <td>{{$setting->insta_link}}</td>
           <td>
            <a href="{{route('setting.edit',$setting->id)}}"><button type="button" class="btn btn-primary">تعديل</button></a>
           </td>




                </tr>

           @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

    <!-- Main content -->

    <!-- /.content -->
  </div>






@stop
