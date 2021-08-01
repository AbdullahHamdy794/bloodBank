@extends('layouts.app')
@section('content')


<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12 margin-tb">



            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>


      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">



<form method="post" action="{{route("category.update",$category->id)}}">
    @csrf
    @method('put')
    <input type ="string" name = "name" value="{{$category->name}}">
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

</form>
        </div>
        </div>
        </div>
        </div>

@endsection
