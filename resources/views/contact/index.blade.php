@extends('layouts.app')
@section('content')
<table class="table table-striped table-borderd">
    <thead>
      <tr>


        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">subject</th>
        <th scope="col">message</th>

      </tr>
    </thead>
    <tbody>
@foreach ($contacts as $contact )

      <tr>

<td>{{$contact->name}}</td>
<td>{{$contact->email}}</td>
<td>{{$contact->phone}}</td>
<td>{{$contact->subject}}</td>
<td>{{$contact->message}}</td>
<td>
<form method="post"action="{{route("contacts.destroy",$contact->id)}}">
@csrf
@method('DELETE')
{!! Form::submit('delete') !!}
</form>
</td>
      </tr>

@endforeach

    </tbody>
  </table>


@endsection
