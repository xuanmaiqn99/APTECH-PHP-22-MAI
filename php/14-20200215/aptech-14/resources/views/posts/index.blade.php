@foreach($posts as $post)
{{$post->id}} - {{$post->title}}
<form action="{{route('posts.show',$post->id)}}" method="GET">
    <button type="submit">Show</button>
</form>
<form action="{{route('posts.edit',$post->id)}}" method="GET">
    <button type="submit">Edit</button>
</form>
<form action="{{route('posts.destroy',$post->id)}}" method="POST">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Delete</button>
</form>
@endforeach
<hr>
<form action="{{route('posts.create')}}" method="GET">
    <button type="submit">Create a new title</button>
</form>