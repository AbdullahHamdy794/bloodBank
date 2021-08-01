<form  method="post" action ="{{route("posts.update",$post->id)}}">
    @csrf
    @method('PUT')

    <input type="string" name="content" value="{{$post->content}}">
    <input type="string" name="tittle" value="{{$post->tittle}}">
    <input type="text" name="image" value="{{$post->image}}">
    <input type="string" name="category_id" value="{{$post->category_id}}">
    <input type="submit" value="editData">





</form>

