<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us</title>


</head>
<body>
<h1> Form </h1>

<form action="{{ route('form') }}" method ="post">
    @csrf
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <label for="email">Email Id </label><br>
    <input type="email" id="email" name="email"><br>
    <label for="feedback">Feedback </label><br>
    <textarea name ="feedback" placeholder=" type here "></textarea><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
