<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th>{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
          <div style="display: flex;">
            <form action="{{route('users.show',$user->id)}}" method="GET">
              <button type="submit">Show</button>
            </form>
            <form action="{{route('users.edit',$user->id)}}" method="GET">
              <button type="submit">Edit</button>
            </form>
            <form action="{{route('users.destroy',$user->id)}}" method="POST">
              <input type="hidden" name="_token" value={{csrf_token()}}>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit">Delete</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<hr>
<form action="{{route('users.create')}}">
<button type="submit">Create a new user</button>
</form>