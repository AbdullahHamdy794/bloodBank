{{-- <form method="put" action="{{url("theCity/update")}}"> --}}

    @extends('layouts.app')
    @section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit New User</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
            </div>


          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form method="post" action="{{route("theCity.update",$city->id)}}">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                       <input class="form-controller" name = "name" value="{{$city->name}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Governorate</label>
                        <input name = "governorates_id" value="{{$city->governorates_id}}">
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

























    {{-- <form method="post" action="{{route("theCity.update",$city->id)}}">
    @csrf
    @method('put')
    <input name = "name" value="{{$city->name}}">
    <input name = "governorates_id" value="{{$city->governorates_id}}">
        <input type="submit">

    </form> --}}
