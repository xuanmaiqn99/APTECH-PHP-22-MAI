<h1>EDIT PAGE</h1>
<form action="{{route('users.update',$user->id)}}" method="POST">
  <input type="hidden" name="_token" value={{csrf_token()}}>
  <input type="hidden" name="_method" value="PUT">
  Name: <br>
  <input type="text" value="{{$user->name}}" name="name"><br>
  Email: <br>
  <input type="email" value="{{$user->email}}" name="email" disabled><br>
  <button type="submit">Save</button>
</form>