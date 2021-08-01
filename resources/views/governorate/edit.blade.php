{{-- <form method ="post" action ="{{route("governorate.update",$governorate->id)}}">

@csrf
@method('put')
<input name ="name" value="{{$governorate->name}}">
<input type="submit" value ="edit">
</form> --}}

@extends('layouts.hedfoot')
@section('headandfoot')
<div class="row">
    <div class="d-flex justify-content-center align-items-center container mt-5 ">
        <div class="row">

          <div class="col-auto">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">من فضلك أدخل الأسم الجديد</h3>
              </div>

              <form method ="post" action ="{{route("governorate.update",$governorate->id)}}">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    {{-- <label for="exampleInputEmail1">أسم المحافظة</label> --}}
                    <input name ="name" value="{{$governorate->name}}">
                  </div>
                 </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>

@stop
