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

                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">roll</th>

                  </tr>
                </thead>
                <tbody>
            @foreach ($users as $user )

                  <tr>


                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>


            {{-- <a href="{{route("category.edit",$category->id)}}">EDIT</a> --}}
            {{--
                       <form method="post" action="{{route("category.destroy",$category->id)}}">
            @csrf
            @method('DELETE')
            b{!! Form::submit('delete') !!}


                       </form> --}}
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







































{{-- <a href="{{route('category.create')}}">CRAETE</a> --}}
<table class="table table-striped table-borderd">
    <thead>
      <tr>

        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">roll</th>

      </tr>
    </thead>
    <tbody>
@foreach ($users as $user )

      <tr>


        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>


{{-- <a href="{{route("category.edit",$category->id)}}">EDIT</a> --}}
{{--
           <form method="post" action="{{route("category.destroy",$category->id)}}">
@csrf
@method('DELETE')
b{!! Form::submit('delete') !!}


           </form> --}}
        </td>

      </tr>

@endforeach

    </tbody>
  </table>


