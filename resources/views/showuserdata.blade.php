<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>User Data</h2>

    <a href=" {{  route('showuserfrom') }}"  class="btn btn-primary" >Add User</a>
    <table  class="table table-bordered" >
 <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
     <th>Edit</th>
     <th>Delete</th>
 </tr>
        @foreach($user_data_db as $row)

            <tr>

                <td> {{ $row['name']  }} </td>
                <td> {{ $row['email']  }} </td>
                <td> {{ $row['phonenumber']  }} </td>
                <td> <a href="{{ route('updateable_user_data', ['id' => $row->id]) }}"> edit </a> </td>
                <td> <a href="{{ route('confirm_delete_user', ['id' => $row->id]) }}"> remove</a> </td>
            </tr>
        @endforeach
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

