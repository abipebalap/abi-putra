<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 10px;
  margin-top: 8px;

  display: flex;
  justify-content: center;
  border: 5px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 20px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-left: 120px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


</style>
</head>
<body>


<form action="validasi.php" method="post">
  <div class="imgcontainer">
    <img src="gambar_bus_parkir.jpg" alt="" class="" width="500px">
  </div>

  <form action="validasi.php" name="login" class="container">
    
    <label for="uname"><b>email</b></label>
    <input type="text" placeholder="Enter email" name="uname" required>
    

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" class="input" required>
        
    <button type="submit" name="submit">LOGIN</button>
    <label>
    </label>
  </form>
</form>
   </body>
</html>
