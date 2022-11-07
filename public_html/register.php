
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        transition: 300ms;
    }
    body{
        background-color: black;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    h1{
        font-size: 50px;
        text-align: center;
    }
    label{
        color: rgb(255, 255, 255);
        text-align: center;
        
    }
    form{
       margin-top: 10px;
        width: max-content;
        background: none;
        border: 1px solid rgb(255, 255, 255);
        padding: 10px;
        color: white;
        border-radius: 20px;
        border-color: #3f0058;
    }
    form input{
        width: 200px;
        font-size: 20px;
        padding: 5px;
        outline: none;
        border: none;
        background: none;
    }
    form input:hover{
        border-color: purple;
    }
    form button{
        font-size: 20px;
        width: fit-content;
        padding: 5px;
        border: none;
        outline: none;
        background:none;
        color: rgb(2, 85, 9);
    }
    body {
	background: linear-gradient(-45deg, #90ee52, #129700, #23d5c6, #97d523);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
    overflow: hidden;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}

}
img{
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
}
</style>
<body>
    <img src="./images/download.gif" alt="">
        <h1>Toxic Chatroom</h1>
        <label>-----Enter an anonymous username-----</label>
        <br>
      <form action="../includes/register.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <button type="submit">Join</button>
    </form>
        
    
</body>
</html>