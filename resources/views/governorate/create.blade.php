{{-- <form method="post" action="{{route("governorate.store")}}">
    @csrf
<input type ="text" name = "name">
<input type="submit" value="create">

</form> --}}

@extends('layouts.hedfoot')
@section('headandfoot')
<div class="row">
    <div class="d-flex justify-content-center align-items-center container mt-5 ">
        <div class="row">

          <div class="col-auto">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">من فضلك أدخل أسم المحافظه</h3>
              </div>

              <form method="post" action="{{route("governorate.store")}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    {{-- <label for="exampleInputEmail1">أسم المحافظة</label> --}}
                    <input type="text" name = "name" class="form-control" id="exampleInputEmail1" placeholder="أسم المحافظة">
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
