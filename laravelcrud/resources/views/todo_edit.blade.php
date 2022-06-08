
<a href="todo_show">back</a>

  <form method="post" action="{{route('update',[$recordsarray[0]['id']])}}">
  @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{$recordsarray[0]['name']}}"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"value="{{$recordsarray[0]['email']}}"><br><br>
  <label for="email">Phone Number:</label><br>
  <input type="text" id="phone_no" name="phone_no"value="{{$recordsarray[0]['phone_no']}}"><br><br>
  <input type="submit" value="Submit">
</form> 