<!doctype html>
<html>
<title>Form</title>
<body>
<h1>Fill up the form.</h1>
<form action="{{route('store')}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name">

    <label for="roll">Roll</label>
    <input type="text" name="roll">

    <label for="class">Class</label>
    <input type="text" name="class">

    <button type="submit">Submit</button>

</form>
</body>
</html>
