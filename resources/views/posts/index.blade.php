

<a href =" {{route('posts.create')}}">Create</a>

 <table class="table table-striped table-borderd">
    <thead>
      <tr>

        <th scope="col">tittle</th>
        <th scope="col">image</th>
        <th scope="col">content</th>
        <th>category</th>
        <th>Controller</th>

      </tr>
    </thead>
    <tbody>
@foreach ($posts as $post )

      <tr>


        <td>{{$post->tittle}}</td>
        <td>{{$post->image}}</td>
        <td>{{$post->content}}</td>
        <td>{{$post->category_id}}</td>
<td>
<a href="{{route('posts.edit',$post->id)}}">edit</a>





<form method="post"action ="{{route("posts.destroy",$post->id)}}" >
    @csrf
    @method('DELETE')
    <button type="submit">DELETE</button>

    <form>


</td>




      </tr>

@endforeach

    </tbody>
  </table>


