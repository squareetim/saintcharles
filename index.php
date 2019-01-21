<?php

/**
 * This php file is meant to handle user subscription by ensuring that their email address
 * is saved then welcome page is sent to the user
 */

require ('Connect/connect.php');

//If a user request a page using a GET method, display the index page
if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
    //Display the index page
    successful();
    exit;
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    //Add the user to database and send the welcome page
    adduser();
}else
{
    successful();
    exit;
}

function successful()
{
    //Main index html page
    $church_index_main = <<< CHURCH_INDEX_MAIN
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Catholic Church">
    <meta name="description" content="Saint+Charles">
    <meta name="description" content="Catholic+Church+Cross+River+State">
    <meta name="description" content="Charles+Lwanga+Parish">
    <meta name="description" content="St. Charles+L'wanga+Parish">
    <meta name="description" content="St.&Charles&L'wanga&Parish">
    
    <meta name="description" content="St. Charles L'wanga Parish">
    <meta name="author" content="Gabriel Etim">
	<link href="img/charles9.ico" rel="logo icon">


    <title>St. Charles L'wanga Parish</title>

    <!-- Bootstrap Core CSS -->
    <link href="Boot/boot/css/bootstrap.min.css" rel="stylesheet">
    <link href="Boot/boot1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom theme -->
    <link href="CSS/style.css" rel="stylesheet">
	<link href="CSS/owl.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body data-spy="scroll" id="index-top">
<style>
marquee{
    width: 100%;
    background-color:black;
    color: white;
    }
</style>
<!-- Section for navigation bar -->
<nav id="churchNav" class="navbar navbar-inverse navbar-fixed-top" style="background-color: #122b40">
    <div class="container-fluid">
        <!-- Services grouped for better mobile view -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#church-menu" style="background-color: #122b40">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#index-top">St. Charles L'wanga Parish</a>
        </div>

        <!--Organise navigation links for toggling -->
        <div class="collapse navbar-collapse" id="church-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="#about">About Us</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myMod">Meditation</a>
                </li>
                <li>
                    <a href="lib-orgin.php">Online Library</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Parish Records<span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#myModal1">Parish Catechists</a> </li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal2">Indigenous Priests & Religious from the Parish</a> </li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal3">Past Laity Council Presidents</a> </li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal4">Current Laity Council Members</a> </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal90">Calendar</a>
                </li>
                <li>
                    <a href="#contact-us">Contact Us</a>
                </li>
            </ul>
            <form class="navbar-form navbar-right" action="#" method="post" id="join-us">
                <div class="form-group">
                    <input type="email" placeholder="Newsletter Email" class="form-control" id="inputEmail" name="Input_Email" value="">
                </div>
                <button type="submit" class="btn btn-success" value="join us" id="saveForm" name="saveForm">Join Us</button>
            </form>
        </div>
    </div>
</nav>


<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myMod" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: black; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Daily Mediation </h4>
                    <h6 class="modal-title modal-about text-center"><i>(Hebrews 1:2)</i></h6>
                </div>
                <div class="modal-body modal-about">
                    <p><h3>1st Week in Ordinary Time</h3></p>
                    <p><strong>He spoke to us through the Son. (Hebrews 1:2)</strong></p><br>
                    
                   <p>As the Church begins a series of readings from the Letter to the Hebrews, let’s take a broad look 
                   at this beautiful epistle.</p>

                   <p>Truth be told, Hebrews has always been somewhat of a mystery to commentators. Many early Church 
                   writers saw in it the influence of a Pharisee like St. Paul because of its numerous quotes from the 
                   Old Testament. But its style is totally different from Paul’s other works. Other scholars claimed 
                   that the writer was Paul’s fellow apostle and evangelist Barnabas, “son of encouragement” (Acts 4:36). 
                   And even though debate continued—others have proposed Luke, Apollos, and even the deaconess 
                   Priscilla - the letter was accepted as authentically inspired by the Holy Spirit. An early pope, 
                   Clement of Rome, even quoted from Hebrews around AD 96.</p>

                   <p>Modern study reveals Hebrews to be a well-crafted letter, dating most likely from before AD 67. 
                   Although the audience is never clearly identified, no doubt tradition is correct in pointing toward 
                   a community made up chiefly of Jewish Christians rooted in the Hebrew religious culture and language. 
                   Beyond that, we know that it is an exciting letter with a powerful, timeless message: fix your eyes 
                   on Jesus, the Son of God, and the fulfillment of God’s age-old promise to save his people.</p>

                   <p>The Letter to the Hebrews is infused with an experiential knowledge of Jesus and his power to 
                   deliver us from bondage. He is our “great high priest” (Hebrews 4:14) who constantly intercedes for 
                   us (7:25) and whose blood was shed to cleanse our consciences (9:14). He is the author and perfecter 
                   of our faith (12:2) who sustains not only our lives but the entire universe as well (1:3). He is able 
                   to deal with every fear, every sin, every obstacle in our life of faith. He can give us every reason 
                   to “hold unwaveringly to our confession that gives us hope, for he who made the promise is 
                   trustworthy” (10:23).</p>
				   
				   <p>This is the Jesus we will be meeting throughout the next four weeks: a dynamic, powerful Messiah 
				   who is completely committed to rescuing us from sin and bringing us to heaven. May the Spirit open 
				   our eyes to see him more clearly.</p>			   
				   
				 
                    <p><strong><i>“Jesus, thank you for embracing the cross so that I could enter into a new, eternal 
                    covenant with you!”</i></strong></p>
                    <p class="text-muted">&copy; Word Among Us - Mediation</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->


<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal90" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: crimson; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Parish Calendar</h4>
                </div>
                <div class="modal-body modal-about">
                    <h1 class="text-center">Coming up soon</h1>
                    <!--<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%236633ff&amp;src=hbf6qr81i0s41qlst5ikkqkm6g%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Europe%2FLondon" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->

<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: #222222; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Parish Catechists</h4>
                </div>
                <div class="modal-body modal-about">
                    <ol>
                        <li><strong>Late Sir. Celestine Essien Offiong (KSJI)</strong> - <i>Station Catechist</i></li>
                        <li><strong>Mr. Boniface Essien</strong> - <i>(1979 - 1984)</i></li>
                        <li><strong>Mr. Justine Udom</strong> - <i>(1985 - 2000)</i></li>
                        <li><strong>Mr. Joseph G. Udofia</strong> - <i>(2000 - Till Date)</i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->

<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: #222222; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Indigenous Priests from the Parish and Ordination Dates</h4>
                </div>
                <div class="modal-body modal-about">
                    <ol>
                        <li><strong>Rev. Sister Immaculata Ukpong Offiong</strong> - <i>December 20, 1953</i></li>
                        <li><strong>Late Rev. Sister Elizabeth Ukpong Offiong</strong> - <i>December 16, 1962</i></li>
                        <li><strong>Late Rev. Fr. Michael Adim Ukpong Offiong (<i>First Indigenous Efik Priest</i>)</strong> - <i>August 6, 1972</i></li>
                        <li><strong>Rev. Sister Mildred Okon Essien</strong> - <i>August 15, 1983</i></li>
                        <li><strong>Rev. Fr. Emmanuel Okon Andinam</strong> - <i>December 10, 1977</i></li>
                        <li><strong>Rev. Fr. Emmanuel Offiong</strong> - <i>August 16, 2003</i></li>
                        <li><strong>Rev. Fr. Francis Adim Offiong</strong> - <i>November 27, 2010</i></li>
                        <li><strong>Rev. Fr. Gabriel Okem Bulem</strong> - <i>December 30, 2015</i></li>
                        <li><strong>Rev. Fr. Cyril Adim Ukpong Offiong</strong> - <i>October 1, 2016</i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->

<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: #222222; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Past Laity Council Presidents</h4>
                </div>
                <div class="modal-body modal-about">
                    <ol>
                        <li><strong>Late Sir. Chief Frank U. A. Offiong</strong> - <i>(Inception - 1960)</i></li>
                        <li><strong>Late Mr. Dominic Akpan</strong> - <i>(1960 - 1963)</i></li>
                        <li><strong>Late Mr. J. Ironbar</strong> - <i>(1963 - 1967)</i></li>
                        <li><strong>Late Mr. Emmanuel Ekpo</strong> - <i>(1967 - 1970)</i></li>
                        <li><strong>Late Mr. Anthony Offiong Etim</strong> - <i>(1970 - 1973)</i></li>
                        <li><strong>Late Mr. Amos Okon Essien</strong> - <i>(1974 - 1979)</i></li>
                        <li><strong>Late Chief E. W. Ekpong</strong> - <i>(1980 - 1985)</i></li>
                        <li><strong>Late Sir. Celestine Offiong</strong> - <i>(1986 - 1990)</i></li>
                        <li><strong>Col. Ferdinard Ekpo-mbang (KSJI)</strong> - <i>(1991 - 1993)</i></li>
                        <li><strong>Sir. William A. Archibong (KSS)</strong> - <i>(1994 - 1999)</i></li>
                        <li><strong>Eti-Ete Donatus B. Etim (KSM)</strong> - <i>(2000 - 2005)</i></li>
                        <li><strong>Mr. Patrick Coco-Bassey</strong> - <i>(2005 - 2011)</i></li>
                        <li><strong>Barr. Michael Cobham (KSM)</strong> - <i>(2011 - 2014)</i></li>
                        <li><strong>Eti-Eka Grand Medalist (Mrs) Lawrencia E. Ita (JP))</strong> - <i>(2014 - 2018)</i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->

<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: #222222; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true"style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Current Laity Council Members</h4>
                </div>
                <div class="modal-body modal-about">
                    <ol>
                        <li><strong>Barr. Paul Asu</strong> - <i>President</i></li>
                        <li><strong>Eti-Eka (Mrs) Mercy Etim</strong> - <i>Vice President</i></li>
                        <li><strong>Sir. Matthew Odey</strong> - <i>Secretary</i></li>
                        <li><strong>Engr. Peter Okopi</strong> - <i>Assistant Secretary</i></li>
                        <li><strong>Mrs. Kate Amaga</strong> - <i>Treasurer</i></li>
                        <li><strong>Mr. Dominic Ekong</strong> - <i>Financial Secretary</i></li>
                        <li><strong>Anthony Ekpo Bassey</strong> - <i>Publicity Secretary</i></li>
                        <li><strong>Miss Gedoni Edu</strong> - <i>Welfare Officer I</i></li>
                        <li><strong>Mrs Rita Ebong</strong> - <i>Welfare Officer II</i></li>
                        <li><strong>Joseph James</strong> - <i>Provost</i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1>St. Charles L'wanga Parish</h1>
            <br><h3>Essien Town, Calabar, Cross River State, Nigeria</h3>
            <hr><br>
            <h4>Community of Catholic Faithful</h4>
            <a href="#church-services" class="btn btn-primary page-scroll">Services</a>
        </div>
    </div>
</header>

<!-- Section for church services -->
<section id="church-services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center"><br>
                    <h3 class="well well-sm">Parish Activities</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="col-lg-9 col-md-6 content">
        <div class="row">
            <div class="row">
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-bank text-danger"></i>
                        <h4 class="well well-sm text-primary">Confession</h4>
                        <p class="text-muted">Sacrament of Penance and Reconciliation.<br> </p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal42">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-child text-danger"></i>
                        <h4 class="well well-sm text-primary">Baptism</h4>
                        <p class="text-muted">Baptism is the one sacrament that all Christians share in common.</p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal43">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-university text-danger"></i>
                        <h4 class="well well-sm text-primary">Catechism</h4>
                        <p class="text-muted">Study about Christianity and view of our faith.</p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal44">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-bank text-danger"></i>
                        <h4 class="well well-sm text-primary">Marriage</h4>
                        <p class="text-muted">Union of two individuals coming together to become one.<br> </p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal45">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-shield text-danger"></i>
                        <h4 class="well well-sm text-primary">Funeral</h4>
                        <p class="text-muted">A funeral is a ceremony connected with the burial of a corpse with the attendance observances.</p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal46">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-child text-danger"></i>
                        <h4 class="well well-sm text-primary">Thanksgiving</h4>
                        <p class="text-muted">The Catholic Church is unique in their emphasis on thanksgiving compared to other religion</p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal47">View details &raquo;</a> </p>
                    </div>
                </div>
            </div><!-- /.End of row -->
        </div><!-- /.End of row -->


        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal42" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Sacrament of Reconciliation</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/confession1.jpg" alt="Sacrament of Penance, Reconciliation or Confession" class="img-responsive center-block">
                            <p>This is one of the seven Sacraments of the Catholic Church in which the faithful obtain 
                            absolution for the sins committed against God and neighbour and are reconciled with the 
                            community of the Church.</p> 
                            <p><i>By this Sacrament Christians believed they are freed from sins committed after Baptism.</p>
                
                             <p class="text-center"><strong>Saturdays: 6am</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal43" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Baptism</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/baptism1.jpg" alt="Baptism" class="img-responsive center-block">
                            <p>In the Catholic Church, infants are baptized to welcome them into the Catholic faith and 
                            free them from the original sin they were born with.</p>
                            <p><i>Original sin isn't a personal sin of the unborn, but a sin transmitted from 
                            generation to generation by birth. All men and women were born with original sin, and only 
                            Baptism can be regarded as a vaccine against sin.</i></p>
                            <p class="text-center"><strong>Infant</strong> - 1st Saturday of every month.</p>
                            <p class="text-center"><strong>Adult</strong> - Meet Catechist or Priest.</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal44" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Catechism</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/catechism.jpg" alt="Catechism" class="img-responsive center-block">
                            <p>A catechism is a summary or exposition of Christian/Catholic doctrine and serves as a learning introduction
                            to the Sacraments traditionally used in educating children and adult of the Christian 
                            community.</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal45" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Matrimony</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/marriage.jpg" alt="Holy Matrimony" class="img-responsive center-block">
                            <p>Marriage in Catholic Church is referred to as Matrimony. This is the covenant by which a 
                            man and a woman establish themselves a partnership of the whole of life and which is ordered 
                            by its nature to the good of the spouses and the procreation and the education of offspring, 
                            and which has been raised by Christ the Lord to the dignity of a Sacrament between the 
                            baptised.</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal46" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Funeral</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/funeral1.jpg" alt="Sacred Heart of Jesus" class="img-responsive center-block">
                            <p>In Catholic funerals, the Church seeks firstly to offer the Mass often referred to as 
                            <i>vigil</i> for the benefit of the soul of the deceased so that the temporal effects of sin 
                            in Purgatory may be eliminated or reduced, and secondly to provide condolence and comfort 
                            for the deceased's family and exhort the latter to pray along with the Church for the soul 
                            of the departed.</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal47" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Thanksgiving</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/thanksgiving1.jpg" alt="Sacred Heart of Jesus" class="img-responsive center-block">
                            <p>During Thanksgiving, we believe in a God who truly entered into human history. We give 
                            Him thanks for His mighty deeds in the Eucharist especially. In each Eucharist thanksgiving 
                            we give thanks not just for natural blessings, but for the fact that God supernaturally 
                            enters our lives</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <!-- Section for Administrator's message -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="well well-sm">Reflection</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 mask">
                    <img class="img-rounded img-responsive"
                         src="img/asst_parish_priest1.jpg"
                         alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="col-lg-10 col-md-6 about-grid modal-about about-grid-2">
                            <p><strong>THE MESSAGE OF THE RICH YOUNG MAN</strong><br>
<strong>The beauty of a Holy Quest:</strong><br> ‘What must I do to inherit the Kingdom of God?’ remains still a valid and genuine quest in a world where many young men would rather ask ‘what must I do to belong?’ ‘What must I do to have money?’, 
‘What must I do to have great power, prestige, position etc.’ The young man teaches us desire for our home above which is often forgotten in the razzmatazz of earthly struggles! He teaches us that the Kingdom of God given to us 
by God’s grace has to be accessed; ‘inherited’ through human co-operation. He also teaches us to seek answers from Jesus as against other demonic alternatives. He also shows us other positive attitudes in the search; his humility 
(in kneeling down), his courtesy (in addressing him as ‘good master’) and his urgency (in running to Him not merely walking up to Him for life is a race not a walk). <br>
</p>
                            <strong>Happy Sunday beloved friends.</strong>
                </div>
            </div>
        </div><!-- /.End of Administrative container -->

        <div class="row" id="about">
            <div class="col-lg-12">
                <div class="text-center">
                    <h3 class="well well-sm">About Saint Charles L'wanga</h3>
                </div>
            </div>
        </div>
        <div class="modal-about">
            <div class="container-fluid">
                <div class="about-grids modal-about">
                    <div class="col-lg-2 col-md-6 col-sm-6 about-grid modal-about mask">
                        <img src="img/charles.jpg" alt="Saint Charles L'wanga" class="img-circle img-responsive" width="140" height="140">
                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-6 about-grid modal-about about-grid-2">
                        <!--<h1>ABOUT US</h1>-->
                        <p>Charles Lwanga (Luganda: Kaloli Lwanga (1 January 1860 – 3 June 1886) was a Ugandan convert
                            to the Catholic Church, who was martyred for his faith and is revered as a saint by both the
                            Catholic Church and the Anglican Communion.<br>
                            Charles Lwanga and the other Christians who accompanied him in death were canonized on
                            18 October 1964 by Pope Paul VI during the Vatican II conference. "To honor these African
                            saints, Paul VI became the first reigning pope to visit sub-Saharan Africa when he toured Uganda
                            in July 1969, a visit that included a pilgrimage to the site of the martyrdom at Namugongo".<br>
                        </p>

                        <!--Modal -->
                        <button class="btn btn-primary underline-from-left modal-about" data-toggle="modal" data-target="#myModal40">Saint Charles L'wanga and Companions<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> </button><br>                        

                        <!--Modal -->
                        <button class="btn btn-primary underline-from-left modal-about" data-toggle="modal" data-target="#myModal">ABOUT THE PARISH<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> </button>
                        <div></div>

                        <div class="tooltip-content">
                            <div class="modal fade features-modal modal-about" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-about">
                                    <div class="modal-content modal-about">
                                        <div class="modal-header modal-about" style="background-color: crimson; color: white;">
                                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                                            <h4 class="modal-title modal-about text-center">About St. Charles L'wanga Parish</h4>
                                        </div>
                                        <div class="modal-body modal-about">
                                            <img src="img/charles.jpg" alt="St. Charles L'wanga Parish" class="img-circle img-responsive center-block">
                                            <p>The history of St. Charles L’wanga Parish can be linked to the story of our Lord Jesus Christ who was born in a manger and later grew to greatness to become the Saviour of the world. It is a proud history of great achievements and contributions to evangelism in our neighborhood and the universal church in general.<br>
                                                We therefore pay glowing tributes to Late Etinyin Essien Etim Offiong III, an illustrious son of Essien Town, Progenitor of Catholicism in Calabar and its environs. <br>
                                                Available records show that the practice of the Catholic faith took root in Essien Town in 1915 following the celebration of the first Holy Mass here by Rev. Fr. F. Howell and J. Krafft in the compound of Late Chief Ekpenyong OtuAbasi which is directly opposite the present Church.<br>
                                                That historical First Mass was attended by over one hundred curious people who grew in number as the day grew by. Due to the upsurge in number of worshippers, the venue was moved to a bigger arena courtesy of Late Sir. Chief Frank U. A. Offiong (KSG). It was at this location that the member imbibed the culture of attending morning prayers daily in the absence of a Priest to celebrate morning Masses.<br>
                                                Subsequently, other religious activities continued in the same location until it became obvious that a permanent site was needed to establish a church. Most providentially, this became a reality when Late Mrs. Alice U. A. Offiong, wife of Late Sir. Frank U. A. Offiong (both parents of Late Rev. Fr. Michael Adim U. A. Offiong) donated her farm land for the building of the church.<br>
                                                This development warranted an appeal to Ireland, the home of Late Rev. Fr. Denis O’Hara, for financial assistance to commence the building of the church. With spirited attempts and various contributions by different people, what is now known as St. Charles L’wanga Parish, came into being on March 17, 1976 which was the feast day of Saint Patrick.<br>
                                                As it is the practice in the Catholic church, the Parish first began as an out – station of Sacred Heart Cathedral and later, of Immaculate Conception Parish, Ikot Ansa, Calabar. It was subsequently named St. Charles L’wanga Parish by the Late Archbishop of Calabar, His Grace, Most Rev. Dr. Brian Davis Usanga in honour of St. Charles L’wanga, one of the twenty – two (22) Martyrs from Uganda.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $('#myModal').modal('');
                            </script>
                        </div><!--\.Modal -->


                        <div class="tooltip-content">
                            <div class="modal fade features-modal modal-about" id="myModal40" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-about">
                                    <div class="modal-content modal-about">
                                        <div class="modal-header modal-about" style="background-color: crimson; color: white;">
                                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                                            <h4 class="modal-title modal-about text-center">About St. Charles L'wanga & Companions</h4>
                                        </div>
                                        <div class="modal-body modal-about">
                                            <img src="img/charles.jpg" alt="St. Charles L'wanga Parish" class="img-circle img-responsive center-block">
                                            <p>One of 22 Ugandan martyrs, Charles Lwanga is the patron of youth and
                                                Catholic action in most of tropical Africa. He protected his fellow
                                                pages, aged 13 to 30, from the homosexual demands of the Bagandan ruler,
                                                Mwanga, and encouraged and instructed them in the Catholic faith during
                                                their imprisonment for refusing the ruler’s demands.<br>
                                                Charles first learned of Christ’s teachings from two retainers in the
                                                court of Chief Mawulugungu. While a catechumen, he entered the royal
                                                household as assistant to Joseph Mukaso, head of the court pages.<br>
                                                On the night of Mukaso’s martyrdom for encouraging the African youths to
                                                resist Mwanga, Charles requested and received baptism. Imprisoned with
                                                his friends, Charles’s courage and belief in God inspired them to remain
                                                chaste and faithful.<br>
                                                For his own unwillingness to submit to the immoral acts and his efforts
                                                to safeguard the faith of his friends, Charles was burned to death at
                                                Namugongo on June 3, 1886, by Mwanga’s order.<br> When Pope Paul VI
                                                canonized these 22 martyrs on October 18, 1964, he also made reference
                                                to the Anglican pages martyred for the same reason.<br><br>

                                                <i>Like Charles Lwanga, we are all teachers and witnesses to Christian
                                                    living by the examples of our own lives. We are all called upon to spread
                                                    the word of God, whether by word or deed. By remaining courageous and
                                                    unshakable in our faith during times of great moral and physical temptation,
                                                    we live as Christ lived.</i>

                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $('#myModal').modal('');
                            </script>
                        </div><!--\.Modal -->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- Church front officers -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h3 class="well well-sm">Administrative Structure of the Parish</h3>
                </div>
            </div>
        </div>
        <div class="banner-bottom">
            <div class="inner_w3l_agile_grids">
                <div class="sreen-gallery-cursual">
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/parish_priest1_1.jpg" class="img-responsive" alt="Parish Priest">
                                <h6><strong>Parish Priest <br>(+2348032586300)</strong></h6>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/eneyo.jpg" class="img-responsive" alt="Asst Parish Priest">
                                <h6><strong>Asst Parish Priest <br>(+2348035107953)</strong></h6>
                            </div>
                        </div>
                        
                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/charles9.jpg" class="img-responsive" alt="Asst Parish Priest">
                                <h6><strong>Asst Parish Priest <br>(+234**********)</strong></h6>
                            </div>
                        </div>
                        
                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/charles9.jpg" class="img-responsive" alt="Asst Parish Priest">
                                <h6><strong>Asst Parish Priest <br>(+234**********)</strong></h6>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/catechist1.jpg" class="img-responsive" alt="Catechist">
                                <h6><strong>Catechist <br>(+2348083108777)</strong></h6>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/vice_chairman_pastoral_1.jpg" class="img-responsive" alt="Vice Chairman Pastoral Council">
                                <h6><strong>Vice Chairman Pastoral Council <br>(+2348033361290)</strong></h6>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/charles9.jpg" class="img-responsive" alt="Laity Council President">
                                <h6><strong>Laity Council President <br>(+2348033505099)</strong></h6>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/john.jpg" class="img-responsive" alt="CMO President">
                                <h6><strong>CMO President <br>(+2348023137860)</strong></h6>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/cwo.jpg" class="img-responsive" alt="CWO President">
                                <h6><strong>CWO President <br>(+2348033452833)</strong></h6>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/cyon_president.jpg" class="img-responsive" alt="CYON President">
                                <h6><strong>CYON President <br>(+2348062874353)</strong></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.End of Church front officer -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="well well-sm">Recent Events</h3>
                        <marquee direction="scroll"><h5>We solicit for your support. Reach us using the Parish's email 
                        at Parish Contact below</h5></marquee>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li> 
                                <li data-target="#myCarousel" data-slide-to="6"></li> 
                                <li data-target="#myCarousel" data-slide-to="7"></li> 
                                <li data-target="#myCarousel" data-slide-to="8"></li> 
                                <li data-target="#myCarousel" data-slide-to="9"></li> 
                                <li data-target="#myCarousel" data-slide-to="10"></li>
                                <li data-target="#myCarousel" data-slide-to="11"></li>                           
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/cha2.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/cha1.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/cha.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/cha3.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/cha4.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                
                                
                                <div class="item">
                                    <img src="img/bud.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>Mary League Girls</p>-->
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/bud1.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>Mary League Girls</p>-->
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/bud2.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>Mary League Girls</p>-->
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/bud3.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>Mary League Girls</p>-->
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/bud4.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>National Youth Day 2018</p>-->
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/bud5.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>National Youth Day 2018</p>-->
                                    </div>
                                </div>
                                
                                
                                <div class="item">
                                    <img src="img/bud6.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>National Youth Day 2018</p>-->
                                    </div>
                                </div>             
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.End of Events -->

        <!-- Section for Saint of the week -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="well well-sm">Saint of the week</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 mask">
                    <img class="img-rounded img-responsive" src="img/Merici.jpg" alt="Angela Merici" width="140" height="140">
                    <h5><strong>Angela Merici<br> (1470 - 1540)</strong></h5>
                </div>
                <div class="col-lg-10 col-md-6">
                    <p>
                        By age 26, Angela had lost most of her wealthy Italian family to death. As a Franciscan 
                        tertiary, she performed good works and taught catechism to girls in her home in Desenzano del 
                        Garda. Two visions inspired her to found a congregation dedicated to the religious training of 
                        young women; she began this mission with a school in Brescia. Earlier she had endured an episode 
                        of blindness while on a pilgrimage to the Holy Land and had rejected a papal request to run all 
                        charities in Rome. In 1535, she founded the Ursulines and served as superior until her death. 
                        This mystic, a patron of catechists, reportedly was fascinated from childhood by the legend of 
                        St. Ursula, an early virgin-martyr.
                    </p>
                    
                <p class="text-muted">&copy; Catholic News Services - Angela Merici</p>
                </div>
            </div>
        </div><!-- /.End of Administrative container -->
    </div><!-- /.End of container -->

    <!-- /.Mass schedule and Associations -->
    <div class="col-lg-3 col-md-6 content">
        <div class="row">
                <div class="col-lg-12 col-md-6">
                <div class="text-center">
                    <h4 class="well well-sm">Mass Schedule</h4>
                    <img src="img/eucharist1.jpg" class="img-rounded img-responsive" alt="Eucharist" width="" height="200">
                </div>
            </div><!-- /.End of Mass schedule -->

            <div class="col-lg-12 col-md-6 text-center">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#monday">Monday</a>
                            </h3>
                        </div>
                        <div id="monday" class="panel-collapse collapse in">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am <br><i>(Mass of Human Labour)</i></dd>
                                <!-- <dt>Evening Mass</dt>-->
                                <!-- <dd>6pm</dd>-->                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                <!--Modal -->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#monday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#monday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#monday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#monday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#tuesday">Tuesday</a>
                            </h3>
                        </div>
                        <div id="tuesday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <!--<dt>Evening Mass</dt>-->
                                <!--<dd>6pm</dd>-->                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#tuesday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#tuesday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#tuesday_2nd_reading">2nd Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#tuesday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#wednesday">Wednesday</a>
                            </h3>
                        </div>
                        <div id="wednesday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <dt>Evening Mass</dt>
                                <dd>6pm <br><i>(Healing Mass)</i></dd>                               
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#wednesday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#wednesday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#wednesday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#wednesday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#thursday">Thursday</a>
                            </h3>
                        </div>
                        <div id="thursday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <!--<dt>Evening Mass</dt>-->
                                <!--<dd>6pm</dd>-->                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#thursday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#thursday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#thursday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#thursday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#friday">Friday</a>
                            </h3>
                        </div>
                        <div id="friday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <!--<dt>Evening Mass</dt>-->
                                <!--<dd>6pm</dd>-->                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#friday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#friday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#friday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#friday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#saturday">Saturday</a>
                            </h3>
                        </div>
                        <div id="saturday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <!--<dt>Evening Mass</dt>-->
                                <!--<dd>6pm</dd>-->
                                <dt>Confession</dt>
                                <dd>1 hour before Mass during Adoration<br></dd>
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
                                </dd>
                            </dl>
                        </div>
                    </div>

                    

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#sunday">Sunday</a>
                            </h3>
                        </div>
                        <div id="sunday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6:30am & 9:30am</dd>
                                <dt>Evening Mass</dt>
                                <dd>6pm</dd>                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#sunday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#sunday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#sunday_2nd_reading">2nd Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#sunday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div><!-- /.End of Mass plans -->
            
            <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="text-center">
                    <h3 class="well well-sm">Organization</h3>
                </div>
            </div>

            <div class="col-lg-12 col-md-6 text-center">
                <div class="panel-group" id="accordion2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#cmo">Catholic Men Organisation</a>
                            </h3>
                        </div>
                        <div id="cmo" class="panel-collapse collapse in">
                            <dl>
                                <dt>Date</dt>
                                <dd>3rd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:cmo@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#cwo">Catholic Women Organisation</a>
                            </h3>
                        </div>
                        <div id="cwo" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Last Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:cwo@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#cyon">CYON</a>
                            </h3>
                        </div>
                        <div id="cyon" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Last Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:cyon@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="text-center">
                    <h3 class="well well-sm">Parish Councils</h3>
                </div>
            </div>

            <div class="col-lg-12 col-md-6 text-center">
                <div class="panel-group" id="accordion3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#pastorial-council">Pastoral council</a>
                            </h3>
                        </div>
                        <div id="pastorial-council" class="panel-collapse collapse in">
                            <dl>
                                <dt>Date</dt>
                                <dd>1st Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:pastoral.council@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#laity">Laity Council</a>
                            </h3>
                        </div>
                        <div id="laity" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>1st Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:laity.council@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="text-center">
                    <h3 class="well well-sm">Associations</h3>
                </div>
            </div>

            <div class="col-lg-12 col-md-6 text-center">
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#holy-family">Holy Family</a>
                            </h3>
                        </div>
                        <div id="holy-family" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:holy.family@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-anthony">Saint Anthony</a>
                            </h3>
                        </div>
                        <div id="st-anthony" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Tuesdays</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:stanthony@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-jude">Saint Jude</a>
                            </h3>
                        </div>
                        <div id="st-jude" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Wednesdays</dd>
                                <dt>Time</dt>
                                <dd>4:30pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:stjude@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#cbiu">CBIU</a>
                            </h3>
                        </div>
                        <div id="cbiu" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Sundays & Thursdays</dd>
                                <dt>Time</dt>
                                <dd>4 - 6pm & 5 - 7pm respectively</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:cbiu@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#mass-servers">Mass Servers</a>
                            </h3>
                        </div>
                        <div id="mass-servers" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Saturdays</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:mass.servers@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#nurses-guilds">Nurses Guild</a>
                            </h3>
                        </div>
                        <div id="nurses-guilds" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>3rd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>6pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:nurses.guild@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#lay-readers">Lay Readers</a>
                            </h3>
                        </div>
                        <div id="lay-readers" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Saturdays</dd>
                                <dt>Time</dt>
                                <dd>4:30pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:lay.readers@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#ccrn">Charismatic</a>
                            </h3>
                        </div>
                        <div id="ccrn" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Mondays & Sunday</dd>
                                <dt>Time</dt>
                                <dd>6pm & 4pm respectively</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:charismatic@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#choir-association">Choir Association</a>
                            </h3>
                        </div>
                        <div id="choir-association" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>1st Friday of every month</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:choir.association@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#sacred-heart">Sacred Heart</a>
                            </h3>
                        </div>
                        <div id="sacred-heart" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Thursdays</dd>
                                <dt>Time</dt>
                                <dd>4:30pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:sacred.heart@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#ministers-of-hospitality">Ministers of Hospitality</a>
                            </h3>
                        </div>
                        <div id="ministers-of-hospitality" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>3rd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 9:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:ministers.hospitality@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-vincent-de-paul">St. Vincent De Paul</a>
                            </h3>
                        </div>
                        <div id="st-vincent-de-paul" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Mondays</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:vincent_de_paul@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#mary-league">Mary League</a>
                            </h3>
                        </div>
                        <div id="mary-league" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:mary.league@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#legion-of-mary">Legion of Mary</a>
                            </h3>
                        </div>
                        <div id="legion-of-mary" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Saturdays and Sundays</dd>
                                <dt>Time</dt>
                                <dd>4pm & after 6:30am Mass respectively</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:legion_of_mary@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#fatima">Fatima</a>
                            </h3>
                        </div>
                        <div id="fatima" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Mondays & Wednesdays</dd>
                                <dt>Time</dt>
                                <dd>6am - 12 noon</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:fatima@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#purgatorain-society">Purgatorain Society</a>
                            </h3>
                        </div>
                        <div id="purgatorain-society" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Mondays</dd>
                                <dt>Time</dt>
                                <dd>5 - 6pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:purgatorain.society@stchaleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#amsp">A.M.S.P.</a>
                            </h3>
                        </div>
                        <div id="amsp" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Thursday of every month</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:amsp@stcharleslwanaga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-monica">Saint Monica</a>
                            </h3>
                        </div>
                        <div id="st-monica" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>3rd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:stmonica@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-theresa">Saint Theresa</a>
                            </h3>
                        </div>
                        <div id="st-theresa" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Mondays</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:st_theresa@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-mary">Saint Mary</a>
                            </h3>
                        </div>
                        <div id="st-mary" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>Unknown yet</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:stmary@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#divine-mercy">Divine Mercy</a>
                            </h3>
                        </div>
                        <div id="divine-mercy" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Tuesdays, Thursdays & Fridays</dd>
                                <dt>Time</dt>
                                <dd>3pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:divine_mercy@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#friends-of-st-patrick">Friends of Saint Patrick</a>
                            </h3>
                        </div>
                        <div id="friends-of-st-patrick" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Tuesday of every month</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:friends.of.st.patrick@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#precious-blood">Precious Blood</a>
                            </h3>
                        </div>
                        <div id="precious-blood" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Thursdays</dd>
                                <dt>Time</dt>
                                <dd>11pm - 3am</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:precious.blood@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.End of Parish Associations -->
    </div>
        
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="monday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Monday<br>
                            <h6 class="modal-title modal-about text-center">Hebrew 5:1-10</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>Brothers and Sisters:<br>
                                Every high priest is taken from among men and made their representative before God, to 
                                offer gifts and sacrifices for sins. He is able to deal patiently with the ignorant and 
                                erring, for he himself is beset by weakness and so, for this reason, must make sin 
                                offerings for himself as well as for the people. No one takes this honor upon himself 
                                but only when called by God, just as Aaron was. In the same way, it was not Christ who 
                                glorified himself in becoming high priest, but rather the one who said to him: You are 
                                my Son: this day I have begotten you; just as he says in another place, You are a priest 
                                forever according to the order of Melchizedek. In the days when he was in the Flesh, he 
                                offered prayers and supplications with loud cries and tears to the one who was able to 
                                save him from death, and he was heard because of his reverence. Son though he was, he 
                                learned obedience from what he suffered; and when he was made perfect, he became the 
                                source of eternal salvation for all who obey him.
                            </p>                           
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="monday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Monday<br>
                            <h6 class="modal-title modal-about text-center">Psalm 110:1, 2, 3, 4</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong><br>
                                The LORD said to my Lord: "Sit at my right hand<br>
                                till I make your enemies your footstool."<br>
                                <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong>
                            </p>
                            <p>
                               The scepter of your power the LORD will stretch forth from Zion:<br>
                             "Rule in the midst of your enemies."<br>
                             <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong>
                            </p>    				
                            <p>
                                "Yours is princely power in the day of your birth, in holy splendor;<br>
                                before the daystar, like the dew, I have begotten you."<br>
                                <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong>
                            </p>
                            <p>
                                The LORD has sworn, and he will not repent:<br>
                                "You are a priest forever, according to the order of Melchizedek."<br>
                                <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="monday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Monday</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>Marriage in Catholic Church is referred to as Matrimony. This is the covenant by which a 
                            man and a woman establish themselves a partnership of the whole of life and which is ordered 
                            by its nature to the good of the spouses and the procreation and the education of offspring, 
                            and which has been raised by Christ the Lord to the dignity of a Sacrament between the 
                            baptised.</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="monday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Monday
                            <h6 class="modal-title modal-about text-center">Mark 2:18-22</h6> 
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               The disciples of John and of the Pharisees were accustomed to fast. People came to Jesus 
                               and objected, "Why do the disciples of John and the disciples of the Pharisees fast, but 
                               your disciples do not fast?" Jesus answered them, "Can the wedding guests fast while the 
                               bridegroom is with them? As long as they have the bridegroom with them they cannot fast. 
                               But the days will come when the bridegroom is taken away from them, and then they will 
                               fast on that day. No one sews a piece of unshrunken cloth on an old cloak. If he does, 
                               its fullness pulls away, the new from the old, and the tear gets worse. Likewise, no one 
                               pours new wine into old wineskins. Otherwise, the wine will burst the skins, and both the 
                               wine and the skins are ruined. Rather, new wine is poured into fresh wineskins."
                            </p>                    
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="tuesday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Tuesday
                            <h6 class="modal-title modal-about text-center">Hebrew 6:10-20</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Brothers and Sisters:<br>
                                God is not unjust so as to overlook your work and the love you have demonstrated for his 
                                name by having served and continuing to serve the holy ones. We earnestly desire each of 
                                you to demonstrate the same eagerness for the fulfillment of hope until the end, so that 
                                you may not become sluggish, but imitators of those who, through faith and patience, are 
                                inheriting the promises.
                            </p>
                            <p>
                                When God made the promise to Abraham, since he had no one greater by whom to swear, he 
                                swore by himself, and said, I will indeed bless you and multiply you. And so, after 
                                patient waiting, Abraham obtained the promise. Now, men swear by someone greater than 
                                themselves; for them an oath serves as a guarantee and puts an end to all argument. So 
                                when God wanted to give the heirs of his promise an even clearer demonstration of the 
                                immutability of his purpose, he intervened with an oath, so that by two immutable things, 
                                in which it was impossible for God to lie, we who have taken refuge might be strongly 
                                encouraged to hold fast to the hope that lies before us. This we have as an anchor of 
                                the soul, sure and firm, which reaches into the interior behind the veil, where Jesus 
                                has entered on our behalf as forerunner, becoming high priest forever according to the 
                                order of Melchizedek.
                            </p>                            
                       </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="tuesday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Tuesday
                            <h6 class="modal-title modal-about text-center">Psalm 111:1-2, 4-5, 9 AND 10C</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. The Lord will remember his covenant for ever.</i></strong><br>
                               I will give thanks to the LORD with all my heart<br>
                                in the company and assembly of the just.<br>
                                Great are the works of the LORD,<br> 
                               exquisite in all their delights.<br>								
                               <strong><i>R. The Lord will remember his covenant for ever.</i></strong>
                            </p>
                            <p>
                                He has won renown for his wondrous deeds;<br>
                                gracious and merciful is the LORD.<br>
                             	He has given food to those who fear him;<br>
                             	he will forever be mindful of his covenant.<br>
                                <strong><i>R. The Lord will remember his covenant for ever.</i></strong>
                            </p>
                            <p>
                                He has sent deliverance to his people;<br>
                                he has ratified his covenant forever;<br>
                              	holy and awesome is his name.<br>
                              	His praise endures forever.<br>
							    <strong><i>R. The Lord will remember his covenant for ever.</i></strong>
							</p>
                         </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="tuesday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Tuesday
							<h6 class="modal-title modal-about text-center">Galatians 4:4-7</h6>
							</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>Brothers and sisters:<br>
When the fullness of time had come, God sent his Son,
born of a woman, born under the law, 
to ransom those under the law, 
so that we might receive adoption as sons.
As proof that you are sons, 
God sent the Spirit of his Son into our hearts, 
crying out, "Abba, Father!"
So you are no longer a slave but a son, 
and if a son then also an heir, through God.
</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="tuesday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Tuesday
                            <h6 class="modal-title modal-about text-center">Mark 2:23-28</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                As Jesus was passing through a field of grain on the sabbath, his disciples began to 
                                make a path while picking the heads of grain. At this the Pharisees said to him, "Look, 
                                why are they doing what is unlawful on the sabbath?" He said to them, "Have you never 
                                read what David did when he was in need and he and his companions were hungry? How he 
                                went into the house of God when Abiathar was high priest and ate the bread of offering 
                                that only the priests could lawfully eat, and shared it with his companions?" Then he 
                                said to them, "The sabbath was made for man, not man for the sabbath. That is why the 
                                Son of Man is lord even of the sabbath."
                            </p>                   
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="wednesday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Wednesday
                            <h6 class="modal-title modal-about text-center">Hebrew 7:1-3, 15-17</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Melchizedek, king of Salem and priest of God Most High, met Abraham as he returned from 
                               his defeat of the kings and blessed him. And Abraham apportioned to him a tenth of 
                               everything. His name first means righteous king, and he was also "king of Salem," that 
                               is, king of peace. Without father, mother, or ancestry, without beginning of days or end 
                               of life, thus made to resemble the Son of God, he remains a priest forever.
                            </p>
                            <p>
                                It is even more obvious if another priest is raised up after the likeness of 
                                Melchizedek, who has become so, not by a law expressed in a commandment concerning 
                                physical descent but by the power of a life that cannot be destroyed. For it is 
                                testified:
                            </p>
                            <p>
                                You are a priest forever according to the order of Melchizedek. 
                            </p>                           
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="wednesday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Wednesday
                            <h6 class="modal-title modal-about text-center">Psalm 110:1, 2, 3, 4</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong><br>
                                The LORD said to my Lord: "Sit at my right hand<br>
                                till I make your enemies your footstool."<br>                            
                               <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong>
                            </p>
                            <p>
                                The scepter of your power the LORD will stretch forth from Zion:<br>
                                "Rule in the midst of your enemies."<br>
                                <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong>
						  </p>
						  <p>
						        "Yours is princely power in the day of your birth, in holy splendor;<br>
						        before the daystar, like the dew, I have begotten you."<br>
						        <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong>
						  </p>
						  <p>
						        The LORD has sworn, and he will not repent:<br>
						        "You are a priest forever, according to the order of Melchizedek."<br>
						        <strong><i>R. You are a priest for ever, in the line of Melchizedek.</i></strong>
						  </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="wednesday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Wednesday</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>Marriage in Catholic Church is referred to as Matrimony. This is the covenant by which a 
                            man and a woman establish themselves a partnership of the whole of life and which is ordered 
                            by its nature to the good of the spouses and the procreation and the education of offspring, 
                            and which has been raised by Christ the Lord to the dignity of a Sacrament between the 
                            baptised.</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="wednesday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Wednesday
                            <h6 class="modal-title modal-about text-center">Mark 3:1-6</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                  Jesus entered the synagogue. There was a man there who had a withered hand. They 
                                  watched Jesus closely to see if he would cure him on the sabbath so that they might 
                                  accuse him. He said to the man with the withered hand, "Come up here before us." Then 
                                  he said to the Pharisees, "Is it lawful to do good on the sabbath rather than to do 
                                  evil, to save life rather than to destroy it?" But they remained silent. Looking 
                                  around at them with anger and grieved at their hardness of heart, Jesus said to the 
                                  man, "Stretch out your hand." He stretched it out and his hand was restored. The 
                                  Pharisees went out and immediately took counsel with the Herodians against him to put 
                                  him to death.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="thursday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Thursday
                            <h6 class="modal-title modal-about text-center">Hebrew 7:25—8:6</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus is always able to save those who approach God through him, since he lives forever 
                                to make intercession for them.
                            </p>
                            <p>
                                It was fitting that we should have such a high priest: holy, innocent, undefiled, 
                                separated from sinners, higher than the heavens. He has no need, as did the high priests, 
                                to offer sacrifice day after day, first for his own sins and then for those of the people; 
                                he did that once for all when he offered himself. For the law appoints men subject to 
                                weakness to be high priests, but the word of the oath, which was taken after the law, 
                                appoints a son, who has been made perfect forever.
                            </p>
                            <p>
                                The main point of what has been said is this: we have such a high priest, who has taken 
                                his seat at the right hand of the throne of the Majesty in heaven, a minister of the 
                                sanctuary and of the true tabernacle that the Lord, not man, set up. Now every high 
                                priest is appointed to offer gifts and sacrifices; thus the necessity for this one also 
                                to have something to offer. If then he were on earth, he would not be a priest, since 
                                there are those who offer gifts according to the law. They worship in a copy and shadow 
                                of the heavenly sanctuary, as Moses was warned when he was about to erect the tabernacle. 
                                For God says, "See that you make everything according to the pattern shown you on the 
                                mountain." Now he has obtained so much more excellent a ministry as he is mediator of a 
                                better covenant, enacted on better promises. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="thursday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Thursday
                            <h6 class="modal-title modal-about text-center">Psalm 40:7-8A, 8B-9, 10, 17</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Here am I, Lord; I come to do your will.</i></strong><br>
                                Sacrifice or oblation you wished not,<br>
                                but ears open to obedience you gave me.<br>
                                Burnt offerings or sin-offerings you sought not;<br>
								then said I, "Behold I come."<br>
								<strong><i>R. Here am I, Lord; I come to do your will.</i></strong>
                            </p>
                            <p>
                                "In the written scroll it is prescribed for me,<br>
                                To do your will, O my God, is my delight,<br>
                                and your law is within my heart!"<br>
                                <strong><i>R. Here am I, Lord; I come to do your will.</i></strong>
                            </p>
                            <p>
                                I announced your justice in the vast assembly;<br>
                                I did not restrain my lips, as you, O LORD, know. <br>
                                <strong><i>R. Here am I, Lord; I come to do your will.</i></strong>
                            </p>
                            <p>
                                May all who seek you<br>
                                exult and be glad in you,<br>
                                And may those who love your salvation<br>
                                say ever, "The LORD be glorified."<br>
                                <strong><i>R. Here am I, Lord; I come to do your will.</i></strong>
                            </p>
                        </div>		
                    </div>
                </div>
            </div>
        </div>

        <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="thursday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Thursday
                            <h6 class="modal-title modal-about text-center">1 John 3: 1 - 3 <h5>OR</h5> 1 Corinthian 1:3-9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p><i>No reading
</p>
<p>
<h5>OR</h5>
</p>
<p>
Brothers and sisters:<br>
Grace to you and peace from God our Father
and the Lord Jesus Christ.
</p>
<p>
I give thanks to my God always on your account
for the grace of God bestowed on you in Christ Jesus,
that in him you were enriched in every way,
with all discourse and all knowledge,
as the testimony to Christ was confirmed among you,
so that you are not lacking in any spiritual gift
as you wait for the revelation of our Lord Jesus Christ.
He will keep you firm to the end,
irreproachable on the day of our Lord Jesus Christ.
God is faithful,
and by him you were called to fellowship with his Son, Jesus Christ our Lord.
</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="thursday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Thursday
                            <h6 class="modal-title modal-about text-center">Mark 3:7-12</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus withdrew toward the sea with his disciples. A large number of people followed from 
                                Galilee and from Judea. Hearing what he was doing, a large number of people came to him 
                                also from Jerusalem, from Idumea, from beyond the Jordan, and from the neighborhood of 
                                Tyre and Sidon. He told his disciples to have a boat ready for him because of the crowd, 
                                so that they would not crush him. He had cured many and, as a result, those who had 
                                diseases were pressing upon him to touch him. And whenever unclean spirits saw him they 
                                would fall down before him and shout, "You are the Son of God." He warned them sternly 
                                not to make him known.
                            </p>           
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="friday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Friday
                            <h6 class="modal-title modal-about text-center">Acts 22:3-16 / Acts 9:1-22</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Paul addressed the people in these words: "I am a Jew, born in Tarsus in Cilicia, but 
                               brought up in this city. At the feet of Gamaliel I was educated strictly in our ancestral 
                               law and was zealous for God, just as all of you are today. I persecuted this Way to death, 
                               binding both men and women and delivering them to prison. Even the high priest and the 
                               whole council of elders can testify on my behalf. For from them I even received letters 
                               to the brothers and set out for Damascus to bring back to Jerusalem in chains for 
                               punishment those there as well.
                            </p>
                            <p>
                                "On that journey as I drew near to Damascus, about noon a great light from the sky 
                                suddenly shone around me. I fell to the ground and heard a voice saying to me, 'Saul, 
                                 Saul, why are you persecuting me?' I replied, 'Who are you, sir?' And he said to me, 
                                 'I am Jesus the Nazorean whom you are persecuting.' My companions saw the light but did 
                                 not hear the voice of the one who spoke to me. I asked, 'What shall I do, sir?' The 
                                 Lord answered me, 'Get up and go into Damascus, and there you will be told about 
                                 everything appointed for you to do.' Since I could see nothing because of the 
                                 brightness of that light, I was led by hand by my companions and entered Damascus.
                            </p>
                            <p>
                                "A certain Ananias, a devout observer of the law, and highly spoken of by all the Jews 
                                who lived there, came to me and stood there and said, 'Saul, my brother, regain your 
                                sight.' And at that very moment I regained my sight and saw him. Then he said, 'The God 
                                of our ancestors designated you to know his will, to see the Righteous One, and to hear 
                                the sound of his voice; for you will be his witness before all to what you have seen and 
                                heard. Now, why delay? Get up and have yourself baptized and your sins washed away, 
                                calling upon his name.'"
                            </p>
                            <p>
                               <h3>OR</h3>
                            </p>
                            <p>
                                Saul, still breathing murderous threats against the disciples of the Lord, went to the 
                                high priest and asked him for letters to the synagogues in Damascus, that, if he should 
                                find any men or women who belonged to the Way, he might bring them back to Jerusalem in 
                                chains. On his  journey, as he was nearing Damascus, a light from the sky suddenly 
                                flashed around him. He fell to the ground and heard a voice saying to him, "Saul, Saul, 
                                why are you persecuting me?" He said, "Who are you, sir?" The reply came, "I am Jesus, 
                                whom you are persecuting. Now get up and go into the city and you will be told what you 
                                must do." The men who were traveling with him stood speechless, for they heard the voice 
                                but could see no one. Saul got up from the ground, but when he opened his eyes he could 
                                see nothing; so they led him by the hand and brought him to Damascus. For three days he 
                                was unable to see, and he neither ate nor drank.
                            </p>
                            <p>
                                There was a disciple in Damascus named Ananias, and the Lord said to him in a vision, 
                                Ananias." He answered, "Here I am, Lord." The Lord said to him, "Get up and go to the 
                                street called Straight and ask at the house of Judas for a man from Tarsus named Saul. 
                                He is there praying, and in a vision he has seen a man named Ananias come in and lay his 
                                hands on him, that he may regain his sight." But Ananias replied, "Lord, I have heard 
                                from many sources about this man, what evil things he has done to your holy ones in 
                                Jerusalem. And here he has authority from the chief priests to imprison all who call 
                                upon your name." But the Lord said to him, "Go, for this man is a chosen instrument of 
                                mine to carry my name before Gentiles, kings, and children of Israel, and I will show 
                                him what he will have to suffer for my name." So Ananias went and entered the house; 
                                laying his hands on him, he said, "Saul, my brother, the Lord has sent me, Jesus who 
                                appeared to you on the way by which you came, that you may regain your sight and be 
                                filled with the Holy Spirit." Immediately things like scales fell from his eyes and he 
                                regained his sight. He got up and was baptized, and when he had eaten, he recovered his 
                                strength.
                            </p>
                            <p>
                                He stayed some days with the disciples in Damascus, and he began at once to proclaim 
                                Jesus in the synagogues, that he is the Son of God. All who heard him were astounded and 
                                said, "Is not this the man who in Jerusalem ravaged those who call upon this name, and 
                                came here expressly to take them back in chains to the chief priests?" But Saul grew all 
                                the stronger and confounded the Jews who lived in Damascus, proving that this is the 
                                Christ.
                            </p>                                     
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="friday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Friday
                            <h6 class="modal-title modal-about text-center">Psalm 117:1BC, 2</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Go out to all the world, and tell the Good News.</i></strong><br>
                                Praise the LORD, all you nations;<br>
                                glorify him, all you peoples!<br>
								<strong><i>R. Go out to all the world, and tell the Good News.</i></strong>
                            </p>
                            <p>
                                For steadfast is his kindness toward us,<br>
                                and the fidelity of the LORD endures forever.<br>
                               <strong><i>R. Go out to all the world, and tell the Good News.</i></strong>
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="friday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Friday
                             <h6 class="modal-title modal-about text-center">Romans 5: 5 - 11 / Romans 6: 3 - 9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>Brothers and sisters:<br>
Hope does not disappoint, because the love of God has been poured out into our hearts through the Holy Spirit that has been given to us. For Christ, while we were still helpless, 
died at the appointed time for the ungodly. Indeed, only with difficulty does one die for a just person, though perhaps for a good person one might even find courage to die. 
But God proves his love for us in that while we were still sinners Christ died for us. How much more then, since we are now justified by his Blood, will we be saved through him 
from the wrath. Indeed, if, while we were enemies, we were reconciled to God through the death of his Son, how much more, once reconciled, will we be saved by his life. Not only that, 
but we also boast of God through our Lord Jesus Christ, through whom we have now received reconciliation.
</p>
<p><h1>OR</h1></p>
<p>
Brothers and sisters:<br>
Are you unaware that we who were baptized into Christ Jesus were baptized into his death? We were indeed buried with him through baptism into death, so that, just as Christ was raised 
from the dead by the glory of the Father, we too might live in newness of life.
</p>
<p>
For if we have grown into union with him through a death like his, we shall also be united with him in the resurrection. We know that our old self was crucified with him, so that our sinful body 
might be done away with, that we might no longer be in slavery to sin. For a dead person has been absolved from sin. If, then, we have died with Christ, we believe that we shall also live with him. 
We know that Christ, raised from the dead, dies no more; death no longer has power over him.
</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="friday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Friday
                            <h6 class="modal-title modal-about text-center">Mark 16:15-18</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Jesus appeared to the Eleven and said to them: "Go into the whole world and proclaim the 
                               Gospel to every creature. Whoever believes and is baptized will be saved; whoever does 
                               not believe will be condemned. These signs will accompany those who believe: in my name 
                               they will drive out demons, they will speak new languages. They will pick up serpents 
                               with their hands, and if they drink any deadly thing, it will not harm them. They will 
                               lay hands on the sick, and they will recover."
                         </p>
                    </div>
                </div>
            </div>
        </div>

        <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="saturday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Saturday
                            <h6 class="modal-title modal-about text-center">2 Timothy 1:1-8316 / Titus 1:1-5</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Paul, an Apostle of Christ Jesus by the will of God for the promise of life in Christ 
                               Jesus, to Timothy, my dear child: grace, mercy, and peace from God the Father and Christ 
                               Jesus our Lord.
                            </p>
                            <p>
                                I am grateful to God, whom I worship with a clear conscience as my ancestors did, as I 
                                remember you constantly in my prayers, night and day. I yearn to see you again, 
                                recalling your tears, so that I may be filled with joy, as I recall your sincere faith 
                                that first lived in your grandmother Lois and in your mother Eunice and that I am 
                                confident lives also in you.
                            </p>
                            <p>
                                For this reason, I remind you to stir into flame the gift of God that you have through 
                                the imposition of my hands. For God did not give us a spirit of cowardice but rather of 
                                power and love and self-control. So do not be ashamed of your testimony to our Lord, nor 
                                of me, a prisoner for his sake; but bear your share of hardship for the Gospel with the 
                                strength that comes from God.
                            </p>
                            <p>
                               <h3>OR</h3>
                            </p>
                            <p>
                                Paul, a slave of God and Apostle of Jesus Christ for the sake of the faith of God’s 
                                chosen ones and the recognition of religious truth, in the hope of eternal life that 
                                God, who does not lie, promised before time began, who indeed at the proper time 
                                revealed his word in the proclamation with which I was entrusted by the command of God 
                                our savior, to Titus, my true child in our common faith: grace and peace from God the 
                                Father and Christ Jesus our savior.
                            </p>
                            <p>
                                For this reason I left you in Crete so that you might set right what remains to be done 
                                and appoint presbyters in every town, as I directed you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="saturday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Saturday
                            <h6 class="modal-title modal-about text-center">Psalm 96:1-2A, 2B-3, 7-8A, 10</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Proclaim God's marvelous deeds to all the nations.</i></strong><br>
                               Sing to the LORD a new song;<br>
                               sing to the LORD, all you lands.<br>
							   Sing to the LORD; bless his name.<br>
							   <strong><i>R. Proclaim God's marvelous deeds to all the nations.</i></strong>
                            </p>
                            <p>
                               Announce his salvation, day after day.<br>
                                Tell his glory among the nations;<br>
								among all peoples, his wondrous deeds.<br>
								<strong><i>R. Proclaim God's marvelous deeds to all the nations.</i></strong>
                            </p>
                            <p>
                                Give to the LORD, you families of nations,<br>
                                give to the LORD glory and praise;<br>
                                give to the LORD the glory due his name!<br>
                                <strong><i>R. Proclaim God's marvelous deeds to all the nations.</i></strong>
                            </p>
                            <p>
                                Say among the nations: The LORD is king.<br>
                                He has made the world firm, not to be moved;<br>
                                he governs the peoples with equity.<br>
                                <strong><i>R. Proclaim God's marvelous deeds to all the nations.</i></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="saturday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Saturday</h4>
							<h6 class="modal-title modal-about text-center">Ephesians 1:3-6, 11-12</h6>
                        </div>
                        <div class="modal-body modal-about">
                            <p>Brothers and sisters:<br>
							Blessed be the God and Father of our Lord Jesus Christ,
who has blessed us in Christ
with every spiritual blessing in the heavens,
as he chose us in him, before the foundation of the world,
to be holy and without blemish before him. 
In love he destined us for adoption to himself through Jesus Christ,
in accord with the favor of his will,
for the praise of the glory of his grace
that he granted us in the beloved.
</p>
<p>
In him we were also chosen,
destined in accord with the purpose of the One
who accomplishes all things according to the intention of his will,
so that we might exist for the praise of his glory,
we who first hoped in Christ.
							</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="saturday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Saturday
                            <h6 class="modal-title modal-about text-center">Mark 3:20-21</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Jesus came with his disciples into the house. Again the crowd gathered, making it 
                               impossible for them even to eat. When his relatives heard of this they set out to seize 
                               him, for they said, "He is out of his mind."
                            </p>           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="sunday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Sunday
                            <h6 class="modal-title modal-about text-center">Nehemiah 8:2-4A, 5-6, 8-10</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                 Ezra the priest brought the law before the assembly, which consisted of men, women, and 
                                 those children old enough to understand. Standing at one end of the open place that was 
                                 before the Water Gate, he read out of the book from daybreak till midday, in the 
                                 presence of the men, the women, and those children old enough to understand; and all 
                                 the people listened attentively to the book of the law. Ezra the scribe stood on a 
                                 wooden platform that had been made for the occasion. He opened the scroll so that all 
                                 the people might see it - for he was standing higher up than any of the people; and, as 
                                 he opened it, all the people rose. Ezra blessed the LORD, the great God, and all the 
                                 people, their hands raised high, answered, "Amen, amen!" Then they bowed down and 
                                 prostrated themselves before the LORD, their faces to the ground. Ezra read plainly 
                                 from the book of the law of God, interpreting it so that all could understand what was 
                                 read. Then Nehemiah, that is, His Excellency, and Ezra the priest-scribe and the 
                                 Levites who were instructing the people said to all the people: "Today is holy to the 
                                 LORD your God. Do not be sad, and do not weep" for all the people were weeping as they 
                                 heard the words of the law. He said further: "Go, eat rich foods and drink sweet drinks, 
                                 and allot portions to those who had nothing prepared; for today is holy to our LORD. Do 
                                 not be saddened this day, for rejoicing in the LORD must be your strength!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="sunday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Sunday
                            <h6 class="modal-title modal-about text-center">Psalm 19:8, 9, 10, 15</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Your words, Lord, are Spirit and life.</i></strong><br>
                                The law of the LORD is perfect,<br>
                                refreshing the soul;<br>
								The decree of the LORD is trustworthy,<br>
								giving wisdom to the simple.<br>
								<strong><i>R. Your words, Lord, are Spirit and life.</i></strong>
                            </p>
                            <p>
                                The precepts of the LORD are right,<br>
                                rejoicing the heart;<br>
                                The command of the LORD is clear,<br>
                                enlightening the eye.<br>
                                <strong><i>R. Your words, Lord, are Spirit and life.</i></strong>
                            </p>
                            <p>
                                The fear of the LORD is pure,<br>
                                enduring forever;<br>
                                The ordinances of the LORD are true,<br>
                                all of them just.<br>
                               <strong><i>R. Your words, Lord, are Spirit and life.</i></strong>
						   </p>
						   <p>
						        Let the words of my mouth and the thought of my heart<br>
						        find favor before you,<br>
						       O LORD, my rock and my redeemer.<br>
						       <strong><i>R. Your words, Lord, are Spirit and life.</i></strong>
						   </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="sunday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Sunday
                            <h6 class="modal-title modal-about text-center">1 Corinthians 12:12-30 / 1 Corinthians 12:12-14, 27</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Brothers and sisters:<br>
                               As a body is one though it has many parts, and all the parts of the body, though many, 
                               are one body, so also Christ. For in one Spirit we were all baptized into one body, 
                               whether Jews or Greeks, slaves or free persons, and we were all given to drink of one 
                               Spirit.
                            </p>
                            <p>
                                Now the body is not a single part, but many. If a foot should say, "Because I am not a 
                                hand I do not belong to the body," it does not for this reason belong any less to the 
                                body. Or if an ear should say, "Because I am not an eye I do not belong to the body,"
                            </p>
                            <p>
                                it does not for this reason belong any less to the body. If the whole body were an eye, 
                                where would the hearing be? If the whole body were hearing, where would the sense of 
                                smell be? But as it is, God placed the parts, each one of them, in the body as he 
                                intended. If they were all one part, where would the body be? But as it is, there are 
                                many parts, yet one body. The eye cannot say to the hand, "I do not need you," nor 
                                again the head to the feet, "I do not need you." Indeed, the parts of the body that seem 
                                to be weaker are all the more necessary, and those parts of the body that we consider 
                                less honorable we surround with greater honor, and our less presentable parts are 
                                treated with greater propriety, whereas our more presentable parts do not need this. But 
                                God has so constructed the body as to give greater honor to a part that is without it, 
                                so that there may be no division in the body, but that the parts may have the same 
                                concern for one another.If one part suffers, all the parts suffer with it; if one part 
                                is honored, all the parts share its joy.
                            </p>
                            <p>
                                Now you are Christ's body, and individually parts of it. Some people God has designated 
                                in the church to be, first, apostles; second, prophets; third, teachers; then, mighty 
                                deeds; then gifts of healing, assistance, administration, and varieties of tongues. Are 
                                all apostles? Are all prophets? Are all teachers? Do all work mighty deeds? Do all have 
                                gifts of healing? Do all speak in tongues? Do all interpret?
                            </p>          
                            <p>
                                <h3>OR</h3>
                            </p> 
                            <p>
                                Brothers and sisters:<br>
                                As a body is one though it has many parts, and all the parts of the body, though many, 
                                are one body, so also Christ. For in one Spirit we were all baptized into one body, 
                                whether Jews or Greeks, slaves or free persons,
                            </p>
                            <p>
                                and we were all given to drink of one Spirit. Now the body is not a single part, but 
                                many. You are Christ's body, and individually parts of it.
                            </p>    
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="sunday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Sunday
                            <h6 class="modal-title modal-about text-center">Luke 1:1-4; 4:14-21</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Since many have undertaken to compile a narrative of the events that have been fulfilled 
                                among us, just as those who were eyewitnesses from the beginning and ministers of the 
                                word have handed them down to us, I too have decided, after investigating everything 
                                accurately anew, to write it down in an orderly sequence for you, most excellent 
                                Theophilus, so that you may realize the certainty of the teachings you have received.
                            </p>
                            <p>
                                Jesus returned to Galilee in the power of the Spirit, and news of him spread throughout 
                                the whole region. He taught in their synagogues and was praised by all.
                            </p>
                            <p>
                                He came to Nazareth, where he had grown up, and went according to his custom into the 
                                synagogue on the sabbath day. He stood up to read and was handed a scroll of the prophet 
                                Isaiah. He unrolled the scroll and found the passage where it was written: The Spirit of 
                                the Lord is upon me, because he has anointed me to bring glad tidings to the poor. He 
                                has sent me to proclaim liberty to captives and recovery of sight to the blind, to let 
                                the oppressed go free, and to proclaim a year acceptable to the Lord. Rolling up the 
                                scroll, he handed it back to the attendant and sat down, and the eyes of all in the 
                                synagogue looked intently at him.
                            </p>
                            <p>
                                He said to them,<br>
                                "Today this Scripture passage is fulfilled in your hearing."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        

        
    </div><!-- /.End of Mass schedule and Associations -->
</section>

<!-- Footer -->
<footer>
    <div class="contact text-center" id="contact-us">
        <div class="container">

            <h3>CONTACT</h3>

            <div class="footer-me">
                <div class="col-md-4 footer-me-left">
                    <div class="footer-me-left1">
                        <i class="fa fa-2x fa-book" aria-hidden="true"></i>
                    </div>
                    <div class="footer-me-leftr">
                        <h4>Quote of the week</h4>
                        <p>"Anxiety is the greatest evil that can befall a soul except sin. God commands you to pray, but He forbids you to worry" - St. Francis de Sales</p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-4 footer-me-left">
                    <div class="footer-me-left1">
                        <i class="fa fa-2x fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="footer-me-leftr">
                        <h4>Parish Contact</h4>
                        <p>St. Charles L'wanga Parish, Essien Town, Calabar, Cross River State, Nigeria</p>
                        <a href="mailto:parish.priest@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Send us an email"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-4 footer-me-left">
                    <div class="footer-me-left1">
                        <i class="fa fa-2x fa-wechat" aria-hidden="true"></i>
                    </div>
                    <div class="footer-me-leftr">
                        <h4>Follow Us</h4>
                        <a href="https://www.facebook.com/groups/517035638777289"><i class="text-primary fa fa-facebook-official fa-3x tooltip-viewport-bottom" title="Facebook"></i> </a>
                        <a href="#"><i class="text-primary fa fa-instagram fa-3x tooltip-viewport-bottom" title="Facebook"></i> </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <iframe width="100%" height="200" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=St.%20Charles%20L'wanga%20Parish%2C%20Calabar%2C%20Cross%20River%20State&key=AIzaSyDZftT2s6V3KJmM8XMSU-bPMpDX9mPiXZA" allowfullscreen>
            </iframe><br>
        </div>

        <div class="copyright text-center">
            <p>&copy; Powered by <a href="index.php">St. Charles L'wanga Parish</a> | Designed by <a href="mailto:admin@stcharleslwanga.com.ng">Web Mgt Team</a> </p>
            <!--    <p>&copy; Powered by <a href="index.php">St. Charles L'wanga Parish</a> | Designed by <a href="mailto:admin@stcharleslwanga.com.ng">Web Mgt Team</a> </p>-->
        </div>
    </div>
</footer>

//
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="Boot/boot1/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="Boot/boot1/dist/js/bootstrap.min.js"></script>
<script src="js/firebase.js"></script>

<!-- required js files -->
<link href="CSS/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 4,
            itemsDesktop: [768, 3],
            itemsDesktopSmall: [414, 2],
            lazyLoad: true,
            autoPlay: true,
            navigation: true,
            navigationText: false,
            pagination: true
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $().UItoTop({easingType:'easeOutQuart'});
    });
</script>


<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000)
        });
    });
</script>
</body>
</html>
CHURCH_INDEX_MAIN;
    print $church_index_main;
}

function adduser()
{
    //Make the connection to the database
    $connect = new mysqli(connect_me::$dbhost, connect_me::$dbuser, connect_me::$dbpassword, connect_me::$dbdatabase);
    if ($connect->connect_errno){
        //If there exist an error
//        die('You are having a connection error: ['.$connect->connect_error.']');
        die('This section is still under development');
    }else {
        $email = stripcslashes($_POST["Input_Email"]);//Email
//        echo "Email is: ".$email;

        //Check if the email is already on the database before adding the user
        $select = "SELECT * FROM news WHERE Email = '$email'";
        $query_select = $connect->query($select);
        if ($query_select){
            $count_rows = $query_select->num_rows;

            //Verify if there is a hit
            if ($count_rows==1){
                while ($rowsd = $query_select->fetch_assoc()){
                    $D_email = $rowsd['Email'];
                    header("refresh: 3; url=index.php");
                    echo "<h3>" . $D_email . " already exist on the database. You will hear from us soon.</h3>";
                }

            }else {
                //Add the user
                $date = date("Y-m-d");
//                    echo $id . "<br>";
//                    echo $date . "<br>";
//                    echo $email . "<br>";

//                    //Insert the user into the database
                $insert = "INSERT INTO news(Email, Date_Registered)VALUE ('$email', '$date')";
                if ($connect->query($insert) === TRUE) {
//                    Redirect the user to the index page if insertion is complete
                    header("refresh:3; url=index.php");
                    echo "<h1>Successful subscription</h1>";

                    exit();
                    //Create a tooltip to get details about the user
                } else {
                    header("refresh:3; url=index.php");
                    echo "<h1>Unsuccessful subscription</h1>";

                    exit();
                }
                mysqli_close($connect);
            }
        }

    }
}
?>