









<form method="post" action="{{route('posts.store')}}">
    @csrf
    <input type = "text" name = "image" placeholder="image" >
    <input type ="string" name="content" placeholder="content">
    <input type ="text" name="tittle" placeholder="tittle">
    <input type ="integer" name="category_id" placeholder="category">
    <input type="submit" value="SEND">
    <form>

