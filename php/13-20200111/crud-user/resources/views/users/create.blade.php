<form action="http://localhost:8000/users/store" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="name">name: </label>
        <input type="text" name="name" value="">  <br>
    </div>
    <div>
        <label for="email">email: </label>
        <input type="email" name="email" value=""><br><br>
    </div>
    <button type="submit">Submit</button>
</form>
{{-- id dung cho javascript
    name dung cho back-end --}}