<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background-size: cover;
    background-image: url('img/11g.jpg');

        }
        
div{
        display:flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin: 10px;
        border: 10px ;
    }
    div img{
        width: 250px;
        height: 250px;
        border: 2px ;
        border-radius: 9px 0px 9px;
        box-shadow: 2px 0px 10px black ;
        cursor: pointer;
        margin: 8px;
        transition: 40ms;
    }
    div img:hover{
        transition: scale(1.03);
        transform: scale(1.1);
    }
    ul{
    padding: 0;
    margin-top: 10;
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
footer{
	text-align:center;
	padding:40px;
}
footer span{
	color:black;
	font-weight:bold;
	
}
    </style>
</head>
<body>
<div>
<ul>
<li><a href='pag2.php' >Home</li>
<li><a href='pag33.php' >Various Books</li>
<li><a href='child.php' >Children's Books</li>
<li><a href='var.php' >Breaks Book </li>
<li><a href='add.php' >Add Bookes </li>
    </ul>
</div>
    <div class="container">
        <div class="conten">

<div class="card"><img src="img/f2.jpg" alt=""></div>
<div class="card"><img src="img/f3.jpg" alt=""></div>
<div class="card"><img src="img/f4.jpg" alt=""></div>
<div class="card"><img src="img/f5.jpg" alt=""></div>
<div class="card"><img src="img/f6.jpg" alt=""></div>
<div class="card"><img src="img/f7.jpg" alt=""></div>
<div class="card"><img src="img/f8.jpg" alt=""></div>
<div class="card"><img src="img/f9.jpg" alt=""></div>
<div class="card"><img src="img/f10.jpg" alt=""></div>
<div class="card"><img src="img/f11.jpg" alt=""></div>
<div class="card"><img src="img/f12.jpg" alt=""></div>
<div class="card"><img src="img/f13.jpg" alt=""></div>
<div class="card"><img src="img/f14.jpg" alt=""></div>
<div class="card"><img src="img/f15.jpg" alt=""></div>
<div class="card"><img src="img/f16.jpg" alt=""></div>
<div class="card"><img src="img/f17.jpg" alt=""></div>
<div class="card"><img src="img/f18.jpg" alt=""></div>
<div class="card"><img src="img/f19.jpg" alt=""></div>
<div class="card"><img src="img/f20.jpg" alt=""></div>








</div>
    </div>
    <footer>
	<span>COPYRIGHT 2020 &copy; Monya al_dobai</span>	
	</footer>
</body>
</html>