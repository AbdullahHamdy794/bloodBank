<form method="POST"action="{{url("updateCity/{$city->id}")}}">
    @csrf
<input name='name' value="{{$city->name}}" >
<input name='governorates_id' value="{{$city->governorates_id}}" >
<button type = "submit">Edit</button>

</form>
