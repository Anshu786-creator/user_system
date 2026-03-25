<!DOCTYPE html>
<html>
<head>
    <script>
    function checkBox() {
        document.getElementById("btn").disabled = !document.getElementById("chk").checked;
    }
    </script>
</head>
<body>

<h3>Instructions</h3>
<p>Read all instructions carefully...</p>

<input type="checkbox" id="chk" onclick="checkBox()"> I have read instructions

<br><br>

<button id="btn" disabled onclick="location.href='register.php'">Proceed</button>

</body>
</html>