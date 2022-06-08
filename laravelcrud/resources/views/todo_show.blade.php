<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body> 


<a href="todo_create">Add Data</a>

<br>{{session('msg')}}</br>
<h1>Records Table</h1>

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Action 1</th>
    <th>Action 2</th>
  </tr>

  <?php for ($x = 0; $x <= $count-1; $x++) { ?>
  <tr>

    <td>{{$recordsarray[$x]['name']}}</td>
    <td>{{$recordsarray[$x]['email']}}</td>
    <td>{{$recordsarray[$x]['phone_no']}}</td>
    <td><a href="todo_delete/{{$recordsarray[$x]['id']}}">Delete</a></td>
    <td><a href="todo_edit/{{$recordsarray[$x]['id']}}">Edit</a></td>


  </tr>
   <?php } ?>

</table>

</body>
</html>