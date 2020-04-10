<h1>Create a new user</h1>
<form action="{{route('users.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        Name: 
        <input type="name" name="name" value="">
    </div> <br>
    <div>
        Email:
        <input type="email" name="email" value="">
    </div> <br>
    <div>
        Password:
        <input type="password" name="password" value="">
    </div> <br>
    <button type="submit">Submit</button>
</form>