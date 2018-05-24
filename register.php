<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h3>Business Card Generator</h3>

<div>
  <form action="/action_page.php">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="email">

    <label for="photo">Photo</label>
	<input type="file" id="photo" name="photo">
  
    <input type="submit" value="Card Generate">
  </form>
</div>

</body>
</html>
