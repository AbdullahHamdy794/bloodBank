{{--
<a href="{{route('governorate.create')}}">CRAETE</a>
 <table class="table table-striped table-borderd">
     <thead>
       <tr>

         <th scope="col">id</th>
         <th scope="col">name</th>
         <th scope="col">Controller</th>

       </tr>
     </thead>
     <tbody>
 @foreach ($governorates as $governorate )

       <tr>


         <td>{{$governorate->id}}</td>
         <td>{{$governorate->name}}</td>
         <td>
<a href="{{route("governorate.edit",$governorate->id)}}">EDIT</a>

            <form method="post" action="{{route("governorate.destroy",$governorate->id)}}">
@csrf
@method('DELETE')
b{!! Form::submit('delete') !!}


            </form>
         </td>


 {{-- <a href="{{route('theCity.edit',$city->id)}}">Edit</a>

 <form  action="{{route("theCity.destroy",$city->id)}}"method="post" >
     @csrf
     @method('DELETE')
   <button type="submit">DELETE</button>

 </form> --}}









       {{-- </tr>

 @endforeach

     </tbody>
   </table> --}}


@extends('layouts.hedfoot')
@section('headandfoot')
   <div class="wrapper">





     <br>
     <br>
     <div class="col-md-12 text-center">
        <a href="{{route('governorate.create')}}">
            <button type="button" class="btn btn-primary">انشاء محافظة</button></a>
    </div>
     <br>


     <div class="">
       <div class="row justify-content-center">
         <div class="col-auto">
           <div class="card">

             <div class="card-body table-responsive p-0" style="height: 300px;">
               <table class="table  text-nowrap text-center table-responsive">
                 <thead class = "thead-dark">
                   <tr>
                     <th>رقم المحافظه</th>
                     <th>الاسم</th>

                     <th>تعديل</th>
                     <th>حذف</th>

                   </tr>
                 </thead>
                 <tbody>
@foreach ($governorates as $governorate )

                   <tr>
                     <td>{{$governorate->id}}</td>
                     <td>{{$governorate->name}}</td>
                     <td>
                        <a href="{{route("governorate.edit",$governorate->id)}}"> <button type="button" class="btn btn-success">تعديل</button></a>

                    </td>

                       <td>
                       <form method="post" action="{{route("governorate.destroy",$governorate->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">حذف</button>

                         </form>
                     </td>
                   </tr>
@endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>


     </div>


     <aside class="control-sidebar control-sidebar-dark">
     </aside>
   </div>

@stop
