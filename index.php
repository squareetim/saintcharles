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
                    <h6 class="modal-title modal-about text-center"><i>(Mark 3:5)</i></h6>
                </div>
                <div class="modal-body modal-about">
                    <p><h3>Saint Vincent, Deacon and Martyr (Optional Memorial)</h3></p>
                    <p><strong>Grieved at their hardness of heart . . . (Mark 3:5)</strong></p><br>
                    
                   <p>During Mass one Sunday morning, a teenager chatted with the man seated next to him. The teen had 
                   been invited by a friend, and he clearly hadn’t been to church very often. His speech was peppered 
                   with bad language. His mannerisms seemed rough. And he kept speaking at the worst possible times. 
                   Offended by the boy’s actions, the man thought, “Doesn’t he know this is a church?”</p>

                   <p>But something happened that morning at Mass that led this teenager to have a dramatic encounter 
                   with the Lord. He began reading the Scriptures and attending Mass regularly. He met with the pastor 
                   and joined the parish. Soon he became an altar server and began singing in the youth choir. When the 
                   man saw all of this, he felt ashamed for judging this misfit teen harshly.</p>

                   <p>There’s a similar story in today’s Gospel from Mark. During a synagogue liturgy, Jesus healed a 
                   man with a withered hand. But instead of rejoicing at the man’s restoration, some of the leaders 
                   chafed because Jesus had done it on the Sabbath. Like the first man, they missed the deeper meaning 
                   of the Sabbath—that it was a gift from the Lord, a time for healing and refreshment. But unlike the 
                   first man, their hard hearts didn’t soften. On the contrary, Mark tells us that they began plotting 
                   Jesus’ death.</p>

                   <p>So why did the religious leaders get angrier, while the man at Mass had a change of heart? The 
                   difference was that the first man softened his heart when he saw how God had worked in the boy’s 
                   life. All the Jewish leaders could see was an infraction of the Law; they couldn’t look behind the 
                   infraction to see the evidence of God’s mercy and love.</p>
				   
				   <p>How do you react when someone rubs you the wrong way? How welcoming are you to the “misfits” in 
				   your church? Like the man at Mass and the religious leaders in Mark, you have a choice. You can 
				   become annoyed at appearances, or you can look beyond appearances to see a heart being changed. Try 
				   seeing things from God’s perspective. Maybe that person is nearer to him than you think! The Lord 
				   might just use your welcoming, kind words as his instrument of healing.</p>
				    
                    <p><strong><i>“Jesus, take the callous places in my heart and soften them. Fill me with your compassion.”</i></strong></p>
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
                    <img class="img-rounded img-responsive" src="img/Saints_Perpetua_and_Felicitas.jpg" alt="Perpetua and Felicity" width="140" height="140">
                    <h5><strong>Perpetua and Felicity<br> (died 203)</strong></h5>
                </div>
                <div class="col-lg-10 col-md-6">
                    <p>
                        Martyrs in Carthage, now in Tunisia, these young women — the noblewoman Perpetua and the slave Felicity — were among five catechumens who, after refusing to worship the Roman emperor, were arrested and condemned to be thrown to wild beasts. They were baptized in prison, where Felicity also gave birth to a daughter. In the Carthage arena, they were attacked by a beast, which did not kill them, so their throats were cut by a gladiator.
                    </p>
                    
                <p class="text-muted">&copy; Catholic News Services - Perpetua and Felicity</p>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#wednesday_2nd_reading">2nd Reading &raquo;</a> </p>
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
                            <h6 class="modal-title modal-about text-center">Sirach 17:20-24</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                To the penitent God provides a way back, he encourages those who are losing hope and has 
                                chosen for them the lot of truth. Return to him and give up sin, pray to the LORD and make 
                                your offenses few. Turn again to the Most High and away from your sin, hate intensely what 
                                he loathes, and know the justice and judgments of God, Stand firm in the way set before you, 
                                in prayer to the Most High God.
                            </p>
                            <p>
                                Who in the nether world can glorify the Most High in place of the living who offer their 
                                praise? Dwell no longer in the error of the ungodly, but offer your praise before death. 
                                No more can the dead give praise than those who have never lived; You who are alive and 
                                well shall praise and glorify God in his mercies. How great the mercy of the LORD, his 
                                forgiveness of those who return to him!
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
                            <h6 class="modal-title modal-about text-center">Psalm 32:1-2, 5, 6, 7</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Let the just exult and rejoice in the Lord.</i></strong><br>
                                Blessed is he whose fault is taken away,<br>
                                whose sin is covered.<br>
                                Blessed the man to whom the LORD imputes not guilt,<br>
                                in whose spirit there is no guile.<br>
                                <strong><i>R. Let the just exult and rejoice in the Lord.</i></strong>
                            </p>
                            <p>
                               Then I acknowledged my sin to you,<br>
                             my guilt I covered not.<br>
                             I said, "I confess my faults to the LORD,"<br>
                             and you took away the guilt of my sin.<br>
                             <strong><i>R. Let the just exult and rejoice in the Lord.</i></strong>
                            </p>    				
                            <p>
                                For this shall every faithful man pray to you<br>
                                in time of stress.<br>
                                Though deep waters overflow,<br>
                                they shall not reach him.<br>
                                <strong><i>R. Let the just exult and rejoice in the Lord.</i></strong>
                            </p>
                            <p>
                                You are my shelter; from distress you will preserve me;<br>
                                with glad cries of freedom you will ring me round.<br>
                                <strong><i>R. Let the just exult and rejoice in the Lord.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Mark 10:17-27</h6> 
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               As Jesus was setting out on a journey, a man ran up, knelt down before him, and asked him, 
                               "Good teacher, what must I do to inherit eternal life?" Jesus answered him, "Why do you 
                               call me good? No one is good but God alone. You know the commandments: <strong>You shall not kill; 
                               you shall not commit adultery; you shall not steal; you shall not bear false witness; 
                               you shall not defraud; honor your father and your mother.</strong>" He replied and said to him, 
                               "Teacher, all of these I have observed from my youth." Jesus, looking at him, loved him 
                               and said to him, <strong>"You are lacking in one thing. Go, sell what you have, and give to the 
                               poor and you will have treasure in heaven; then come, follow me."</strong> At that statement, his 
                               face fell, and he went away sad, for he had many possessions.
                            </p>
                            <p>
                                Jesus looked around and said to his disciples, "How hard it is for those who have wealth 
                                to enter the Kingdom of God!" The disciples were amazed at his words. So Jesus again 
                                said to them in reply, "Children, how hard it is to enter the Kingdom of God! It is 
                                easier for a camel to pass through the eye of a needle.
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
                            <h6 class="modal-title modal-about text-center">Sirach 35:1-12</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                To keep the law is a great oblation, and he who observes the commandments sacrifices a 
                                peace offering. In works of charity one offers fine flour, and when he gives alms he 
                                presents his sacrifice of praise. To refrain from evil pleases the LORD, and to avoid 
                                injustice is an atonement. Appear not before the LORD empty-handed, for all that you 
                                offer is in fulfillment of the precepts. The just one's offering enriches the altar and 
                                rises as a sweet odor before the Most High. The just one's sacrifice is most pleasing, 
                                nor will it ever be forgotten. In a generous spirit pay homage to the LORD, be not 
                                sparing of freewill gifts. With each contribution show a cheerful countenance, and pay 
                                your tithes in a spirit of joy. Give to the Most High as he has given to you, 
                                generously, according to your means. 
                            </p>
                            <p>
                                For the LORD is one who always repays, and he will give back to you sevenfold. But offer 
                                no bribes, these he does not accept! Trust not in sacrifice of the fruits of extortion. 
                                For he is a God of justice, who knows no favorites.
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
                            <h6 class="modal-title modal-about text-center">Psalm 50:5-6, 7-8, 14 And 23</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. To the upright I will show the saving power of God.</i></strong><br>
                               "Gather my faithful ones before me,<br>
                                those who have made a covenant with me by sacrifice."<br>
                                And the heavens proclaim his justice;<br> 
                               for God himself is the judge.<br>								
                               <strong><i>R. To the upright I will show the saving power of God.</i></strong>
                            </p>
                            <p>
                                "Hear, my people, and I will speak;<br>
                                Israel, I will testify against you;<br>
                             	God, your God, am I.<br>
                             	Not for your sacrifices do I rebuke you,<br>
                             	for your burnt offerings are before me always."<br>
                                <strong><i>R. To the upright I will show the saving power of God.</i></strong>
                            </p>
                            <p>
                                "Offer to God praise as your sacrifice<br>
                                and fulfill your vows to the Most High.<br>
                                He that offers praise as a sacrifice glorifies me;<br>
                              	and to him that goes the right way I will show the salvation of God."<br>
                              	<strong><i>R. To the upright I will show the saving power of God.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Mark 10:28-31</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Peter began to say to Jesus, 'We have given up everything and followed you." Jesus said, 
                                "Amen, I say to you, there is no one who has given up house or brothers or sisters or 
                                mother or father or children or lands for my sake and for the sake of the Gospel who 
                                will not receive a hundred times more now in this present age: houses and brothers and 
                                sisters and mothers and children and lands, with persecutions, and eternal life in the 
                                age to come. But many that are first will be last, and the last will be first."
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
                            <h6 class="modal-title modal-about text-center">Joel 2:12-18</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Even now, says the LORD, return to me with your whole heart, with fasting, and weeping, 
                               and mourning; Rend your hearts, not your garments, and return to the LORD, your God. For 
                               gracious and merciful is he, slow to anger, rich in kindness, and relenting in punishment. 
                               Perhaps he will again relent and leave behind him a blessing, Offerings and libations for 
                               the LORD, your God.
                            </p>
                            <p>
                                Blow the trumpet in Zion! proclaim a fast,  call an assembly; Gather the people, notify 
                                the congregation; Assemble the elders, gather the children and the infants at the breast; 
                                Let the bridegroom quit his room and the bride her chamber. Between the porch and the altar 
                                let the priests, the ministers of the LORD, weep, And say, "Spare, O LORD, your people, 
                                and make not your heritage a reproach, with the nations ruling over them! Why should 
                                they say among the peoples, 'Where is their God?'"
                            </p>
                            <p>
                                Then the LORD was stirred to concern for his land and took pity on his people.
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
                            <h6 class="modal-title modal-about text-center">Psalm 51:3-4, 5-6AB, 12-13, 14 AND 17</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Be merciful, O Lord, for we have sinned.</i></strong><br>
                                Have mercy on me, O God, in your goodness;<br>
                                in the greatness of your compassion wipe out my offense.<br>   
                                Thoroughly wash me from my guilt<br>
                                and of my sin cleanse me.<br>                         
                               <strong><i>R. Be merciful, O Lord, for we have sinned.</i></strong>
                            </p>
                            <p>
                                For I acknowledge my offense,<br>
                                and my sin is before me always:<br>
                                "Against you only have I sinned,<br>
                                and done what is evil in your sight."<br>
                                <strong><i>R. Be merciful, O Lord, for we have sinned.</i></strong>
						  </p>
						  <p>
						        A clean heart create for me, O God,<br>
                                and a steadfast spirit renew within me.<br>
						        Cast me not out from your presence,<br>
                                and your Holy Spirit take not from me.<br>
						        <strong><i>R. Be merciful, O Lord, for we have sinned.</i></strong>
						  </p>
						  <p>
						        Give me back the joy of your salvation,<br>
						        and a willing spirit sustain in me.<br>
                                O Lord, open my lips,<br>
                                and my mouth shall proclaim your praise.<br>
						        <strong><i>R. Be merciful, O Lord, for we have sinned.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">2 Corinthians 5:20—6:2</h6>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Brothers and sisters:<br>
                                We are ambassadors for Christ, as if God were appealing through us. We implore you on 
                                behalf of Christ, be reconciled to God. For our sake he made him to be sin who did not 
                                know sin, so that we might become the righteousness of God in him.
                            </p>
                            <p>
                                Working together, then, we appeal to you not to receive the grace of God in vain.
                            </p>
                            <p>
                                <i>For he says: In an acceptable time I heard you, and on the day of salvation I helped 
                                you.</i>
                            </p>
                            <p>
                                Behold, now is a very acceptable time; behold, now is the day of salvation.
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
            <div class="modal fade features-modal modal-about" id="wednesday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Wednesday
                            <h6 class="modal-title modal-about text-center">Mathew 6:1-6, 16-18</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus said to his disciples:<br>
                                "Take care not to perform righteous deeds in order that people may see them; otherwise, 
                                you will have no recompense from your heavenly Father. When you give alms, do not blow a 
                                trumpet before you, as the hypocrites do in the synagogues and in the streets to win the 
                                praise of others. Amen, I say to you, they have received their reward. But when you give 
                                alms, do not let your left hand know what your right is doing, so that your almsgiving 
                                may be secret. And your Father who sees in secret will repay you.
                            </p>
                            <p>
                                "When you pray, do not be like the hypocrites, who love to stand and pray in the 
                                synagogues and on street corners so that others may see them. Amen, I say to you, they 
                                have received their reward. But when you pray, go to your inner room, close the door, 
                                and pray to your Father in secret. And your Father who sees in secret will repay you.
                            </p>
                            <p>
                                "When you fast, do not look gloomy like the hypocrites. They neglect their appearance, 
                                so that they may appear to others to be fasting. Amen, I say to you, they have received 
                                their reward. But when you fast, anoint your head and wash your face, so that you may 
                                not appear to be fasting, except to your Father who is hidden. And your Father who sees 
                                what is hidden will repay you."
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
                            <h6 class="modal-title modal-about text-center">Deuteronomy 30:15-20</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                "Today I have set before you life and prosperity, death and doom. If you obey the 
                                commandments of the LORD, your God, which I enjoin on you today, loving him, and walking 
                                in his ways, and keeping his commandments, statutes and decrees, you will live and grow 
                                numerous, and the LORD, your God, will bless you in the land you are entering to occupy. 
                                If, however, you turn away your hearts and will not listen, but are led astray and adore 
                                and serve other gods, I tell you now that you will certainly perish; you will not have a 
                                long life on the land that you are crossing the Jordan to enter and occupy. I call 
                                heaven and earth today to witness against you: I have set before you life and death, the 
                                blessing and the curse. Choose life, then, that you and your descendants may live, by 
                                loving the LORD, your God, heeding his voice, and holding fast to him. For that will 
                                mean life for you, a long life for you to live on the land that the LORD swore he would 
                                give to your fathers Abraham, Isaac and Jacob." 
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
                            <h6 class="modal-title modal-about text-center">Psalm 1:1-2, 3, 4 AND 6</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Blessed are they who hope in the Lord.</i></strong><br>
                                Blessed the man who follows not<br>
                                the counsel of the wicked<br>
                                Nor walks in the way of sinners,<br>
								nor sits in the company of the insolent,<br>
                                But delights in the law of the LORD<br>
                                and meditates on his law day and night.<br>
								<strong><i>R. Blessed are they who hope in the Lord.</i></strong>
                            </p>
                            <p>
                                He is like a tree<br>
                                planted near running water,<br>
                                That yields its fruit in due season,<br>
                                and whose leaves never fade.<br>
                                Whatever he does, prospers.<br>
                                <strong><i>R. Blessed are they who hope in the Lord.</i></strong>
                            </p>
                            <p>
                                Not so the wicked, not so;<br>
                                they are like chaff which the wind drives away.<br>
                                For the LORD watches over the way of the just,<br>
                                but the way of the wicked vanishes.<br>
                                <strong><i>R. Blessed are they who hope in the Lord.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Luke 9:22-25</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus said to his disciples:<br>
                                "The Son of Man must suffer greatly and be rejected by the elders, the chief priests, 
                                and the scribes, and be killed and on the third day be raised."
                            </p>
                            <p>
                                Then he said to all, "If anyone wishes to come after me, he must deny himself and take 
                                up his cross daily and follow me. For whoever wishes to save his life will lose it, but 
                                whoever loses his life for my sake will save it. What profit is there for one to gain 
                                the whole world yet lose or forfeit himself?"
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
                            <h6 class="modal-title modal-about text-center">Isaiah 58:1-9A</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Thus says the Lord GOD:<br>
                               Cry out full-throated and unsparingly, lift up your voice like a trumpet blast; Tell my 
                               people their wickedness, and the house of Jacob their sins. They seek me day after day, 
                               and desire to know my ways, Like a nation that has done what is just and not abandoned 
                               the law of their God; They ask me to declare what is due them, pleased to gain access to 
                               God. "Why do we fast, and you do not see it? afflict ourselves, and you take no note of 
                               it?" Lo, on your fast day you carry out your own pursuits, and drive all your laborers. 
                               Yes, your fast ends in quarreling and fighting, striking with wicked claw. Would that 
                               today you might fast so as to make your voice heard on high! Is this the manner of 
                               fasting I wish, of keeping a day of penance: That a man bow his head like a reed and lie 
                               in sackcloth and ashes? Do you call this a fast, a day acceptable to the LORD? This, 
                               rather, is the fasting that I wish: releasing those bound unjustly, untying the thongs of 
                               the yoke; Setting free the oppressed, breaking every yoke; Sharing your bread with the 
                               hungry, sheltering the oppressed and the homeless; Clothing the naked when you see them, 
                               and not turning your back on your own. Then your light shall break forth like the dawn, 
                               and your wound shall quickly be healed; Your vindication shall go before you, and the 
                               glory of the LORD shall be your rear guard. Then you shall call, and the LORD will answer, 
                               you shall cry for help, and he will say: Here I am!
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
                            <h6 class="modal-title modal-about text-center">Psalm 51:3-4, 5-6AB, 18-19</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. A heart contrite and humbled, O God, you will not spurn.</i></strong><br>
                                Have mercy on me, O God, in your goodness;<br>
                                in the greatness of your compassion wipe out my offense.<br>
                                Thoroughly wash me from my guilt<br>
                                and of my sin cleanse me.<br>
								<strong><i>R. A heart contrite and humbled, O God, you will not spurn.</i></strong>
                            </p>
                            <p>
                                For I acknowledge my offense,<br>
                                and my sin is before me always:<br>
                                "Against you only have I sinned,<br>
                                and done what is evil in your sight."<br>
                               <strong><i>R. A heart contrite and humbled, O God, you will not spurn.</i></strong>
                            </p> 
                            <p>
                                For you are not pleased with sacrifices;<br>
                                should I offer a burnt offering, you would not accept it.<br>
                                My sacrifice, O God, is a contrite spirit;<br>
                                a heart contrite and humbled, O God, you will not spurn.<br>
                                <strong><i>R. A heart contrite and humbled, O God, you will not spurn.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Mathew 9:14-15</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               The disciples of John approached Jesus and said, "Why do we and the Pharisees fast much, 
                               but your disciples do not fast?" Jesus answered them, "Can the wedding guests mourn as 
                               long as the bridegroom is with them? The days will come when the bridegroom is taken away 
                               from them, and then they will fast."
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
                            <h6 class="modal-title modal-about text-center">Isaiah 58:9B-14</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Thus says the LORD:<br>
                                If you remove from your midst oppression, false accusation and malicious speech; If you 
                                bestow your bread on the hungry and satisfy the afflicted; Then light shall rise for you 
                                in the darkness, and the gloom shall become for you like midday; Then the LORD will guide 
                                you always and give you plenty even on the parched land. He will renew your strength, and 
                                you shall be like a watered garden, like a spring whose water never fails. The ancient 
                                ruins shall be rebuilt for your sake, and the foundations from ages past you shall raise 
                                up; "Repairer of the breach," they shall call you, "Restorer of ruined homesteads." If 
                                you hold back your foot on the sabbath from following your own pursuits on my holy day; 
                                <strong>If you call the sabbath a delight, and the LORD's holy day honorable; If you honor it by 
                                not following your ways, seeking your own interests, or speaking with malice. Then you 
                                shall delight in the LORD, and I will make you ride on the heights of the earth; I will 
                                nourish you with the heritage of Jacob, your father, for the mouth of the LORD has spoken.</strong>
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
                            <h6 class="modal-title modal-about text-center">Psalm 86:1-2, 3-4, 5-6</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Teach me your way, O Lord, that I may walk in your truth.</i></strong><br>
                                Incline your ear, O LORD; answer me,<br>
                                for I am afflicted and poor.<br>
                                Keep my life, for I am devoted to you;<br>
                                save your servant who trusts in you.<br>
                                You are my God.<br>
							    <strong><i>R. Teach me your way, O Lord, that I may walk in your truth.</i></strong>
                            </p>
                            <p>
                                Have mercy on me, O Lord,<br>
                                for to you I call all the day.<br>
                                Gladden the soul of your servant,<br>
                                for to you, O Lord, I lift up my soul.<br>
								<strong><i>R. Teach me your way, O Lord, that I may walk in your truth.</i></strong>
                            </p>
                            <p>
                                For you, O Lord, are good and forgiving,<br>
                                abounding in kindness to all who call upon you.<br>
                                Hearken, O LORD, to my prayer<br>
                                and attend to the sound of my pleading.<br>
                                <strong><i>R. Teach me your way, O Lord, that I may walk in your truth.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Luke 5:27-32</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus saw a tax collector named Levi sitting at the customs post. He said to him, 
                                "Follow me." And leaving everything behind, he got up and followed him. Then Levi gave 
                                a great banquet for him in his house, and a large crowd of tax collectors and others 
                                were at table with them. The Pharisees and their scribes complained to his disciples, 
                                saying, "Why do you eat and drink with tax collectors and sinners?" Jesus said to them 
                                in reply, "Those who are healthy do not need a physician, but the sick do. I have not 
                                come to call the righteous to repentance but sinners."
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
                            <h6 class="modal-title modal-about text-center">Deuteronomy 26:4-10</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                 Moses spoke to the people, saying:<br>
                                 "The priest shall receive the basket from you and shall set it in front of the altar of 
                                 the LORD, your God. Then you shall declare before the Lord, your God, 'My father was a 
                                 wandering Aramean who went down to Egypt with a small household and lived there as an 
                                 alien. But there he became a nation great, strong, and numerous. When the Egyptians 
                                 maltreated and oppressed us, imposing hard labor upon us, we cried to the LORD, the God 
                                 of our fathers, and he heard our cry and saw our affliction, our toil, and our oppression. 
                                 He brought us out of Egypt with his strong hand and outstretched arm, with terrifying 
                                 power, with signs and wonders; and bringing us into this country, he gave us this land 
                                 flowing with milk and honey. Therefore, I have now brought you the first-fruits of the 
                                 products of the soil which you, O LORD, have given me.' And having set them before the 
                                 Lord, your God, you shall bow down in his presence."
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
                            <h6 class="modal-title modal-about text-center">Psalm 91:1-2, 10-11, 12-13, 14-15</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Be with me, Lord, when I am in trouble.</i></strong><br>
                                You who dwell in the shelter of the Most High,<br>
                                who abide in the shadow of the Almighty,<br>
                                say to the LORD, "My refuge and fortress,<br>
                                my God in whom I trust."<br>
								<strong><i>R. Be with me, Lord, when I am in trouble.</i></strong>
                            </p>
                            <p>
                                No evil shall befall you,<br>
                                nor shall affliction come near your tent,<br>
                                For to his angels he has given command about you,<br>
                                that they guard you in all your ways.<br>
                                <strong><i>R. Be with me, Lord, when I am in trouble.</i></strong>
                            </p>
                            <p>
                                Upon their hands they shall bear you up,<br>
                                lest you dash your foot against a stone.<br>
                                You shall tread upon the asp and the viper;<br>
                                you shall trample down the lion and the dragon.<br>
                                <strong><i>R. Be with me, Lord, when I am in trouble.</i></strong>
						   </p>
						   <p>
						        Because he clings to me, I will deliver him;<br>
                                I will set him on high because he acknowledges my name.<br>
                                He shall call upon me, and I will answer him;<br>
                                I will be with him in distress;<br>
                                I will deliver him and glorify him.<br>
						       <strong><i>R. Be with me, Lord, when I am in trouble.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Romans 10:8-13</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Brothers and sisters:<br>
                               What does Scripture say? The word is near you, in your mouth and in your heart that is, 
                               the word of faith that we preach, for, if you confess with your mouth that Jesus is Lord 
                               and believe in your heart that God raised him from the dead, you will be saved. For one 
                               believes with the heart and so is justified, and one confesses with the mouth and so is 
                               saved. For the Scripture says, No one who believes in him will be put to shame. For there 
                               is no distinction between Jew and Greek; the same Lord is Lord of all, enriching all who 
                               call upon him. For "everyone who calls on the name of the Lord will be saved."
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
                            <h6 class="modal-title modal-about text-center">Luke 4:1-13</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Filled with the Holy Spirit, Jesus returned from the Jordan and was led by the Spirit 
                                into the desert for forty days, to be tempted by the devil. He ate nothing during those 
                                days, and when they were over he was hungry. The devil said to him, "If you are the Son 
                                of God, command this stone to become bread." Jesus answered him, "It is written, One 
                                does not live on bread alone." Then he took him up and showed him all the kingdoms of 
                                the world in a single instant. The devil said to him, "I shall give to you all this 
                                power and glory; for it has been handed over to me, and I may give it to whomever I wish. 
                                All this will be yours, if you worship me." Jesus said to him in reply, "It is written: 
                                You shall worship the Lord, your God, and him alone shall you serve." Then he led him to 
                                Jerusalem, made him stand on the parapet of the temple, and said to him, "If you are the 
                                Son of God, throw yourself down from here, for it is written: He will command his angels 
                                concerning you, to guard you, and: With their hands they will support you, lest you dash 
                                your foot against a stone." Jesus said to him in reply, "It also says, You shall not put 
                                the Lord, your God, to the test." When the devil had finished every temptation, he 
                                departed from him for a time.
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