@extends('layouts.app')
@section('content')
<a href="{{route('donation.create')}}"><button class="btn btn-success">انشاء طلب</button></a>
<table class="table table-striped table-borderd nowrap">
    <thead>
      <tr>


        <th scope="col">اسم المريض</th>
        <th scope="col">تليفون المريض</th>
        <th scope="col">المدينه</th>
        <th scope="col">اسم المستشفي</th>
        <th scope="col">التفاصيل</th>
        <th scope="col">خط العرض</th>
        <th scope="col">خط الطول</th>
        <th scope="col">العميل</th>
        <th scope="col">عدد الاكياس</th>
        <th scope="col"> تعديل</th>
        <th scope="col"> حذف</th>

      </tr>
    </thead>
    <tbody>
@foreach ($donations as $donation )

      <tr>


        <td>{{$donation->patient_name}}</td>
        <td>{{$donation->patient_phone}}</td>
        <td>{{$donation->city_id}}</td>
        <td>{{$donation->hospital_name}}</td>
        <td>{{$donation->details}}</td>
        <td>{{$donation->letitude}}</td>
        <td>{{$donation->longitude}}</td>
        <td>{{$donation->client_id}}</td>
        <td>{{$donation->bags_num}}</td>
        <td>
<a href="{{route("donation.edit",$donation->id)}}"><button class="btn btn-warning">تعديل</button></a>
        </td>
        <td>
<form method="post" action="{{route("donation.destroy",$donation->id)}}">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">حذف</button>


           </form>


        </td>









      </tr>

@endforeach

    </tbody>
  </table>


@endsection
