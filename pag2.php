<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="style2.css">-->
    <title>Document</title>
    <style>
        body{
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
font-family: sans-serif;
background-size: cover;
background-image: url('img/11g.jpg');
}

ul{
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
}

ul li{
    list-style: none;
 
}

ul li a{
    text-decoration: none;
    color: #141414;
    font-size: 22px;
    display: black;
    padding: 10px 15px;
    position: relative;
}
ul li a:before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: purple;
    transform: scaleX(0);
    transform-origin: right;
    transition: all 0.5s;
}

ul li a:after{
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color:  #2b28cf;
    transform: scaleX(0);
    transform-origin: right;
    transition: all 0.5s;
}

ul li a:hover{
color: purple;
}

ul li a:hover:before ,ul li a:hover::after{
    transform: scaleX(1);
}

    </style>



</head>
<body>
    <ul>
<li><a href='#pag2.php' >Home</li>
<li><a href='pag33.php' >Various Books</li>
<li><a href='child.php' >Childern's Books</li>
<li><a href='var.php' >Breaks Book </li>
<li><a href='add.php' >Add Bookes </li>
    </ul>
   
</body>
</html>