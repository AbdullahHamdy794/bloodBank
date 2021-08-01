@extends('layouts.app')
@section('content')
<a href="{{url(route('theCity.create'))}}" >

    <button class="btn btn-success">ادخال مدينه</button>
</a>

<table class="table table-striped table-borderd">
    <thead>
      <tr>

        <th scope="col">اسم المدينة</th>
        <th scope="col">المحافظة</th>
        <th scope="col">تعديل</th>
        <th scope="col">حذف</th>

      </tr>
    </thead>
    <tbody>
@foreach ($citys as $city )

      <tr>

        <td>{{$city->name}}</td>
        <td>{{$city->governorates_id}}</td>
        <td>

<a href="{{route('theCity.edit',$city->id)}}"><button class="btn btn-primary">تعديل</button></a>
        </td>
        <td>

<form  action="{{route("theCity.destroy",$city->id)}}"method="post" >
    @csrf
    @method('DELETE')
  <a ><button type="submit"class= "btn btn-danger">حذف</button></a>

</form>






{{--
{!! Form::open(['method' => 'DELETE',
'route' => ['theCity.destroy', $city->id]]) !!}
{!! Form::submit('Delete') !!}
{!! Form::close() !!} --}}
 {{-- <a href="{{route('theCity.destroy',$city->id)}}">delete</a> --}}



        </td>
      </tr>
      <tr>
@endforeach

    </tbody>
  </table>
@endsection
