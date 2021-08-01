<form method="POST"action="{{url("insertCity")}}">
    @csrf
<input name='name' placeholder="name" >
<input type="integer" name = "governorates_id" placeholder="id_gover">
<button type = "submit">Insert</button>

</form>
