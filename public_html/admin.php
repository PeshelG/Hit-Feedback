<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Hlt Registration Portal</title>
</head>
<style>
    html,body{
    margin: 0;
    background-color: rgb(34, 74, 255);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
    font-family: mol;
}

</style>
<body>
    <form action="../includes/login.php" method="post" class="reg_form">
     
            <img src="assets/images/logo.png">
            <label style="color:gray;">Admin Login</label>
            <div class="field" style="width:100%;">
                <input
                name="username"
                  type="text"
                  placeholder="Username"
                  required
                />
              </div>
              <div class="field"  style="width:100%;">
                <input
                name="password"
                  type="password"
                  placeholder="Password"
                  required
                />
              </div>
            <button type="submit">LOGIN</button>

    </form>
    <br>
    <a href="index.php">Return to feedback form</a>
</body>
</html>