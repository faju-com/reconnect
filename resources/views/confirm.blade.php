<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>  Are You Confirm To Delete  </h2>
    <form   action="{{ route('user_deleted')  }}"  >
        @csrf
        <input type="hidden" name="id"  value="{{ $users->id }}" >
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name" value="{{$users->name}}" readonly >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$users->email}}"   readonly>
        </div>

        <div class="form-group">
            <label for="number">Phone Number:</label>
            <input type="number" class="form-control" id="number" placeholder="Enter phone number" name="number" value="{{$users->phonenumber}}" readonly >
        </div>
            <button class="btn btn-primary" type="submit" > Yes </button>

    </form>
</div>
<script>
    function goBack() {

        window.history.back();

    }
</script>
</body>
</html>
