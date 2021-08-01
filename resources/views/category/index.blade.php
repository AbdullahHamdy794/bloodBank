@extends('layouts.app')
@section('content')
<br><br>
<a href="{{route('category.create')}}"><button class= "btn btn-success">اضافة فئة </button></a>
<br><br>
<table class="table table-striped table-borderd">
    <thead>
      <tr>


        <th scope="col">اسم الفئه</th>
        <th scope="col">تعديل </th>
        <th scope="col">حذف</th>

      </tr>
    </thead>
    <tbody>
@foreach ($categories as $category )

      <tr>



        <td>{{$category->name}}</td>
        <td>
<a href="{{route("category.edit",$category->id)}}"><button class="btn btn-warning">تعديل</button>
</a>
        </td>
        <td>
           <form method="post" action="{{route("category.destroy",$category->id)}}">
@csrf
@method('DELETE')
{{-- {!! Form::submit('delete') !!} --}}
<button class = "btn btn-danger">حذف</button>


           </form>
        </td>

      </tr>

@endforeach

    </tbody>
  </table>


@endsection
