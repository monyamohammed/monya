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
        width: 150px;
        height: 150px;
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
/*
*{
    margin: 8;
    padding: 9;
    box-sizing:border-box;
    transition:.5s ease-in-out;
}
.container{
    width: 100%;
    height: 100vh;
   
    display: flex;
    align-items: center;
    justify-content: center;
}
.conten{
display: flex;
align-items: center;
justify-content: center;
gap: .5rem;
}

.card{
    width: 12rem;
    height: 12rem;
    border-radius: 1.5rem;
    box-shadow: 0 5px 10px 0 rgba(0,0,0,0.5);
    cursor: pointer;
    overflow: hidden;
  

}
.card + .card{
    margin-left: -12%;
}
.card:hover{
    transform: rotate(-10deg);
    z-index: 1;
}
.card:hover ~ .card{
    translate: 3rem;
}
.conten .card img{
    width: 100%;
}
*/
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
<div class="card"><img src="img/1b.jpg" alt=""></div>
<div class="card"><img src="img/2b.jpg" alt=""></div>
<div class="card"><img src="img/3b.jpg" alt=""></div>
<div class="card"><img src="img/4b.jpg" alt=""></div>
<div class="card"><img src="img/5b.jpg" alt=""></div>
<div class="card"><img src="img/6b.jpg" alt=""></div>
<div class="card"><img src="img/7b.jpg" alt=""></div>
<div class="card"><img src="img/8b.jpg" alt=""></div>
<div class="card"><img src="img/9b.jpg" alt=""></div>
<div class="card"><img src="img/10b.jpg" alt=""></div>
<div class="card"><img src="img/11b.jpg" alt=""></div>
<div class="card"><img src="img/12b.jpg" alt=""></div>
<div class="card"><img src="img/13b.jpg" alt=""></div>
<div class="card"><img src="img/14b.jpg" alt=""></div>
<div class="card"><img src="img/15b.jpg" alt=""></div>
<div class="card"><img src="img/16b.jpg" alt=""></div>
<div class="card"><img src="img/17b.jpg" alt=""></div>
<div class="card"><img src="img/18b.jpg" alt=""></div>
<div class="card"><img src="img/19b.jpg" alt=""></div>
<div class="card"><img src="img/20b.jpg" alt=""></div>
<div class="card"><img src="img/21b.jpg" alt=""></div>
<div class="card"><img src="img/22b.jpg" alt=""></div>






</div>
    </div>
    <footer>
	<span>COPYRIGHT 2024 &copy; Monya al_dobai</span>	
	</footer>
</body>
</html>