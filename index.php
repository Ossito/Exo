<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Individual Project</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="lightbox.css">
    
</head>

<style>
    body{
	padding: 0;
	margin: 0;
}

.banner{
	background: url(images/7.jpg) no-repeat center center;
	background-size: cover;
	height: 100vh;
	position: relative;
}

header{
	padding: 5px 30px 10px;
	background-color: rgba(255,255,255,0.6);
}

.hat{
	float: left;
	margin-top: 21px;
}

.title-color{
	text-transform: uppercase;
	font-weight: bold;
	color: #ff4181;
}

.search_my{
	float: right;
	margin-top: 21px;
}

.nav1{
	background-color: #f8f9fa;
}

.navbar{
	padding: 0px;
}

.navbar-nav li{
	z-index: 1;
}

.navbar-nav li a{
	font-size: 17px;
	padding: 15px 60px !important;
}

.navbar-nav li a:hover{
	text-decoration: none;
	border-right: 3px solid #ff4181;
	border-left: 3px solid #ff4181;
	transition: 0.3s all;
}

.navbar-light .navbar-nav .navbar-link{
	color: #000;
}

.slider{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.more-bttn{
	font-size: 14px;
	color: #fff;
	font-weight: 600;
	text-decoration: none;
	text-transform: uppercase;
	letter-spacing:  2px;
	background: #ff1481;
	padding: 10px 22px;
    border: 2px solid #ff4181;
    border-radius: 5px;
}

.more-bttn:hover{
	color: #000;
    background: #fff;
    cursor: pointer;
}

.modal-body img{
	width: 100%;
}

.modal-body p{
    text-align: center;
}

.slides p{
    text-align: center;
    font-weight: 700;
    font-size: 20px;
}

.slides button{
    margin-left: 450px;
}

.about{
    margin-top: 80px;
}

.about h1{
    text-align: center;
    letter-spacing: 12px;
    margin-bottom: 15px;
    font-size: 25px;
    font-weight: bold;
}

.about h3{
    text-align: center;
    color: #ff4181;
}

.about p{
    text-align: center;
    padding: 10px 137px 0px;
}

.crl1{
    background: #146eb4;
}

.crl2{
    background: #2dde98;
}

.crl3{
    background: #8e43e7;
}

.about_grid{
    text-align: center;
    padding: 30px;
    margin-bottom: 50px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
}

.about_grid h4{
    color: #ff4181;
}

.about_grid p{
    padding: 0px;
    color: #fff;
    margin-bottom: 25px;
}

.about_grid i{
    font-size: 50px;
    color: #fff;
    margin-bottom: 10px;
}

.about_grid i:hover{
    color: #000;
}

.about_grid:hover{
    box-shadow: 2px 15px 70px 2px rgba(0,0,0,0.75);
    -webkit-box-shadow: 2px 15px 70px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 2px 15px 70px 2px rgba(0,0,0,0.75);
    -ms-box-shadow: 2px 15px 70px 2px rgba(0,0,0,0.75);
    -o-box-shadow: 2px 15px 70px 2px rgba(0,0,0,0.75); 
}

.services{
    background-color: #000;
    margin-top: 40px;
    padding-bottom: 40px;  
}

.services h1{
    color: #fff;
    text-align: center;
    letter-spacing: 12px;
    text-transform: uppercase;
    padding: 80px 0px 20px;
}

.services h3{
    color: #ff1481;
    text-align: center;
    margin-bottom: 20px;
}

.services p{
    color: #fff;
    padding: 10px 137px 0px;
}

.services_grid{
    background-color: aliceblue;
    text-align: center;
    padding: 20px;
    margin-bottom: 20px;
}

.services_grid1{
    padding: 20px 15px;
    width: 100%;
    text-align: center;
}

.services_grid1 i{
    font-size: 26px;
    color: #fff;
    text-align: center;
    line-height: 63px;
    height: 64px;
    width: 64px;
    border-radius: 164px;
    background-color: #ff1481;
}

.services_grid2{
    padding: 20px 15px;
}

.services_grid2 p{
    color: #000;
    padding: 0px;
    margin-bottom: auto;
}

.services_grid2 i{
    color: #ff1481;
    margin-right: 10px;
    font-size: 25px;
}

.services_grid_right{
    border-right: 2px solid #ff1481;
    text-align: center;
}

.more-details{
    color: #000;
    text-decoration: none;
    font-size: 14px;
    margin-top: 25px;
    text-align: center;
    display: inline-block;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    -moz-transition: 0.5s all;
    border: 1px solid #000;
    padding: 8px 24px;
    border-radius: 20px;
    letter-spacing: 2px;
    background-clip: white;
}

.more-details:hover{
    color: #fff;
    background-color: #ff1481;
    border-color: #ff2b67;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    -moz-transition: 0.5s all;
}

.services_grid1 i{
    font-size: 20px;
    line-height: 53px;
    height: 54px;
    width: 54px;
}

.gallery h1{
    color: #000;
    text-align: center;
    text-transform: uppercase;
    font-weight:700;
    letter-spacing: 5px;
    padding-top: 80px;
    padding-bottom: 30px;
}

.gallery-grids{
    padding: 0px 15px;
}

.gallery_grid_img{
    padding: 0px;
}

.lectures{
    background-color: #000;
    padding-bottom: 80px;
    margin-top: 60px;
}

.lectures h1{
    color: #fff;
    text-align: center;
    letter-spacing: 12px;
    text-transform: uppercase;
    font-weight: 700;
    padding: 80px 0px 20px;
}

.l-img{
    width: 100%;
    position: relative;
    display: block;
    overflow: hidden;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -ms-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    opacity: 1;
    filter: alpha(opacity=100);
}

.l-img img{
    width: 100%;
    margin-top: 25px;
    border-radius: 1px;
}

.l-img:hover{
    cursor: pointer;
}

.l-img:hover .l-caption{
    transform: translateY(0%) scale(1);
    -webkit-transform: translateY(0%) scale(1);
    -ms-transform: translateY(0%) scale(1);
    -moz-transform: translateY(0%) scale(1);
    -o-transform: translateY(0%) scale(1);
}

.l-caption{
    background-color: rgba(1,4,6,0.45);
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 15px 20px;
    right: 0;
    text-align: center;
    z-index: 99px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all; 
    -ms-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    transform: translateY(150%) scale(1.5);
    -webkit-transform: translateY(150%) scale(1.5);
    -ms-transform: translateY(150%) scale(1.5);
    -moz-transform: translateY(150%) scale(1.5);
    -o-transform: translateY(150%) scale(1.5);
}

.l-caption ul{
    display: inline-block;
    margin: 0px;
    padding: 0px;
}

.l-caption ul li{
    display: inline-block;
}

.l-caption ul li a{
    background-color: #fff;
    border-radius: 50%;
    color: #095880;
    display: inline-block;
    margin: 0px;
    height: 28px;
    line-height: 30px;
    width: 28px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    -moz-transition: 0.5s all;
}

.l-caption ul li a:hover{
    transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
}

.l-info{
    text-align: center;
    border: 1px solid #000;
    padding: 5px 5px 0px 5px;
    background-color: #ff2b67;
}

.l-info p{
    font-size: 15px;
    letter-spacing: 2px;
    color: #fff;
}

.l-info h5{
    font-size: 15px;
    letter-spacing: 1.5px;
    color: #fff;
}

.inform{
    background: url(images/19.jpg) 0px 0px fixed;
    background-size: cover;
    padding-top: 35px;
    padding-bottom: 40px; 
    color: #fff;
}

.inform h1{
    color: #fff;
    letter-spacing: 10px;
    text-align: center;
}

.inform_form{
    width: 100%;
    margin: 0 auto;
    text-align: center;
}

.form-left{
    padding-left: 0;
}

.inform input[type="text"],input[type="email"],input[type="phone"]{
    width: 100%;
    color: #fff;
    background: none;
    outline: none;
    font-size: 1em;
    padding: 0.8em 1em;
    margin-bottom: 2em;
    border: none;
    border-bottom: solid 2px #fff;
    display: inline-block;
    transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
}

.inform textarea{
    resize: none;
    width: 100%;
    color: #fff;
    background: none;
    outline: none;
    font-size: 1em;
    padding: 0.8em 1em;
    min-height: 10em; 
    border: none;
    border-bottom: solid 2px #fff;
    display: inline-block;
    transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
}

.inform input[type="submit"]{
    outline: none;
    color: #fff;
    padding: 0.7em 1em;
    font-size: 14px;
    margin: 1em 0 0 0;
    border: 1px solid #fff;
    background: #ff1481;
    border-radius: 5px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;      
    -ms-transition: 0.5s all;  
    -o-transition: 0.5s all;  
}

.inform input[type="submit"]:hover{
    background: none;
    color: #fff;
    border: 1px solid #fff;
}

.inform input[type="text"]:hover,.inform input[type="text"]:focus,.inform input[type="email"]:hover,.inform input[type="email"]:focus,.inform textarea:hover,.inform textarea:focus,.inform input[type="phone"]:hover,.inform input[type="phone"]:focus{
    border-color: #ff1481;
}

footer{
    background-color: transparent;
}

.three_clo{
    color: #fff;
    padding: 10px;
    margin-top: 40px; 
}

.three_clo h4{
    letter-spacing: 2px;
    color: #ff1481;
}

.three_clo p{
    text-align: left;
    color: #000;
}

.three_clo input[type="email"]{
    width: 80%;
    display: inline-block;
    background-color: #fff;
    border: 1px solid #ff1481;
    border-radius: 2px;
    outline: none;
    padding: 0.5em;
    font-size: 13px;
    color: #999999;
}

.btn1{
    color: #dec6be;
    font-size: 18px;
    border: 1px solid #ff1481;
    width: 14%;
    height: 38px;
    border-radius: 2px;
    text-decoration: none;
    background-color: #ff1481;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;      
    -ms-transition: 0.5s all;  
    -o-transition: 0.5s all; 
}

.btn1:hover{
    background-color: transparent;
    cursor: pointer;
}

.mid-row{
    border: 4px solid #ff1481;
    border-radius: 5px;
    color: #fff;
    padding: 35px;
    text-align: center;
    background: #fff;
    margin-top: 14px;
    margin-bottom: 22px;
}

.mid-row p{
    color: #000;
    text-align: left;
}

.mid-row h4{
    font-size: 30px;
    color: #ff1481;
    letter-spacing: 2px;
}

.social-icon i{
    margin-top: 0.5em;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 37px;
    border: 1px solid #ff1481;
    border-radius: 50px;
    font-size: 16px;
    color: #ff1481;
    cursor: pointer;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;      
    -ms-transition: 0.5s all;  
    -o-transition: 0.5s all;  
}

.social-icon i:hover{
    color: #000;
}

.contact{
    color: #fff;
    padding: 10px;
    margin-top: 40px;
}

.contact h4{
    letter-spacing: 2px;
    color: #ff1481;
    text-align: center;
}

.contact p{
    text-align: left;
    margin-left: 50px;
    margin-top: 25px;
    color: #000;
}

.contact i{
    color: #ff1481;
    padding-right: 20px;
}

.number{
    color: #ff1481;
}

.number a{
    color: #ff1481;
}

.number a:hover{
    text-decoration: none;
}

#myBtn{
    display: none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    width: 40px;
    height: 40px;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: turquoise;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;      
    -ms-transition: 0.5s all;  
    -o-transition: 0.5s all;
}

#myBtn:hover{
    transform: scale(1.3);
    box-shadow: 10px 15px 50px 10px rgba(0,0,0,0.75);
    -webkit-box-shadow: 2px 15px 70px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 2px 15px 70px 2px rgba(0,0,0,0.75);
    -ms-box-shadow: 2px 15px 70px 2px rgba(0,0,0,0.75);
    -o-box-shadow: 2px 15px 70px 2px rgba(0,0,0,0.75);  
}









@media(max-width: 1200px){
	.navbar-nav li{
		font-size: 15px;
	}
}

@media(max-width: 992px){
	.navbar-toggler{
		margin: 10px 0px 10px 30px;
		background-color: #fff;
	}
	.navbar-toggler:hover , .navbar-toggler:hover{
		background-color: #ff1481;
		border-color: #ff4181;
	}
	.navbar-light{
		background-color: #fff;
	}
	.navbar-nav li a{
		text-align: center;
		background-color: aliceblue;
	}
	.navbar-nav li a:hover{
		background-color: #ff4181;
    }
    .more-bttn{
	    font-size: 11px;
	    color: #fff;
	    font-weight: 600;
	    text-decoration: none;
	    text-transform: uppercase;
	    letter-spacing:  2px;
	    background: #ff1481;
	    padding: 5px 11px;
        border: 2px solid #ff4181;
        border-radius: 5px;
    }
    .more-bttn:hover{
	    color: #000;
        background: #fff;
        cursor: pointer;
    }
    .modal-body img{
	    width: 100%;
    }
    .modal-body p{
        text-align: center;
    }
    .slides p{
        margin-top: 300px;
        text-align: center;
        font-weight: 700;
        font-size: 20px;
    }
    .slides button{
        margin-left: 190px;
    }
    .services_grid1{
        padding: 10px 0px;
    }
    .services p{
        padding: 10px 50px 0px;
    }
   
}

@media (max-width: 768px){
    .about p{
        padding: 10px 10px 0px;
    }
    .services p{
        padding: 10px 10px 0px;
    }
    .services_grid1 i{
        margin: auto;
    }
    .services_grid_right{
        border-bottom: 2px solid #ff1481;
        border-right: none;
    }
}


</style>


<body>
    <!-- Banner -->
    <div class="banner">
        <header>
            <div class="hat">
                <h1><i class="fa fa-graduation-cap"></i><span class="title-color"> Licence Pro</span></h1>
            </div>
            <div class="search_my">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher ici ..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search fa-1x"></i> Search</button>
                </form>
            </div>
            <div class="clearfix"></div>
        </header>

    <div class="nav1">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lectures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>   
            </ul>
         </div>
    </nav>
    </div>
        <div class="container slider">
                <ul class="slides">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat rerum harum delectus doloribus tempora. Quasi perspiciatis temporibus distinctio minus doloremque, nam quisquam, iste laudantium repellat aut labore ratione illum ipsa.</p>
                        <button type="button" class="more-bttn" data-toggle="modal" data-target="#exampleModal">
                            Read more
                        </button>
                </ul>
        </div>
        
<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/11.jpg" alt="Modal_Image">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat rerum harum delectus doloribus tempora. Quasi perspiciatis temporibus distinctio minus doloremque, nam quisquam, iste laudantium repellat aut labore ratione illum ipsa.</p>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container">
        <div class="about">
            <h1>ABOUT</h1>
            <h3>What we are</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error expedita, libero sint quos placeat adipisci corrupti, esse quis, perferendis reprehenderit possimus aliquid sed natus temporibus. Facilis nam illum illo alias!</p>
            <div class="row">
                <div class="col-md-4 crl1 about_grid">
                    <i class="fa fa-university"></i>
                    <h4>Academics</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia facilis, quis aliquid laborum sapiente magnam deleniti. Beatae laudantium aliquid provident rem ipsam ut rerum, perferendis, consequatur corrupti praesentium aut aspernatur?</p>
                    <button type="button" class="more-bttn" data-toggle="modal" data-target="#exampleModal">
                        Read more
                    </button>
                </div>
                <div class="col-md-4 crl2 about_grid">
                    <i class="fa fa-tags"></i>
                    <h4>Admission</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia facilis, quis aliquid laborum sapiente magnam deleniti. Beatae laudantium aliquid provident rem ipsam ut rerum, perferendis, consequatur corrupti praesentium aut aspernatur?</p>
                    <button type="button" class="more-bttn" data-toggle="modal" data-target="#exampleModal">
                        Read more
                    </button>
                </div>
                <div class="col-md-4 crl3 about_grid">
                    <i class="fa fa-graduation-cap"></i>
                    <h4>Courses</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia facilis, quis aliquid laborum sapiente magnam deleniti. Beatae laudantium aliquid provident rem ipsam ut rerum, perferendis, consequatur corrupti praesentium aut aspernatur?</p>
                    <button type="button" class="more-bttn" data-toggle="modal" data-target="#exampleModal">
                        Read more
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
                <h1>Services</h1>
                <h3>Our best services</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quia praesentium nulla incidunt error, laborum debitis repellat architecto eius, alias in fugiat dolore, quod molestias nesciunt facilis enim distinctio optio?</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="services_grid">
                        <div class="row">
                            <div class="col-sm-12 col-md-2 services_grid1">
                                <div class="services_grid_left">
                                    <i class="fa fa-flask"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 services_grid1 services_grid-right">
                                <h5>Lorem Come with me</h5>
                            </div>
                            <div class="col-sm-12 col-md-6 services_grid2">
                                <p>
                                    <span><i class="fa fa-long-arrow-right"></i></span>
                                    Lorem Come with me again
                                </p>
                                <p>
                                    <span><i class="fa fa-long-arrow-right"></i></span>
                                    Lorem Come with me again
                                </p>
                                <button type="button" class="more-details" data-toggle="modal" data-target="#exampleModal">
                                    More Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services_grid">
                        <div class="row">
                            <div class="col-sm-12 col-md-2 services_grid1">
                                <div class="services_grid_left">
                                    <i class="fa fa-flask"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 services_grid1 services_grid-right">
                                <h5>Lorem Come with me</h5>
                            </div>
                            <div class="col-sm-12 col-md-6 services_grid2">
                                <p>
                                    <span><i class="fa fa-long-arrow-right"></i></span>
                                    Lorem Come with me again
                                </p>
                                <p>
                                    <span><i class="fa fa-long-arrow-right"></i></span>
                                    Lorem Come with me again
                                </p>
                                <button type="button" class="more-details" data-toggle="modal" data-target="#exampleModal">
                                    More Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services_grid">
                        <div class="row">
                            <div class="col-sm-12 col-md-2 services_grid1">
                                <div class="services_grid_left">
                                    <i class="fa fa-flask"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 services_grid1 services_grid-right">
                                <h5>Lorem Come with me</h5>
                            </div>
                            <div class="col-sm-12 col-md-6 services_grid2">
                                <p>
                                    <span><i class="fa fa-long-arrow-right"></i></span>
                                    Lorem Come with me again
                                </p>
                                <p>
                                    <span><i class="fa fa-long-arrow-right"></i></span>
                                    Lorem Come with me again
                                </p>
                                <button type="button" class="more-details" data-toggle="modal" data-target="#exampleModal">
                                    More Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services_grid">
                        <div class="row">
                            <div class="col-sm-12 col-md-2 services_grid1">
                                <div class="services_grid_left">
                                    <i class="fa fa-flask"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 services_grid1 services_grid-right">
                                <h5>Lorem Come with me</h5>
                            </div>
                            <div class="col-sm-12 col-md-6 services_grid2">
                                <p>
                                    <span><i class="fa fa-long-arrow-right"></i></span>
                                    Lorem Come with me again
                                </p>
                                <p>
                                    <span><i class="fa fa-long-arrow-right"></i></span>
                                    Lorem Come with me again
                                </p>
                                <button type="button" class="more-details" data-toggle="modal" data-target="#exampleModal">
                                    More Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="gallery">
        <div class="container">
            <h1>Our Gallery</h1>
                <div class="gallery-grids">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                            <a class="" href="images/10.jpg" data-lightbox="example-set" data-title="">
                                <img class="img-fluid" src="images/10.jpg" alt="Gallery_Img">
                            </a>
                        </div>
                        <div class="col-md-4 col-6 gallery_grid_img">
                            <a class="" href="images/5.jpg" data-lightbox="example-set" data-title="">
                                <img class="img-fluid" src="images/5.jpg" alt="Gallery_Img">
                            </a>
                        </div>  
                        <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                            <a class="example-image-link w3-agilepic" href="images/5.jpg" data-lightbox="example-set" data-title="">
                                <img class="img-fluid" src="images/5.jpg" alt="Gallery_Img">
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                            <a class="" href="images/10.jpg" data-lightbox="example-set" data-title="">
                                <img class="img-fluid" src="images/10.jpg" alt="Gallery_Img">
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                            <a class="" href="images/5.jpg" data-lightbox="example-set" data-title="">
                                <img class="img-fluid" src="images/5.jpg" alt="Gallery_Img">
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                            <a class="" href="images/10.jpg" data-lightbox="example-set" data-title="">
                                <img class="img-fluid" src="images/10.jpg" alt="Gallery_Img">
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>



    <div class="lectures">
        <div class="container">
            <h1>Our Lectures</h1>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="l-img">
                        <a href="#"><img class="img-rounded" src="images/t3.jpg" alt="lectures_Img"></a>
                        <div class="l-caption">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="l-info">
                        <h5>Lectures</h5>
                        <p>Jack Smith</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="l-img">
                        <a href="#"><img class="img-rounded" src="images/t2.jpg" alt="lectures_Img"></a>
                        <div class="l-caption">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="l-info">
                        <h5>Lectures</h5>
                        <p>Jack Smith</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="l-img">
                        <a href="#"><img class="img-rounded" src="images/t1.jpg" alt="lectures_Img"></a>
                        <div class="l-caption">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="l-info">
                        <h5>Lectures</h5>
                        <p>Jack Smith</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="l-img">
                        <a href="#"><img class="img-rounded" src="images/t4.jpg" alt="lectures_Img"></a>
                        <div class="l-caption">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="l-info">
                        <h5>Lectures</h5>
                        <p>Jack Smith</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="inform">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="inform_form">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 form-left">
                            <input type="text" name="name" placeholder=" Your Name" required="">
                        </div>
                        <div class="col-sm-4 col-md-4 form-left">
                            <input type="email" name="email" placeholder=" Your Mail" required="">
                        </div>
                        <div class="col-sm-4 col-md-4 form-left">
                            <input type="phone" name="phone" placeholder=" Your Phone" required="">
                        </div>
                    </div>
                    <textarea name="message" placeholder="Message" required=""></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 three_clo">
                    <h4>Newsletter</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dicta velit libero debitis, quibusdam saepe nisi cupiditate repudiandae, non corrupti odit aliquid temporibus. Odio magnam minima molestiae reprehenderit doloremque quaerat.</p>
                    <form action="#" method="post">
                        <input type="email" placeholder="Your mail here...">
                        <button class="btn1"><i class="fa fa-envelope-open"></i></button>
                    </form>
                </div>
                <div class="col-md-4 mid-row">
                    <h4>Follow Us</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi maxime fugiat velit deserunt atque nulla explicabo ea et modi voluptate eum, ad non quam repudiandae inventore animi tempore. Sed, est!</p>
                    <div class="social-icon">
                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <div class="col-md-4 contact">
                    <h4>Contact Us</h4>
                    <p><i class="fa fa-map-marker"></i> U.S.A Airbone Academy<span class="number"> 80804</span></p>
                    <p><i class="fa fa-phone"></i> Call Us : <span class="number"> (0011) 1343 843</span></p>
                    <p><i class="fa fa-envelope-open"></i> Email Us : <span class="number"><a href="mailto:@example.com" class="info"> info@example.com</a></span></p>
                </div>
            </div>
        </div>
    </footer>

    <button onclick="topFunction()" id="myBtn" title="Go to Top">
        <i class="fa fa-chevron-up"></i>
    </button>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    
    <script type="text/javascript">
        window.onscroll = function(){
            scrollFunction()
        };
        function scrollFunction(){
            if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
                document.getElementById("myBtn").style.display = "block";               
            }else{
                document.getElementById("myBtn").style.display = "none"; 
            }
        }
        function topFunction(){
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
</body>
</html>