<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <form id="frm">
        @csrf
    <lable> Name </lable>
    <input type="text" name="name" id="name" class="name"><br><br>
    <lable>Email</lable>
    <input type="text" name="email" id="email" class="email"><br><br>
    <lable>Password</lable>
    <input type="text" name="password" id="password" class="password"><br><br>
    <input type="submit" name="submit" id="submit" value="submit">
</form>
</body>
<script>

    $("#submit").click(function(e){
        e.preventDefault();
$.ajax({
    url: "{{route('create')}}", 
    data: $('#frm').serialize(),
    type: "POST",
    headers:{
        "_token": "{{ csrf_token() }}",
    },
    success: function(data){
        console.log(data.success);
    }
});
});




</script>
</html>