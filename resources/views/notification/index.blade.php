
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
{!! Form::submit('delete') !!}


           </form>
        </td>


{{-- <a href="{{route('theCity.edit',$city->id)}}">Edit</a>

<form  action="{{route("theCity.destroy",$city->id)}}"method="post" >
    @csrf
    @method('DELETE')
  <button type="submit">DELETE</button>

</form> --}}









      </tr>

@endforeach

    </tbody>
  </table>


