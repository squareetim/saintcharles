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
                    <img class="img-rounded img-responsive" src="img/felix.jpg" alt="Felix of Nola" width="140" height="140">
                    <h5><strong>Felix of Nola <br> (died circa 260)</strong></h5>
                </div>
                <div class="col-lg-10 col-md-6">
                    <p>Among 66 saints named Felix, this one was born near Naples, Italy, the son of a Syrian-born Roman 
                    soldier. Felix chose religious over army life and was ordained by St. Maximus of Nola. In 
                    persecutions begun by Emperor Decius in 250, Felix was imprisoned and tortured; legends claim an 
                    angel freed him and a spider web helped him elude recapture. The people of Nola wanted Felix to 
                    succeed Maximus, but Felix declined, instead doing pastoral work from a small farm. His shrine in 
                    Nola became a major pilgrimage center, and he is the patron saint of lost animals and spiders. St. 
                    Paulinus of Nola and Venerable Bede preserved his story.
                </p>
                    
                <p class="text-muted">&copy; Catholic News Services - Marguerite Bourgeoys</p>
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
                            <h6 class="modal-title modal-about text-center">Hebrew 1:1-6</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>Brothers and Sisters:<br>
                                In times past, God spoke in partial and various ways to our ancestors through the prophets; 
                                in these last days, he spoke to us through the Son, whom he made heir of all things and 
                                through whom he created the universe,
                            </p>
                            <p>
                                who is the refulgence of his glory, the very imprint of his being, and who sustains all 
                                things by his mighty word. When he had accomplished purification from sins, he took his seat 
                                at the right hand of the Majesty on high, as far superior to the angels as the name he has 
                                inherited is more excellent than theirs.
                            </p>                         
                            <p>
                                For to which of the angels did God ever say: You are my Son; this day I have begotten 
                                you? Or again: I will be a father to him, and he shall be a Son to me? And again, when 
                                he leads the first born into the world, he says: Let all the angels of God worship him
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
                            <h6 class="modal-title modal-about text-center">Psalm 97:1 AND 2B, 6 AND 7C, 9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Let all his angels worship him.</i></strong><br>
                                The LORD is king; let the earth rejoice;<br>
                                let the many isles be glad.<br>
                                Justice and judgment are the foundation of his throne.<br>
							   <strong><i>R. Let all his angels worship him.</i></strong>
                            </p>
                            <p>
                               The heavens proclaim his justice,<br>
                             and all peoples see his glory.<br>
                                Let all his angels worship him.<br>
                             <strong><i>R. Let all his angels worship him.</i></strong>
                            </p>    				
                            <p>
                                Because you, O LORD, are the Most High over all the earth,<br>
                                exalted far above all gods.<br>
                                <strong><i>R. Let all his angels worship him.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Mark 1:14-20</h6> 
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               After John had been arrested, Jesus came to Galilee proclaiming the Gospel of God: "This 
                               is the time of fulfillment. The Kingdom of God is at hand. Repent, and believe in the 
                               Gospel."
                            </p>
                            <p>
                               As he passed by the Sea of Galilee, he saw Simon and his brother Andrew casting their 
                               nets into the sea; they were fishermen. Jesus said to them, "Come after me, and I will 
                               make you fishers of men." Then they left their nets and followed him. He walked along a 
                               little farther and saw James, the son of Zebedee, and his brother John. They too were in 
                               a boat mending their nets. Then he called them. So they left their father Zebedee in the 
                               boat along with the hired men and followed him.
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
                            <h6 class="modal-title modal-about text-center">Hebrew 2:5-12</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                It was not to angels that God subjected the world to come, of which we are speaking. 
                                Instead, someone has testified somewhere: 
                            </p>
                            <p>
                                What is man that you are mindful of him, or the son of man that you care for him? You 
                                made him for a little while lower than the angels; you crowned him with glory and honor, 
                                subjecting all things under his feet. In "subjecting" all things to him, he left nothing 
                                not "subject to him." Yet at present we do not see "all things subject to him," but we 
                                do see Jesus "crowned with glory and honor" because he suffered death, he who "for a 
                                little while" was made "lower than the angels," that by the grace of God he might taste 
                                death for everyone.
                            </p>
                            <p>
                                For it was fitting that he, for whom and through whom all things exist, in bringing many 
                                children to glory, should make the leader to their salvation perfect through suffering. 
                                He who consecrates and those who are being consecrated all have one origin. Therefore, 
                                he is not ashamed to call them "brothers" saying:
                            </p>
                            <p>
                                I will proclaim your name to my brethren, in the midst of the assembly I will praise you.
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
                            <h6 class="modal-title modal-about text-center">Psalm 8:2AB AND 5, 6-7, 8-9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. You have given your Son rule over the works of your hands.</i></strong><br>
                               O LORD, our Lord,<br>
                                how glorious is your name over all the earth!<br>
                                What is man that you should be mindful of him,<br> 
                               or the son of man that you should care for him?<br>								
                               <strong><i>R. You have given your Son rule over the works of your hands.</i></strong>
                            </p>
                            <p>
                              You have made him little less than the angels,<br>
                             and crowned him with glory and honor.<br>
                             	You have given him rule over the works of your hands,<br>
                             	putting all things under his feet.<br>
                              <strong><i>R. You have given your Son rule over the works of your hands.</i></strong>
                            </p>
                            <p>
                              All sheep and oxen,<br>
                              yes, and the beasts of the field,<br>
                              	The birds of the air, the fishes of the sea,<br>
                              	and whatever swims the paths of the seas.<br>
							<strong><i>R. You have given your Son rule over the works of your hands.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Mark 1:21-28</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus came to Capernaum with his followers, and on the sabbath he entered the synagogue 
                                and taught. The people were astonished at his teaching, for he taught them as one having 
                                authority and not as the scribes. In their synagogue was a man with an unclean spirit; 
                                he cried out, "What have you to do with us, Jesus of Nazareth? Have you come to destroy 
                                us? I know who you are–the Holy One of God!" Jesus rebuked him and said, "Quiet! Come 
                                out of him!" The unclean spirit convulsed him and with a loud cry came out of him. All 
                                were amazed and asked one another, "What is this? A new teaching with authority. He 
                                commands even the unclean spirits and they obey him." His fame spread everywhere 
                                throughout the whole region of Galilee. 
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
                            <h6 class="modal-title modal-about text-center">Hebrew 2:14-18</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Since the children share in blood and Flesh, Jesus likewise shared in them, that through 
                               death he might destroy the one who has the power of death, that is, the Devil, and free 
                               those who through fear of death had been subject to slavery all their life. Surely he did 
                               not help angels but rather the descendants of Abraham; therefore, he had to become like 
                               his brothers and sisters in every way, that he might be a merciful and faithful high 
                               priest before God to expiate the sins of the people. Because he himself was tested 
                               through what he suffered, he is able to help those who are being tested. 
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
                            <h6 class="modal-title modal-about text-center">Psalm 105:1-2, 3-4, 6-7, 8-9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. The Lord remembers his covenant for ever.</i></strong><br>
                                Give thanks to the LORD, invoke his name;<br>
                                make known among the nations his deeds.<br>
                                Sing to him, sing his praise,<br>
                               proclaim all his wondrous deeds.<br>                            
                               <strong><i>R. The Lord remembers his covenant for ever.</i></strong>
                            </p>
                            <p>
                                Glory in his holy name;<br>
                                rejoice, O hearts that seek the LORD!<br>
                                Look to the LORD in his strength;<br>
                                seek to serve him constantly.<br>
                                <strong><i>R. The Lord remembers his covenant for ever.</i></strong>
						  </p>
						  <p>
						        You descendants of Abraham, his servants,<br>
						        sons of Jacob, his chosen ones!<br>
						        He, the LORD, is our God;<br>
						        throughout the earth his judgments prevail.<br>
						        <strong><i>R. The Lord remembers his covenant for ever.</i></strong>
						  </p>
						  <p>
						        He remembers forever his covenant<br>
						        which he made binding for a thousand generations<br>
						        Which he entered into with Abraham<br>
						        and by his oath to Isaac.<br>
						        <strong><i>R. The Lord remembers his covenant for ever.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Mark 1:29-39</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                  On leaving the synagogue Jesus entered the house of Simon and Andrew with James and 
                                  John. Simon's mother-in-law lay sick with a fever. They immediately told him about 
                                  her. He approached, grasped her hand, and helped her up. Then the fever left her and 
                                  she waited on them.
                            </p>               
                            <p>
                                When it was evening, after sunset, they brought to him all who were ill or possessed by 
                                demons. The whole town was gathered at the door. He cured many who were sick with 
                                various diseases, and he drove out many demons, not permitting them to speak because 
                                they knew him.
                            </p>         
                            <p>
                                Rising very early before dawn, he left and went off to a deserted place, where he 
                                prayed. Simon and those who were with him pursued him and on finding him said, "Everyone 
                                is looking for you." He told them, "Let us go on to the nearby villages that I may 
                                preach there also. For this purpose have I come." So he went into their synagogues, 
                                preaching and driving out demons throughout the whole of Galilee.
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
                            <h6 class="modal-title modal-about text-center">Hebrew 3:7-14</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                The Holy Spirit says:<br>
                                Oh, that today you would hear his voice, "Harden not your hearts as at the rebellion in 
                                the day of testing in the desert, where your ancestors tested and tried me and saw my 
                                works for forty years. Because of this I was provoked with that generation and I said, 
                                'They have always been of erring heart, and they do not know my ways.' As I swore in my 
                                wrath, 'They shall not enter into my rest.'" Take care, brothers and sisters, that none 
                                of you may have an evil and unfaithful heart, so as to forsake the living God. Encourage 
                                yourselves daily while it is still "today," so that none of you may grow hardened by the 
                                deceit of sin. We have become partners of Christ if only we hold the beginning of the 
                                reality firm until the end. 
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
                            <h6 class="modal-title modal-about text-center">Psalm 95:6-7C, 8-9, 10-11</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. If today you hear his voice, harden not your hearts.</i></strong><br>
                                Come, let us bow down in worship;<br>
                                let us kneel before the LORD who made us.<br>
                                For he is our God,<br>
								and we are the people he shepherds, the flock he guides.<br>
								<strong><i>R. If today you hear his voice, harden not your hearts.</i></strong>
                            </p>
                            <p>
                                Oh, that today you would hear his voice:<br>
                                "Harden not your hearts as at Meribah,<br>
                                as in the day of Massah in the desert,<br>
							    Where your fathers tempted me;<br>
							    they tested me though they had seen my works."<br>
                                <strong><i>R. If today you hear his voice, harden not your hearts.</i></strong>
                            </p>
                            <p>
                                Forty years I was wearied of that generation;<br>
                                I said: "This people's heart goes astray,<br>
                                they do not know my ways."<br>
						        Therefore I swore in my anger:<br>
						        "They shall never enter my rest."<br>
                                <strong><i>R. If today you hear his voice, harden not your hearts.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Mark 1:40-45</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                              A leper came to him and kneeling down begged him and said, "If you wish, you can make me 
                              clean." Moved with pity, he stretched out his hand, touched the leper, and said to him, "I 
                              do will it. Be made clean." The leprosy left him immediately, and he was made clean. Then, 
                              warning him sternly, he dismissed him at once. Then he said to him, "See that you tell no 
                              one anything, but go, show yourself to the priest and offer for your cleansing what Moses 
                              prescribed; that will be proof for them." The man went away and began to publicize the 
                              whole matter. He spread the report abroad so that it was impossible for Jesus to enter a 
                              town openly. He remained outside in deserted places, and people kept coming to him from 
                              everywhere.
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
                            <h6 class="modal-title modal-about text-center">Hebrew 4:1-5, 11</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Let us be on our guard while the promise of entering into his rest remains, that none of 
                               you seem to have failed. For in fact we have received the Good News just as our ancestors 
                               did. But the word that they heard did not profit them, for they were not united in faith 
                               with those who listened. For we who believed enter into that rest, just as he has said:
                            </p>
                            <p>
                               As I swore in my wrath, "They shall not enter into my rest,"
                            </p>
                            <p>
                               and yet his works were accomplished at the foundation of the world. For he has spoken 
                               somewhere about the seventh day in this manner, And God rested on the seventh day from 
                               all his works; and again, in the previously mentioned place, They shall not enter into my 
                               rest.
                            </p>  
                            <p>
                               Therefore, let us strive to enter into that rest, so that no one may fall after the same 
                               example of disobedience.
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
                            <h6 class="modal-title modal-about text-center">Psalm 78:3 AND 4BC, 6C-7, 8</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Do not forget the works of the Lord!</i></strong><br>
                                What we have heard and know,<br>
                                and what our fathers have declared to us,<br>
								we will declare to the generation to come<br>
								The glorious deeds of the LORD and his strength.<br>
								<strong><i>R. Do not forget the works of the Lord!</i></strong>
                            </p>
                            <p>
                                That they too may rise and declare to their sons<br>
                                that they should put their hope in God,<br>
								And not forget the deeds of God<br>
								but keep his commands.<br>
                               <strong><i>R. Do not forget the works of the Lord!</i></strong>
                            </p>
                            <p>
                               And not be like their fathers,<br>
                               a generation wayward and rebellious,<br>
							   A generation that kept not its heart steadfast<br>
							   nor its spirit faithful toward God.<br>
		                      <strong><i>R. Do not forget the works of the Lord!</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Mark 2:1-12</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               When Jesus returned to Capernaum after some days, it became known that he was at home. 
                               Many gathered together so that there was no longer room for them, not even around the 
                               door, and he preached the word to them. They came bringing to him a paralytic carried by 
                               four men. Unable to get near Jesus because of the crowd, they opened up the roof above 
                               him. After they had broken through, they let down the mat on which the paralytic was 
                               lying. When Jesus saw their faith, he said to him, "Child, your sins are forgiven." Now 
                               some of the scribes were sitting there asking themselves, "Why does this man speak that 
                               way? He is blaspheming. Who but God alone can forgive sins?" Jesus immediately knew in 
                               his mind what they were thinking to themselves, so he said, "Why are you thinking such 
                               things in your hearts? Which is easier, to say to the paralytic, 'Your sins are forgiven,' 
                               or to say, 'Rise, pick up your mat and walk'? But that you may know that the Son of Man 
                               has authority to forgive sins on earth" –he said to the paralytic, "I say to you, rise, 
                               pick up your mat, and go home." He rose, picked up his mat at once, and went away in the 
                               sight of everyone. They were all astounded and glorified God, saying, "We have never seen 
                               anything like this."
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
                            <h6 class="modal-title modal-about text-center">Hebrew 4:12-16</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               The word of God is living and effective, sharper than any two-edged sword, penetrating 
                               even between soul and spirit, joints and marrow, and able to discern reflections and 
                               thoughts of the heart. No creature is concealed from him, but everything is naked and 
                               exposed to the eyes of him to whom we must render an account.
                            </p>
                            <p>
                               Since we have a great high priest who has passed through the heavens, Jesus, the Son of 
                               God, let us hold fast to our confession. For we do not have a high priest who is unable 
                               to sympathize with our weaknesses, but one who has similarly been tested in every way, 
                               yet without sin. So let us confidently approach the throne of grace to receive mercy and 
                               to find grace for timely help.
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
                            <h6 class="modal-title modal-about text-center">Mark 2:13-17</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Jesus went out along the sea. All the crowd came to him and he taught them. As he passed 
                               by, he saw Levi, son of Alphaeus, sitting at the customs post. Jesus said to him, "Follow 
                               me." And he got up and followed Jesus. While he was at table in his house, many tax 
                               collectors and sinners sat with Jesus and his disciples; for there were many who followed 
                               him. Some scribes who were Pharisees saw that Jesus was eating with sinners and tax 
                               collectors and said to his disciples, "Why does he eat with tax collectors and sinners?" 
                               Jesus heard this and said to them, "Those who are well do not need a physician, but the 
                               sick do. I did not come to call the righteous but sinners."
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
                            <h6 class="modal-title modal-about text-center">Isaiah 62:1-5</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                 For Zion's sake I will not be silent, for Jerusalem's sake I will not be quiet, until 
                                 her vindication shines forth like the dawn and her victory like a burning torch.
                        </p>
                        <p>
                                Nations shall behold your vindication, and all the kings your glory; you shall be called 
                                by a new name pronounced by the mouth of the LORD. You shall be a glorious crown in the 
                                hand of the LORD, a royal diadem held by your God. No more shall people call you 
                                "Forsaken, " or your land "Desolate, " but you shall be called "My Delight, " and your 
                                land "Espoused." For the LORD delights in you and makes your land his spouse. As a young 
                                man marries a virgin, your Builder shall marry you; and as a bridegroom rejoices in his 
                                bride so shall your God rejoice in you.
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
            <div class="modal fade features-modal modal-about" id="sunday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Sunday
                            <h6 class="modal-title modal-about text-center">Psalm 96:1-2, 2-3, 7-8, 9-10</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Proclaim his marvelous deeds to all the nations.</i></strong><br>
                                Sing to the LORD a new song;<br>
                                sing to the LORD, all you lands.<br>
								Sing to the LORD; bless his name.<br>
								<strong><i>R. Proclaim his marvelous deeds to all the nations.</i></strong>
                            </p>
                            <p>
                                Announce his salvation, day after day.<br>
                                Tell his glory among the nations;<br>
                                among all peoples, his wondrous deeds.<br>
                                <strong><i>R. Proclaim his marvelous deeds to all the nations.</i></strong>
                            </p>
                            <p>
                                Give to the LORD, you families of nations,<br>
                                give to the LORD glory and praise;<br>
                                give to the LORD the glory due his name!<br>
                               <strong><i>R. Proclaim his marvelous deeds to all the nations.</i></strong>
						   </p>
						   <p>
						        Worship the LORD in holy attire.<br>
						        Tremble before him, all the earth;<br>
						       Say among the nations: The LORD is king.<br>
						       He governs the peoples with equity.<br>
						       <strong><i>R. Proclaim his marvelous deeds to all the nations.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">1 Corinthians 12:4-11</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Brothers and sisters:<br>
                               There are different kinds of spiritual gifts but the same Spirit; there are different 
                               forms of service but the same Lord; there are different workings but the same God who 
                               produces all of them in everyone. To each individual the manifestation of the Spirit is 
                               given for some benefit. To one is given through the Spirit the expression of wisdom; to 
                               another, the expression of knowledge according to the same Spirit;<br>
                               to another, faith by the same Spirit;<br>
                               to another, gifts of healing by the one Spirit;<br>
                               to another, mighty deeds;<br>
                               to another, prophecy;<br>
                               to another, discernment of spirits;<br>
                               to another, varieties of tongues;<br>
                               to another, interpretation of tongues.<br>
                               But one and the same Spirit produces all of these, distributing them individually to each 
                               person as he wishes.
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
                            <h6 class="modal-title modal-about text-center">John 2:1-11</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               There was a wedding at Cana in Galilee, and the mother of Jesus was there. Jesus and his 
                               disciples were also invited to the wedding. When the wine ran short, the mother of Jesus 
                               said to him, "They have no wine." And Jesus said to her, "Woman, how does your concern 
                               affect me? My hour has not yet come." His mother said to the servers, "Do whatever he 
                               tells you." Now there were six stone water jars there for Jewish ceremonial washings, 
                               each holding twenty to thirty gallons. Jesus told the them, "Fill the jars with water." So 
                               they filled them to the brim. Then he told them, "Draw some out now and take it to the 
                               headwaiter." So they took it. And when the headwaiter tasted the water that had become 
                               wine, without knowing where it came from - although the servers who had drawn the water 
                               knew, the headwaiter called the bridegroom and said to him, "Everyone serves good wine 
                               first, and then when people have drunk freely, an inferior one; but you have kept the 
                               good wine until now." Jesus did this as the beginning of his signs at Cana in Galilee and 
                               so revealed his glory, and his disciples began to believe in him.
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