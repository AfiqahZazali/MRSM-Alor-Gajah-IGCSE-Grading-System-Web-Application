<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRSM ALOR GAJAH</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    .banner{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url("https://scontent.fkul3-4.fna.fbcdn.net/v/t31.18172-8/21366684_368408966924899_6694156461306948412_o.jpg?stp=c0.52.1080.563a_dst-jpg_p720x720&_nc_cat=110&ccb=1-7&_nc_sid=300f58&_nc_ohc=qyyl9w9iujAAX-RLozV&_nc_ht=scontent.fkul3-4.fna&oh=00_AfBjermP9yVDuqewUo6m582BzNgk-9zbfZ8FvxohjHBsXw&oe=655F1DDA");
        background-size:cover;
        background-position: center;
    }
    .navbar{
        width: 85%;
        margin: auto;
        padding: 35px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .logo{
        width: 120px;
        cursor: pointer;
    }
    h1{
        text-decoration: none;
        color: #fff;
    }
    .content{
        width: 100%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
        color: #fff;
    }
    .content h1{
        font-size: 70px;
        margin-top: 80px;
    }
    button{
        width: 200px;
        padding: 15px 0;
        text-align: center;
        margin: 20px 10px;
        border-radius: 25px;
        font-weight: bold;
        border: 2px solid #009688;
        background: transparent;
        color: #fff;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    span{
        background: 009688;
        height: 100%;
        width: 0;
        border-radius: 25px;
        position: absolute;
        left: 0; bottom: 0;
        z-index: -1;
        transition: 0.5s;
    }
    button:hover span{
        width: 100%;
    }
    button:hover{
        border: none;
    }
</style>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="https://seeklogo.com/images/M/mrsm-logo-D2D37532EE-seeklogo.com.png" class="logo">
            <h1>MRSM ALOR GAJAH</h1>
        </div>

        <div class="content">
            <h1>Sign In</h1>
            <div>
                <a href="studentLogin.php"><button type="button"><span></span>STUDENT</button></a>
                <a href="teacherLogin.php"><button type="button"><span></span>TEACHER</button></a>
            </div>
        </div>
    </div>
    
</body>
</html>