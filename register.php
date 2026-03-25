<!DOCTYPE html>
<html>
<head>
<script>
function showOther(val){
    if(val === "Others"){
        document.getElementById("otherBox").style.display="block";
    } else {
        document.getElementById("otherBox").style.display="none";
    }
}
</script>
</head>

<body>

<h1>Register User</h1>

<form action="save_user.php" method="POST">

Purpose:
<select name="purpose" onchange="showOther(this.value)">
    <option>CFEES LAB</option>
    <option>Others</option>
</select>

<input type="text" name="other" id="otherBox" placeholder="Specify" style="display:none">

<br><br>

Salutation:
<select name="salutation">
    <option>Mr</option>
    <option>Ms</option>
</select>

<br><br>

First Name: <input type="text" name="fname" required>
Last Name: <input type="text" name="lname" required>

<br><br>

Cadre:
<input type="radio" name="cadre" value="HR">HR
<input type="radio" name="cadre" value="Inventory">Inventory
<input type="radio" name="cadre" value="Management">Management

<br><br>

Rank:
<select name="rank">
    <option>Scientist B</option>
    <option>Scientist C</option>
    <option>Major</option>
</select>

<br><br>

ESIC PIN: <input type="text" name="pin" required>
Email: <input type="email" name="email" required>

<br><br>

<button type="submit">Save</button>

</form>

</body>
</html>