
<form action="http://localhost:8000/users/{{$user->id}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="PATCH">  
    <div>
        <label for="name">name: </label>
    <input type="text" name="name" value="{{$user->name}}">
    </div>
    <div>
        <label for="email">email: </label>
    <input type="email" name="email" value="{{$user->email}}" disabled>
    </div>
    <button type="submit"> Edit </button>
</form>