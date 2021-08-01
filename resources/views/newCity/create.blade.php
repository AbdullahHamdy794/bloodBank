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
          <form method="POST" action="{{route("theCity.store")}}">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                   <input class="form-controller" name = "name"  placeholder="اسم المحافظه">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Governorate</label>
                    <input name = "governorates_id">
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












{{-- <form method="POST" action="{{route("theCity.store")}}">
@csrf
<input name = "name">
<input name = "governorates_id">
    <input type="submit">

</form> --}}
@stop
