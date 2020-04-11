<form action="{{route('posts.update', $post->id)}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="hidden" name="_method" value="PATCH">
Title: <br>
<input type="text" value="{{$post->title}}" name="title"> <br>
<button type="submit">Save</button>
</form>