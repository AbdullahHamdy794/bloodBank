{{-- <form method="post" action="{{route("category.store")}}">
    @csrf
    <input type ="string" name = "name">
   {!! Form::submit('create') !!}
 --}}


   @extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>


      <!-- left column -->
      <div class="col-md-12">

        <!-- general form elements -->
        <div class="card card-primary col-12">

          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{route("category.store")}}">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                   <input class="form-controller" name = "name"  placeholder="اسم الفئة">
                  </div>





<button type="submit" class= "btn btn-primary">ارسال</button>







            </div>
        </div>
      </div>
    </div>
</div>
@endsection
