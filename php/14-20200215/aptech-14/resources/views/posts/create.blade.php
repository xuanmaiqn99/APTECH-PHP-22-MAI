<h1>Create a new title</h1>
<form action="{{route('posts.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        Title: 
        <input type="name" name="title" value="">
    </div>
    <div>
        Description:
        <input type="text" name="des" value="">
    </div>
    <button type="submit">Submit</button>
</form>