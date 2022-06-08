
<a href="todo_show">back</a>

  <form method="post" action="todo_submit">
  @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br><br>
  <label for="email">Phone Number:</label><br>
  <input type="text" id="phone_no" name="phone_no"><br><br>
  <input type="submit" value="Submit">
</form> 