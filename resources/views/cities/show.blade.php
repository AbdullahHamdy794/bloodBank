<div class = "containter">
    <h1>Cities</h1>

    <small>
        <h3 ><a href="{{url("getform")}}">CREATE</a></h3>

    </small>
    <table class="table-responsive">
        <table class=" thead-dark table table-border table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">governorate_id</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
          <tr>
            <td>{{$city->id}}</td>
            <td>{{$city->name}}</td>
            <td>{{$city->governorates_id}}</td>
            <td>
                 <a href = "{{url("editCity/{$city->id}")}}">edit</a>
<a href = "{{url("deleteCity/{$city->id}")}}">delete</a>
            </td>

            <td>@mdo</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div>
        <div>
