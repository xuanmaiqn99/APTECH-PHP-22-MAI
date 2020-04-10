@foreach($users as $user)
{{$user->name}} <br>
@endforeach

@foreach($users as $user)
<h5> <a href="http://localhost:8000/users/{{$user->id}}">{{$user->name}}</a>
<a href="http://localhost:8000/users/{{$user->id}}/edit">  Edit </a></h5>
@endforeach