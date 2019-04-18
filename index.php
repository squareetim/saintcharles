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
                    <img class="img-rounded img-responsive" src="img/Conrad_of_Parzham.jpg" alt="Conrad of Parzham" width="140" height="140">
                    <h5><strong>Conrad of Parzham<br> (1818-1894)</strong></h5>
                </div>
                <div class="col-lg-10 col-md-6">
                    <p>
                        Born in Bavaria, in Germany, Conrad Birndorfer was the youngest of nine children of pious farmers. Even as a youth, he had a strong devotion to Our Lady. At age 16, after his parents died, he combined running the family farm with a life of prayer and charity. He joined the Capuchins as a lay brother in 1849 and made solemn vows in 1852. For 40 years, he was the doorkeeper at the famous Bavarian shrine of Our Lady of Altotting where he counseled thousands of pilgrims, helped care for abandoned children and practiced exceptional humility.
                    </p>
                    
                <p class="text-muted">&copy; Catholic News Services - Conrad of Parzham</p>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#thursday_2nd_reading">2nd Reading &raquo;</a> </p>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#friday_2nd_reading">2nd Reading &raquo;</a> </p>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_2nd_reading">2nd Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_res_psalm1">Responsorial Psalm &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_3rd_reading">3rd Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_res_psalm2">Responsorial Psalm &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_4th_reading">4th Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_res_psalm3">Responsorial Psalm &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_5th_reading">5th Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_res_psalm4">Responsorial Psalm &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_6th_reading">6th Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_res_psalm5">Responsorial Psalm &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_7th_reading">7th Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_res_psalm6">Responsorial Psalm &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#epistle">Epistle &raquo;</a> </p>
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
                            <h6 class="modal-title modal-about text-center">Isaiah 42:1-7</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Here is my servant whom I uphold, my chosen one with whom I am pleased, Upon whom I have put my Spirit; he shall bring forth justice to the nations, Not crying out, not shouting, not making his voice heard in the street. A bruised reed he shall not break, and a smoldering wick he shall not quench, Until he establishes justice on the earth; the coastlands will wait for his teaching.
                            </p>
                            <p>
                                Thus says God, the LORD, who created the heavens and stretched them out, who spreads out the earth with its crops, Who gives breath to its people and spirit to those who walk on it: I, the LORD, have called you for the victory of justice, I have grasped you by the hand; I formed you, and set you as a covenant of the people, a light for the nations, To open the eyes of the blind, to bring out prisoners from confinement, and from the dungeon, those who live in darkness.
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
                            <h6 class="modal-title modal-about text-center">Psalm 27:1, 2, 3, 13-14</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. The Lord is my light and my salvation.</i></strong><br>
                                The LORD is my light and my salvation;<br>
                                 whom should I fear?<br> 
                                 The LORD is my life's refuge;<br> 
                                 of whom should I be afraid?<br>
                                <strong><i>R. The Lord is my light and my salvation.</i></strong>
                            </p>
                            <p>
                               TWhen evildoers come at me<br> 
                               to devour my flesh,<br> 
                               My foes and my enemies<br> 
                               themselves stumble and fall.<br>
                             <strong><i>R. The Lord is my light and my salvation.</i></strong>
                            </p>    				
                            <p>
                                Though an army encamp against me,<br> 
                                my heart will not fear;<br> 
                                Though war be waged upon me,<br> 
                                even then will I trust.<br>
                                <strong><i>R. The Lord is my light and my salvation.</i></strong>
                            </p>
                            <p>
                                believe that I shall see the bounty of the LORD<br> 
                                in the land of the living.<br> 
                                Wait for the LORD with courage;<br> 
                                be stouthearted, and wait for the LORD.<br>
                                <strong><i>R. The Lord is my light and my salvation.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">John 12:1-11</h6> 
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Six days before Passover Jesus came to Bethany, where Lazarus was, whom Jesus had raised from the dead. They gave a dinner for him there, and Martha served, while Lazarus was one of those reclining at table with him. Mary took a liter of costly perfumed oil made from genuine aromatic nard and anointed the feet of Jesus and dried them with her hair; the house was filled with the fragrance of the oil. Then Judas the Iscariot, one of his disciples, and the one who would betray him, said, "Why was this oil not sold for three hundred days' wages and given to the poor?" He said this not because he cared about the poor but because he was a thief and held the money bag and used to steal the contributions. So Jesus said, "Leave her alone. Let her keep this for the day of my burial. You always have the poor with you, but you do not always have me."
                            </p>
                            <p>
                                The large crowd of the Jews found out that he was there and came, not only because of him, but also to see Lazarus, whom he had raised from the dead. And the chief priests plotted to kill Lazarus too, because many of the Jews were turning away and believing in Jesus because of him.
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
                            <h6 class="modal-title modal-about text-center">Isaiah 49:1-6</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Hear me, O islands, listen, O distant peoples. The LORD called me from birth, from my mother's womb he gave me my name. He made of me a sharp-edged sword and concealed me in the shadow of his arm. He made me a polished arrow, in his quiver he hid me. You are my servant, he said to me, Israel, through whom I show my glory.
                            </p>
                            <p>
                                Though I thought I had toiled in vain, and for nothing, uselessly, spent my strength, Yet my reward is with the LORD, my recompense is with my God. For now the LORD has spoken who formed me as his servant from the womb, That Jacob may be brought back to him and Israel gathered to him; And I am made glorious in the sight of the LORD, and my God is now my strength! It is too little, he says, for you to be my servant, to raise up the tribes of Jacob, and restore the survivors of Israel; I will make you a light to the nations, that my salvation may reach to the ends of the earth.
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
                            <h6 class="modal-title modal-about text-center">Psalm 71:1-2, 3-4A, 5AB-6AB, 15 AND 17</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. I will sing of your salvation.</i></strong><br>
                               In you, O LORD, I take refuge;<br> 
                               let me never be put to shame.<br> 
                               In your justice rescue me, and deliver me;<br> 
                               incline your ear to me, and save me.<br>								
                               <strong><i>R. I will sing of your salvation.</i></strong>
                            </p>
                            <p>
                                Be my rock of refuge,<br> 
                                a stronghold to give me safety,<br> 
                                for you are my rock and my fortress.<br> 
                                O my God, rescue me from the hand of the wicked.<br>
                                <strong><i>R. I will sing of your salvation.</i></strong>
                            </p>
                            <p>
                                For you are my hope, O LORD;<br> 
                                my trust, O God, from my youth.<br> 
                                On you I depend from birth;<br> 
                                from my mother's womb you are my strength.<br>
                              	<strong><i>R. I will sing of your salvation.</i></strong>
							</p>
							<p>
							    My mouth shall declare your justice,<br>
							    day by day your salvation.<br> 
							    O God, you have taught me from my youth,<br> 
							    and till the present I proclaim your wondrous deeds.<br>
							    <strong><i>R. I will sing of your salvation.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">John 13:21-33, 36-38</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Reclining at table with his disciples, Jesus was deeply troubled and testified, "Amen, amen, I say to you, one of you will betray me." The disciples looked at one another, at a loss as to whom he meant. One of his disciples, the one whom Jesus loved, was reclining at Jesus' side. So Simon Peter nodded to him to find out whom he meant. He leaned back against Jesus' chest and said to him, "Master, who is it?" Jesus answered, "It is the one to whom I hand the morsel after I have dipped it." So he dipped the morsel and took it and handed it to Judas, son of Simon the Iscariot. After Judas took the morsel, Satan entered him. So Jesus said to him, "What you are going to do, do quickly." Now none of those reclining at table realized why he said this to him. Some thought that since Judas kept the money bag, Jesus had told him, "Buy what we need for the feast," or to give something to the poor. So Judas took the morsel and left at once. And it was night.
                            </p>                   
                            <p>
                                When he had left, Jesus said, "Now is the Son of Man glorified, and God is glorified in him. If God is glorified in him, God will also glorify him in himself, and he will glorify him at once. My children, I will be with you only a little while longer. You will look for me, and as I told the Jews, 'Where I go you cannot come,' so now I say it to you."
                            </p>
                            <p>
                                Simon Peter said to him, "Master, where are you going?" Jesus answered him, "Where I am going, you cannot follow me now, though you will follow later." Peter said to him, "Master, why can I not follow you now? I will lay down my life for you." Jesus answered, "Will you lay down your life for me? Amen, amen, I say to you, the cock will not crow before you deny me three times."
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
                            <h6 class="modal-title modal-about text-center">Isaiah 50:4-9A</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               The Lord GOD has given me a well-trained tongue, That I might know how to speak to the weary a word that will rouse them. Morning after morning he opens my ear that I may hear; And I have not rebelled, have not turned back. I gave my back to those who beat me, my cheeks to those who plucked my beard; My face I did not shield from buffets and spitting.
                            </p>
                            <p>
                                The Lord GOD is my help, therefore I am not disgraced; I have set my face like flint, knowing that I shall not be put to shame. He is near who upholds my right; if anyone wishes to oppose me, let us appear together. Who disputes my right? Let him confront me. See, the Lord GOD is my help; who will prove me wrong?
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
                            <h6 class="modal-title modal-about text-center">Psalm 69:8-10, 21-22, 31 AND 33-34</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Lord, in your great love, answer me.</i></strong><br>
                                For your sake I bear insult,<br> 
                                and shame covers my face.<br> 
                                I have become an outcast to my brothers,<br> 
                                a stranger to my mother's sons,<br> 
                                because zeal for your house consumes me,<br> 
                                and the insults of those who blaspheme you fall upon me.<br>                        
                               <strong><i>R. Lord, in your great love, answer me.</i></strong>
                            </p>
                            <p>
                                Insult has broken my heart, and I am weak,<br> 
                                I looked for sympathy, but there was none;<br> 
                                for consolers, not one could I find.<br> 
                                Rather they put gall in my food,<br> 
                                and in my thirst they gave me vinegar to drink.<br>
                                <strong><i>R. Lord, in your great love, answer me.</i></strong>
						  </p>
						  <p>
						        I will praise the name of God in song,<br> 
						        and I will glorify him with thanksgiving:<br> 
						        "See, you lowly ones, and be glad;<br> 
						        you who seek God, may your hearts revive!<br> 
						        For the LORD hears the poor,<br> 
						        and his own who are in bonds he spurns not."<br>
						        <strong><i>R. Lord, in your great love, answer me.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Mathew 26:14-25</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                One of the Twelve, who was called Judas Iscariot, went to the chief priests and said, "What are you willing to give me if I hand him over to you?" They paid him thirty pieces of silver, and from that time on he looked for an opportunity to hand him over.
                            </p>
                            <p>
                                On the first day of the Feast of Unleavened Bread, the disciples approached Jesus and said, "Where do you want us to prepare for you to eat the Passover?" He said, "Go into the city to a certain man and tell him, 'The teacher says, AMy appointed time draws near; in your house I shall celebrate the Passover with my disciples."'" The disciples then did as Jesus had ordered, and prepared the Passover.
                            </p>
                            <p>
                                When it was evening, he reclined at table with the Twelve. And while they were eating, he said, "Amen, I say to you, one of you will betray me." Deeply distressed at this, they began to say to him one after another, "Surely it is not I, Lord?" He said in reply, "He who has dipped his hand into the dish with me is the one who will betray me. The Son of Man indeed goes, as it is written of him, but woe to that man by whom the Son of Man is betrayed. It would be better for that man if he had never been born."
                            </p>
                            <p>
                                Then Judas, his betrayer, said in reply, "Surely it is not I, Rabbi?" He answered, "You have said so."
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
                            <h6 class="modal-title modal-about text-center">Isaiah 61:1-3A, 6A, 8B-9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                The Spirit of the Lord GOD is upon me, because the LORD has anointed me; He has sent me to bring glad tidings to the lowly, to heal the brokenhearted, To proclaim liberty to the captives and release to the prisoners, To announce a year of favor from the LORD and a day of vindication by our God, to comfort all who mourn; To place on those who mourn in Zion a diadem instead of ashes, To give them oil of gladness in place of mourning, a glorious mantle instead of a listless spirit.
                            </p>
                            <p>
                                You yourselves shall be named priests of the LORD, ministers of our God shall you be called.
                            </p>
                            <p>
                                I will give them their recompense faithfully, a lasting covenant I will make with them. Their descendants shall be renowned among the nations, and their offspring among the peoples; All who see them shall acknowledge them as a race the LORD has blessed.
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
                            <h6 class="modal-title modal-about text-center">Psalm 89:21-22, 25 AND 27</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. For ever I will sing the goodness of the Lord.</i></strong><br>
                                "I have found David, my servant;<br> 
                                with my holy oil I have anointed him.<br> 
                                That my hand may always be with him;<br> 
                                and that my arm may make him strong."<br>
								<strong><i>R. For ever I will sing the goodness of the Lord.</i></strong>
                            </p>
                            <p>
                                "My faithfulness and my mercy shall be with him;<br>
                                and through my name shall his horn be exalted.<br> 
                                He shall say of me, 'You are my father,<br> 
                                my God, the Rock, my savior!'"<br>
                                <strong><i>R. For ever I will sing the goodness of the Lord.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Revelation 1:5-8</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                [Grace to you and peace] from Jesus Christ, who is the faithful witness, the firstborn of the dead and ruler of the kings of the earth. To him who loves us and has freed us from our sins by his Blood, who has made us into a Kingdom, priests for his God and Father, to him be glory and power forever and ever. Amen.                           
                            </p>
                            <p>
                                Behold, he is coming amid the clouds, and every eye will see him, even those who pierced him. All the peoples of the earth will lament him. Yes. Amen.
                            </p>
                            <p>
                                "I am the Alpha and the Omega," says the Lord God, "the one who is and who was and who is to come, the Almighty."
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
                            <h6 class="modal-title modal-about text-center">Luke 4:16-21</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus came to Nazareth, where he had grown up, and went according to his custom into the synagogue on the sabbath day. He stood up to read and was handed a scroll of the prophet Isaiah. He unrolled the scroll and found the passage where it was written:
                            </p>
                            <p>
                                <i>The Spirit of the Lord is upon me, because he has anointed me to bring glad tidings to the poor. He has sent me to proclaim liberty to captives and recovery of sight to the blind, to let the oppressed go free, and to proclaim a year acceptable to the Lord.</i>
                            </p>           
                            <p>
                                Rolling up the scroll, he handed it back to the attendant and sat down, and the eyes of all in the synagogue looked intently at him. He said to them, "Today this Scripture passage is fulfilled in your hearing."
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
                            <h6 class="modal-title modal-about text-center">Isaiah 52:13—53:12</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               See, my servant shall prosper, he shall be raised high and greatly exalted. Even as many were amazed at himC so marred was his look beyond human semblance and his appearance beyond that of the sons of manC so shall he startle many nations, because of him kings shall stand speechless; for those who have not been told shall see, those who have not heard shall ponder it.
                            </p>                                     
                            <p>
                                Who would believe what we have heard? To whom has the arm of the LORD been revealed? He grew up like a sapling before him, like a shoot from the parched earth; there was in him no stately bearing to make us look at him, nor appearance that would attract us to him. He was spurned and avoided by people, a man of suffering, accustomed to infirmity, one of those from whom people hide their faces, spurned, and we held him in no esteem.
                            </p>
                            <p>
                                Yet it was our infirmities that he bore, our sufferings that he endured, while we thought of him as stricken, as one smitten by God and afflicted. But he was pierced for our offenses, crushed for our sins; upon him was the chastisement that makes us whole, by his stripes we were healed. We had all gone astray like sheep, each following his own way; but the LORD laid upon him the guilt of us all.
                            </p>
                            <p>
                                Though he was harshly treated, he submitted and opened not his mouth; like a lamb led to the slaughter or a sheep before the shearers, he was silent and opened not his mouth. Oppressed and condemned, he was taken away, and who would have thought any more of his destiny? When he was cut off from the land of the living, and smitten for the sin of his people, a grave was assigned him among the wicked and a burial place with evildoers, though he had done no wrong nor spoken any falsehood. But the LORD was pleased to crush him in infirmity.
                            </p>
                            <p>
                                If he gives his life as an offering for sin, he shall see his descendants in a long life, and the will of the LORD shall be accomplished through him.
                            </p>
                            <p>
                                Because of his affliction he shall see the light in fullness of days; through his suffering, my servant shall justify many, and their guilt he shall bear. Therefore I will give him his portion among the great, and he shall divide the spoils with the mighty, because he surrendered himself to death and was counted among the wicked; and he shall take away the sins of many, and win pardon for their offenses.
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
                            <h6 class="modal-title modal-about text-center">Psalm 31:2, 6, 12-13, 15-16, 17, 25</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Father, into your hands I commend my spirit.</i></strong><br>
                                In you, O LORD, I take refuge;<br> 
                                let me never be put to shame.<br> 
                                In your justice rescue me.<br> 
                                Into your hands I commend my spirit;<br> 
                                you will redeem me, O LORD, O faithful God.<br>
								<strong><i>R. Father, into your hands I commend my spirit.</i></strong>
                            </p>
                            <p>
                                For all my foes I am an object of reproach,<br> 
                                a laughingstock to my neighbors, and a dread to my friends;<br> 
                                they who see me abroad flee from me.<br> 
                                I am forgotten like the unremembered dead;<br> 
                                I am like a dish that is broken.<br>
                               <strong><i>R. Father, into your hands I commend my spirit.</i></strong>
                            </p> 
                            <p>
                                But my trust is in you, O LORD;<br> 
                                I say, "You are my God.<br> 
                                In your hands is my destiny; rescue me<br> 
                                from the clutches of my enemies and my persecutors."<br>
                                <strong><i>R. Father, into your hands I commend my spirit.</i></strong>
                            </p>                           
                            <p>
                                Let your face shine upon your servant;<br> 
                                save me in your kindness.<br> 
                                Take courage and be stouthearted,<br> 
                                all you who hope in the LORD.<br>
                                <strong><i>R. Father, into your hands I commend my spirit.</i></strong>
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
                             <h6 class="modal-title modal-about text-center">Hebrew 4:14-16; 5:7-9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Brothers and sisters:<br>
                                Since we have a great high priest who has passed through the heavens, Jesus, the Son of God, let us hold fast to our confession. For we do not have a high priest who is unable to sympathize with our weaknesses, but one who has similarly been tested in every way, yet without sin. So let us confidently approach the throne of grace to receive mercy and to find grace for timely help.
                            </p>
                            <p>
                                In the days when Christ was in the flesh, he offered prayers and supplications with loud cries and tears to the one who was able to save him from death, and he was heard because of his reverence. Son though he was, he learned obedience from what he suffered; and when he was made perfect, he became the source of eternal salvation for all who obey him.
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
                            <h6 class="modal-title modal-about text-center">John 18:1-19:42</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Jesus went out with his disciples across the Kidron valley to where there was a garden, into which he and his disciples entered. Judas his betrayer also knew the place, because Jesus had often met there with his disciples. So Judas got a band of soldiers and guards from the chief priests and the Pharisees and went there with lanterns, torches, and weapons. Jesus, knowing everything that was going to happen to him, went out and said to them, "Whom are you looking for?" They answered him, "Jesus the Nazorean." He said to them, "I AM." Judas his betrayer was also with them. When he said to them, "I AM, " they turned away and fell to the ground. So he again asked them, "Whom are you looking for?" They said, "Jesus the Nazorean." Jesus answered, "I told you that I AM. So if you are looking for me, let these men go."
                            </p>
                            <p>
                                This was to fulfill what he had said, "I have not lost any of those you gave me." Then Simon Peter, who had a sword, drew it, struck the high priest's slave, and cut off his right ear. The slave's name was Malchus. Jesus said to Peter, "Put your sword into its scabbard. Shall I not drink the cup that the Father gave me?"
                            </p>
                            <p>
                                So the band of soldiers, the tribune, and the Jewish guards seized Jesus, bound him, and brought him to Annas first. He was the father-in-law of Caiaphas, who was high priest that year. It was Caiaphas who had counseled the Jews that it was better that one man should die rather than the people.
                            </p>
                            <p>
                                Simon Peter and another disciple followed Jesus. Now the other disciple was known to the high priest, and he entered the courtyard of the high priest with Jesus. But Peter stood at the gate outside. So the other disciple, the acquaintance of the high priest, went out and spoke to the gatekeeper and brought Peter in. Then the maid who was the gatekeeper said to Peter, "You are not one of this man's disciples, are you?" He said, "I am not." Now the slaves and the guards were standing around a charcoal fire that they had made, because it was cold, and were warming themselves. Peter was also standing there keeping warm.
                            </p>
                            <p>
                                The high priest questioned Jesus about his disciples and about his doctrine. Jesus answered him, "I have spoken publicly to the world. I have always taught in a synagogue or in the temple area where all the Jews gather, and in secret I have said nothing. Why ask me? Ask those who heard me what I said to them. They know what I said." When he had said this, one of the temple guards standing there struck Jesus and said, "Is this the way you answer the high priest?" Jesus answered him, "If I have spoken wrongly, testify to the wrong; but if I have spoken rightly, why do you strike me?" Then Annas sent him bound to Caiaphas the high priest.
                            </p>
                            <p>
                                Now Simon Peter was standing there keeping warm. And they said to him, "You are not one of his disciples, are you?" He denied it and said, "I am not." One of the slaves of the high priest, a relative of the one whose ear Peter had cut off, said, "Didn't I see you in the garden with him?" Again Peter denied it. And immediately the cock crowed.
                            </p>
                            <p>
                                Then they brought Jesus from Caiaphas to the praetorium. It was morning. And they themselves did not enter the praetorium, in order not to be defiled so that they could eat the Passover. So Pilate came out to them and said, "What charge do you bring against this man?" They answered and said to him, "If he were not a criminal, we would not have handed him over to you." At this, Pilate said to them, "Take him yourselves, and judge him according to your law." The Jews answered him, "We do not have the right to execute anyone, " in order that the word of Jesus might be fulfilled that he said indicating the kind of death he would die. So Pilate went back into the praetorium and summoned Jesus and said to him, "Are you the King of the Jews?" Jesus answered, "Do you say this on your own or have others told you about me?" Pilate answered, "I am not a Jew, am I? Your own nation and the chief priests handed you over to me. What have you done?" Jesus answered, "My kingdom does not belong to this world. If my kingdom did belong to this world, my attendants would be fighting to keep me from being handed over to the Jews. But as it is, my kingdom is not here." So Pilate said to him, "Then you are a king?" Jesus answered, "You say I am a king. For this I was born and for this I came into the world, to testify to the truth. Everyone who belongs to the truth listens to my voice." Pilate said to him, "What is truth?"
                            </p>
                            <p>
                                When he had said this, he again went out to the Jews and said to them, "I find no guilt in him. But you have a custom that I release one prisoner to you at Passover. Do you want me to release to you the King of the Jews?" They cried out again, "Not this one but Barabbas!" Now Barabbas was a revolutionary.
                            </p>
                            <p>
                                Then Pilate took Jesus and had him scourged. And the soldiers wove a crown out of thorns and placed it on his head, and clothed him in a purple cloak, and they came to him and said, "Hail, King of the Jews!" And they struck him repeatedly. Once more Pilate went out and said to them, "Look, I am bringing him out to you, so that you may know that I find no guilt in him." So Jesus came out, wearing the crown of thorns and the purple cloak. And he said to them, "Behold, the man!" When the chief priests and the guards saw him they cried out, "Crucify him, crucify him!" Pilate said to them, "Take him yourselves and crucify him. I find no guilt in him." The Jews answered, "We have a law, and according to that law he ought to die, because he made himself the Son of God." Now when Pilate heard this statement, he became even more afraid, and went back into the praetorium and said to Jesus, "Where are you from?" Jesus did not answer him. So Pilate said to him, "Do you not speak to me? Do you not know that I have power to release you and I have power to crucify you?" Jesus answered him, "You would have no power over me if it had not been given to you from above. For this reason the one who handed me over to you has the greater sin." Consequently, Pilate tried to release him; but the Jews cried out, "If you release him, you are not a Friend of Caesar. Everyone who makes himself a king opposes Caesar."
                            </p>
                            <p>
                                When Pilate heard these words he brought Jesus out and seated him on the judge's bench in the place called Stone Pavement, in Hebrew, Gabbatha. It was preparation day for Passover, and it was about noon. And he said to the Jews, "Behold, your king!" They cried out, "Take him away, take him away! Crucify him!" Pilate said to them, "Shall I crucify your king?" The chief priests answered, "We have no king but Caesar." Then he handed him over to them to be crucified.
                            </p>
                            <p>
                                So they took Jesus, and, carrying the cross himself, he went out to what is called the Place of the Skull, in Hebrew, Golgotha. There they crucified him, and with him two others, one on either side, with Jesus in the middle. Pilate also had an inscription written and put on the cross. It read, "Jesus the Nazorean, the King of the Jews." Now many of the Jews read this inscription, because the place where Jesus was crucified was near the city; and it was written in Hebrew, Latin, and Greek. So the chief priests of the Jews said to Pilate, "Do not write 'The King of the Jews,' but that he said, 'I am the King of the Jews'." Pilate answered, "What I have written, I have written."
                            </p>
                            <p>
                                When the soldiers had crucified Jesus, they took his clothes and divided them into four shares, a share for each soldier. They also took his tunic, but the tunic was seamless, woven in one piece from the top down. So they said to one another, "Let's not tear it, but cast lots for it to see whose it will be, " in order that the passage of Scripture might be fulfilled that says: They divided my garments among them, and for my vesture they cast lots. This is what the soldiers did. Standing by the cross of Jesus were his mother and his mother's sister, Mary the wife of Clopas, and Mary of Magdala. When Jesus saw his mother and the disciple there whom he loved he said to his mother, "Woman, behold, your son." Then he said to the disciple, "Behold, your mother." And from that hour the disciple took her into his home.
                            </p>
                            <p>
                                After this, aware that everything was now finished, in order that the Scripture might be fulfilled, Jesus said, "I thirst." There was a vessel filled with common wine. So they put a sponge soaked in wine on a sprig of hyssop and put it up to his mouth. When Jesus had taken the wine, he said, "It is finished." And bowing his head, he handed over the spirit.
                            </p>
                            <p>
                                <strong><i>Here all kneel and pause for a short time.</i></strong>
                            </p>
                            <p>
                                Now since it was preparation day, in order that the bodies might not remain on the cross on the sabbath, for the sabbath day of that week was a solemn one, the Jews asked Pilate that their legs be broken and that they be taken down. So the soldiers came and broke the legs of the first and then of the other one who was crucified with Jesus. But when they came to Jesus and saw that he was already dead, they did not break his legs, but one soldier thrust his lance into his side, and immediately blood and water flowed out. An eyewitness has testified, and his testimony is true; he knows that he is speaking the truth, so that you also may come to believe. For this happened so that the Scripture passage might be fulfilled: Not a bone of it will be broken. And again another passage says: They will look upon him whom they have pierced.
                            </p>
                            <p>
                                After this, Joseph of Arimathea, secretly a disciple of Jesus for fear of the Jews, asked Pilate if he could remove the body of Jesus. And Pilate permitted it. So he came and took his body. Nicodemus, the one who had first come to him at night, also came bringing a mixture of myrrh and aloes weighing about one hundred pounds. They took the body of Jesus and bound it with burial cloths along with the spices, according to the Jewish burial custom. Now in the place where he had been crucified there was a garden, and in the garden a new tomb, in which no one had yet been buried. So they laid Jesus there because of the Jewish preparation day; for the tomb was close by.
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
                            <h6 class="modal-title modal-about text-center">Genesis 1:1—2:2 / Genesis 1:1, 26-31A</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                In the beginning, when God created the heavens and the earth, the earth was a formless wasteland, and darkness covered the abyss, while a mighty wind swept over the waters.
                            </p>                            
                            <p>
                                Then God said, "Let there be light," and there was light. God saw how good the light was. God then separated the light from the darkness. God called the light "day," and the darkness he called "night." Thus evening came, and morning followed - the first day.
                            </p>
                            <p>
                                Then God said, "Let there be a dome in the middle of the waters, to separate one body of water from the other." And so it happened: God made the dome, and it separated the water above the dome from the water below it. God called the dome "the sky." Evening came, and morning followed - the second day.
                            </p>
                            <p>
                                Then God said, "Let the water under the sky be gathered into a single basin, so that the dry land may appear." And so it happened: the water under the sky was gathered into its basin, and the dry land appeared. God called the dry land "the earth, " and the basin of the water he called "the sea." God saw how good it was. Then God said, "Let the earth bring forth vegetation: every kind of plant that bears seed and every kind of fruit tree on earth that bears fruit with its seed in it." And so it happened: the earth brought forth every kind of plant that bears seed and every kind of fruit tree on earth that bears fruit with its seed in it. God saw how good it was. Evening came, and morning followed - the third day.
                            </p>
                            <p>
                                Then God said: "Let there be lights in the dome of the sky, to separate day from night. Let them mark the fixed times, the days and the years, and serve as luminaries in the dome of the sky, to shed light upon the earth." And so it happened: God made the two great lights, the greater one to govern the day, and the lesser one to govern the night; and he made the stars. God set them in the dome of the sky, to shed light upon the earth, to govern the day and the night, and to separate the light from the darkness. God saw how good it was. Evening came, and morning followed - the fourth day.
                            </p>
                            <p>
                                Then God said, "Let the water teem with an abundance of living creatures, and on the earth let birds fly beneath the dome of the sky." And so it happened: God created the great sea monsters and all kinds of swimming creatures with which the water teems, and all kinds of winged birds. God saw how good it was, and God blessed them, saying, "Be fertile, multiply, and fill the water of the seas; and let the birds multiply on the earth." Evening came, and morning followed - the fifth day.
                            </p>
                            <p>
                                Then God said, "Let the earth bring forth all kinds of living creatures: cattle, creeping things, and wild animals of all kinds." And so it happened: God made all kinds of wild animals, all kinds of cattle, and all kinds of creeping things of the earth. God saw how good it was. Then God said: "Let us make man in our image, after our likeness. Let them have dominion over the fish of the sea, the birds of the air, and the cattle, and over all the wild animals and all the creatures that crawl on the ground." God created man in his image; in the image of God he created him; male and female he created them. God blessed them, saying: "Be fertile and multiply; fill the earth and subdue it. Have dominion over the fish of the sea, the birds of the air, and all the living things that move on the earth." God also said: "See, I give you every seed-bearing plant all over the earth and every tree that has seed-bearing fruit on it to be your food; and to all the animals of the land, all the birds of the air, and all the living creatures that crawl on the ground, I give all the green plants for food." And so it happened. God looked at everything he had made, and he found it very good. Evening came, and morning followed—the sixth day. Thus the heavens and the earth and all their array were completed. Since on the seventh day God was finished with the work he had been doing, he rested on the seventh day from all the work he had undertaken.
                            </p>
                            <p>
                                <h3 class="text-center">OR</h3>
                            </p>
                            <p>
                                In the beginning, when God created the heavens and the earth, God said: "Let us make man in our image, after our likeness. Let them have dominion over the fish of the sea, the birds of the air, and the cattle, and over all the wild animals and all the creatures that crawl on the ground." God created man in his image; in the image of God he created him; male and female he created them. God blessed them, saying: "Be fertile and multiply; fill the earth and subdue it. Have dominion over the fish of the sea, the birds of the air, and all the living things that move on the earth." God also said: "See, I give you every seed-bearing plant all over the earth and every tree that has seed-bearing fruit on it to be your food; and to all the animals of the land, all the birds of the air, and all the living creatures that crawl on the ground, I give all the green plants for food." And so it happened. God looked at everything he had made, and found it very good.
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
                            <h6 class="modal-title modal-about text-center">Psalm 104:1-2, 5-6, 10, 12, 13-14, 24, 35 / Psalm 33:4-5, 6-7, 12-13, 20 AND 22</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Lord, send out your Spirit, and renew the face of the earth.</i></strong><br>
                                Bless the LORD, O my soul!<br> 
                                O LORD, my God, you are great indeed!<br> 
                                You are clothed with majesty and glory,<br> 
                                robed in light as with a cloak.<br>
							    <strong><i>R. Lord, send out your Spirit, and renew the face of the earth.</i></strong>
                            </p>
                            <p>
                                You fixed the earth upon its foundation,<br>
                                not to be moved forever;<br> 
                                with the ocean, as with a garment, you covered it;<br> 
                                above the mountains the waters stood.<br>
								<strong><i>R. Lord, send out your Spirit, and renew the face of the earth.</i></strong>
                            </p>
                            <p>
                                You send forth springs into the watercourses<br> 
                                that wind among the mountains.<br> 
                                Beside them the birds of heaven dwell;<br> 
                                from among the branches they send forth their song.<br>
                                <strong><i>R. Lord, send out your Spirit, and renew the face of the earth.</i></strong>
                            </p>
                            <p>
                                You water the mountains from your palace;<br> 
                                the earth is replete with the fruit of your works.<br> 
                                You raise grass for the cattle,<br> 
                                and vegetation for man's use,<br> 
                                Producing bread from the earth.<br>
                                <strong><i>R. Lord, send out your Spirit, and renew the face of the earth.</i></strong>
                            </p>
                            <p>
                                How manifold are your works, O LORD!<br> 
                                In wisdom you have wrought them all-<br> 
                                the earth is full of your creatures.<br> 
                                Bless the LORD, O my soul! Alleluia.<br>
                                <strong><i>R. Lord, send out your Spirit, and renew the face of the earth.</i></strong>
                            </p>
                            <p>
                                <h3 class="text-center">OR</h3>
                            </p>
                            <p>
                                <strong><i>R. The earth is full of the goodness of the Lord.</i></strong><br>
                                Upright is the word of the LORD,<br> 
                                and all his works are trustworthy.<br> 
                                He loves justice and right;<br> 
                                of the kindness of the LORD the earth is full.<br>
                                <strong><i>R. The earth is full of the goodness of the Lord.</i></strong>
                            </p>
                            <p>
                                By the word of the LORD the heavens were made;<br> 
                                by the breath of his mouth all their host.<br> 
                                He gathers the waters of the sea as in a flask;<br> 
                                in cellars he confines the deep.<br>
                                <strong><i>R. The earth is full of the goodness of the Lord.</i></strong>
                            </p>
                            <p>
                                Blessed the nation whose God is the LORD,<br> 
                                the people he has chosen for his own inheritance.<br> 
                                From heaven the LORD looks down;<br> 
                                he sees all mankind.<br>
                                <strong><i>R. The earth is full of the goodness of the Lord.</i></strong>
                            </p>
                            <p>
                                Our soul waits for the LORD,<br> 
                                who is our help and our shield.<br> 
                                May your kindness, O LORD, be upon us<br> 
                                who have put our hope in you.<br>
                                <strong><i>R. The earth is full of the goodness of the Lord.</i></strong>
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
							<h6 class="modal-title modal-about text-center">Genesis 22:1-18 / Genesis 22:1-2, 9A, 10-13, 15-18</h6>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                God put Abraham to the test. He called to him, "Abraham!" "Here I am, " he replied. Then God said: "Take your son Isaac, your only one, whom you love, and go to the land of Moriah. There you shall offer him up as a holocaust on a height that I will point out to you." Early the next morning Abraham saddled his donkey, took with him his son Isaac and two of his servants as well, and with the wood that he had cut for the holocaust, set out for the place of which God had told him.
                            </p>
                            <p>
                                On the third day Abraham got sight of the place from afar. Then he said to his servants: "Both of you stay here with the donkey, while the boy and I go on over yonder. We will worship and then come back to you." Thereupon Abraham took the wood for the holocaust and laid it on his son Isaac's shoulders, while he himself carried the fire and the knife. As the two walked on together, Isaac spoke to his father Abraham: "Father!" Isaac said. "Yes, son, " he replied. Isaac continued, "Here are the fire and the wood, but where is the sheep for the holocaust?" "Son," Abraham answered, "God himself will provide the sheep for the holocaust." Then the two continued going forward.
							</p>
							<p>
							    When they came to the place of which God had told him, Abraham built an altar there and arranged the wood on it. Next he tied up his son Isaac, and put him on top of the wood on the altar. Then he reached out and took the knife to slaughter his son. But the LORD's messenger called to him from heaven, "Abraham, Abraham!" "Here I am!" he answered. "Do not lay your hand on the boy," said the messenger. "Do not do the least thing to him. I know now how devoted you are to God, since you did not withhold from me your own beloved son." As Abraham looked about, he spied a ram caught by its horns in the thicket. So he went and took the ram and offered it up as a holocaust in place of his son. Abraham named the site Yahweh-yireh; hence people now say, AOn the mountain the LORD will see."
							</p>
							<p>
							    Again the LORD's messenger called to Abraham from heaven and said: "I swear by myself, declares the LORD, that because you acted as you did in not withholding from me your beloved son, I will bless you abundantly and make your descendants as countless as the stars of the sky and the sands of the seashore; your descendants shall take possession of the gates of their enemies, and in your descendants all the nations of the earth shall find blessingC all this because you obeyed my command."
							</p>
							<p>
							    <h3>OR</h3>
							</p>
							<p>
							    God put Abraham to the test. He called to him, "Abraham!" "Here I am, " he replied. Then God said: "Take your son Isaac, your only one, whom you love, and go to the land of Moriah. There you shall offer him up as a holocaust on a height that I will point out to you."
							</p>
							<p>
							    When they came to the place of which God had told him, Abraham built an altar there and arranged the wood on it. Then he reached out and took the knife to slaughter his son. But the LORD's messenger called to him from heaven, "Abraham, Abraham!" "Here I am, " he answered. "Do not lay your hand on the boy, " said the messenger. "Do not do the least thing to him. I know now how devoted you are to God, since you did not withhold from me your own beloved son." As Abraham looked about, he spied a ram caught by its horns in the thicket. So he went and took the ram and offered it up as a holocaust in place of his son.
							</p>
							<p>
							    Again the LORD's messenger called to Abraham from heaven and said: "I swear by myself, declares the LORD, that because you acted as you did in not withholding from me your beloved son, I will bless you abundantly and make your descendants as countless as the stars of the sky and the sands of the seashore; your descendants shall take possession of the gates of their enemies, and in your descendants all the nations of the earth shall find blessingC all this because you obeyed my command."
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
            <div class="modal fade features-modal modal-about" id="saturday_res_psalm1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Saturday
                            <h6 class="modal-title modal-about text-center">Psalm 16:5, 8, 9-10, 11</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. You are my inheritance, O Lord.</i></strong><br>
                                O LORD, my allotted portion and my cup,<br> 
                                you it is who hold fast my lot.<br> 
                                I set the LORD ever before me;<br> 
                                with him at my right hand I shall not be disturbed.<br>
							    <strong><i>R. You are my inheritance, O Lord.</i></strong>
                            </p>
                            <p>
                                Therefore my heart is glad and my soul rejoices,<br> 
                                my body, too, abides in confidence;<br> 
                                because you will not abandon my soul to the netherworld,<br> 
                                nor will you suffer your faithful one to undergo corruption.<br>
								<strong><i>R. You are my inheritance, O Lord.</i></strong>
                            </p>
                            <p>
                                You will show me the path to life,<br> 
                                fullness of joys in your presence,<br> 
                                the delights at your right hand forever.<br>
                                <strong><i>R. You are my inheritance, O Lord.</i></strong>
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
            <div class="modal fade features-modal modal-about" id="saturday_3rd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">3rd Reading - Saturday</h4>
							<h6 class="modal-title modal-about text-center">Exodus 14:15-15:1</h6>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                The LORD said to Moses, "Why are you crying out to me? Tell the Israelites to go forward. And you, lift up your staff and, with hand outstretched over the sea, split the sea in two, that the Israelites may pass through it on dry land. But I will make the Egyptians so obstinate that they will go in after them. Then I will receive glory through Pharaoh and all his army, his chariots and charioteers. The Egyptians shall know that I am the LORD, when I receive glory through Pharaoh and his chariots and charioteers."
                            </p>
                            <p>
                                The angel of God, who had been leading Israel's camp, now moved and went around behind them. The column of cloud also, leaving the front, took up its place behind them, so that it came between the camp of the Egyptians and that of Israel. But the cloud now became dark, and thus the night passed without the rival camps coming any closer together all night long. Then Moses stretched out his hand over the sea, and the LORD swept the sea with a strong east wind throughout the night and so turned it into dry land. When the water was thus divided, the Israelites marched into the midst of the sea on dry land, with the water like a wall to their right and to their left.
							</p>
							<p>
							    The Egyptians followed in pursuit; all Pharaoh's horses and chariots and charioteers went after them right into the midst of the sea. In the night watch just before dawn the LORD cast through the column of the fiery cloud upon the Egyptian force a glance that threw it into a panic; and he so clogged their chariot wheels that they could hardly drive. With that the Egyptians sounded the retreat before Israel, because the LORD was fighting for them against the Egyptians.
							</p>
							<p>
							    Then the LORD told Moses, AStretch out your hand over the sea, that the water may flow back upon the Egyptians, upon their chariots and their charioteers." So Moses stretched out his hand over the sea, and at dawn the sea flowed back to its normal depth. The Egyptians were fleeing head on toward the sea, when the LORD hurled them into its midst. As the water flowed back, it covered the chariots and the charioteers of Pharaoh's whole army which had followed the Israelites into the sea. Not a single one of them escaped. But the Israelites had marched on dry land through the midst of the sea, with the water like a wall to their right and to their left. Thus the LORD saved Israel on that day from the power of the Egyptians. When Israel saw the Egyptians lying dead on the seashore and beheld the great power that the LORD had shown against the Egyptians, they feared the LORD and believed in him and in his servant Moses.
							</p>
							<p>
							    Then Moses and the Israelites sang this song to the LORD: I will sing to the LORD, for he is gloriously triumphant; horse and chariot he has cast into the sea.
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
            <div class="modal fade features-modal modal-about" id="saturday_res_psalm2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Saturday
                            <h6 class="modal-title modal-about text-center">Exodus 15:1-2, 3-4, 5-6, 17-18</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Let us sing to the Lord; he has covered himself in glory.</i></strong><br>
                                I will sing to the LORD, for he is gloriously triumphant;<br> 
                                horse and chariot he has cast into the sea.<br> 
                                My strength and my courage is the LORD,<br> 
                                and he has been my savior.<br> 
                                He is my God, I praise him;<br> 
                                the God of my father, I extol him.<br>
							    <strong><i>R. Let us sing to the Lord; he has covered himself in glory.</i></strong>
                            </p>
                            <p>
                                The LORD is a warrior,<br> 
                                LORD is his name!<br> 
                                Pharaoh's chariots and army he hurled into the sea;<br> 
                                the elite of his officers were submerged in the Red Sea.<br>
								<strong><i>R. Let us sing to the Lord; he has covered himself in glory.</i></strong>
                            </p>
                            <p>
                                The flood waters covered them,<br> 
                                they sank into the depths like a stone.<br> 
                                Your right hand, O LORD, magnificent in power,<br> 
                                your right hand, O LORD, has shattered the enemy.<br>
                                <strong><i>R. Let us sing to the Lord; he has covered himself in glory.</i></strong>
                            </p>
                            <p>
                                You brought in the people you redeemed<br> 
                                and planted them on the mountain of your inheritance<br> 
                                the place where you made your seat, O LORD,<br> 
                                the sanctuary, LORD, which your hands established.<br> 
                                The LORD shall reign forever and ever.<br>
                                <strong><i>R. Let us sing to the Lord; he has covered himself in glory.</i></strong>
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
            <div class="modal fade features-modal modal-about" id="saturday_4th_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">4th Reading - Saturday</h4>
							<h6 class="modal-title modal-about text-center">Isaiah 54:5-14</h6>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                The One who has become your husband is your Maker; his name is the LORD of hosts; your redeemer is the Holy One of Israel, called God of all the earth. The LORD calls you back, like a wife forsaken and grieved in spirit, a wife married in youth and then cast off, says your God. For a brief moment I abandoned you, but with great tenderness I will take you back. In an outburst of wrath, for a moment I hid my face from you; but with enduring love I take pity on you, says the LORD, your redeemer. This is for me like the days of Noah, when I swore that the waters of Noah should never again deluge the earth; so I have sworn not to be angry with you, or to rebuke you. Though the mountains leave their place and the hills be shaken, my love shall never leave you nor my covenant of peace be shaken, says the LORD, who has mercy on you. O afflicted one, storm-battered and unconsoled, I lay your pavements in carnelians, and your foundations in sapphires; I will make your battlements of rubies, your gates of carbuncles, and all your walls of precious stones. All your children shall be taught by the LORD, and great shall be the peace of your children. In justice shall you be established, far from the fear of oppression, where destruction cannot come near you.
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
            <div class="modal fade features-modal modal-about" id="saturday_res_psalm3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Saturday
                            <h6 class="modal-title modal-about text-center">Psalm 30:2, 4, 5-6, 11-12, 13</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. I will praise you, Lord, for you have rescued me.</i></strong><br>
                                I will extol you, O LORD, for you drew me clear<br> 
                                and did not let my enemies rejoice over me.<br> 
                                O LORD, you brought me up from the netherworld;<br> 
                                you preserved me from among those going down into the pit.<br>
							    <strong><i>R. I will praise you, Lord, for you have rescued me.</i></strong>
                            </p>
                            <p>
                                Sing praise to the LORD, you his faithful ones,<br> 
                                and give thanks to his holy name.<br> 
                                For his anger lasts but a moment;<br> 
                                a lifetime, his good will.<br> 
                                At nightfall, weeping enters in,<br> 
                                but with the dawn, rejoicing.<br>
								<strong><i>R. I will praise you, Lord, for you have rescued me.</i></strong>
                            </p>
                            <p>
                                Hear, O LORD, and have pity on me;<br> 
                                O LORD, be my helper.<br> 
                                You changed my mourning into dancing;<br> 
                                O LORD, my God, forever will I give you thanks.<br>
                                <strong><i>R. I will praise you, Lord, for you have rescued me.</i></strong>
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
            <div class="modal fade features-modal modal-about" id="saturday_5th_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">5th Reading - Saturday</h4>
							<h6 class="modal-title modal-about text-center">Isaiah 55:1-11</h6>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Thus says the LORD:<br> 
                                All you who are thirsty, come to the water! You who have no money, come, receive grain and eat; come, without paying and without cost, drink wine and milk! Why spend your money for what is not bread, your wages for what fails to satisfy? Heed me, and you shall eat well, you shall delight in rich fare. Come to me heedfully, listen, that you may have life. I will renew with you the everlasting covenant, the benefits assured to David. As I made him a witness to the peoples, a leader and commander of nations, so shall you summon a nation you knew not, and nations that knew you not shall run to you, because of the LORD, your God, the Holy One of Israel, who has glorified you.
							</p>
							<p>
							    Seek the LORD while he may be found, call him while he is near. Let the scoundrel forsake his way, and the wicked man his thoughts; let him turn to the LORD for mercy; to our God, who is generous in forgiving. For my thoughts are not your thoughts, nor are your ways my ways, says the LORD. As high as the heavens are above the earth, so high are my ways above your ways and my thoughts above your thoughts.
							</p>
							<p>
							    For just as from the heavens the rain and snow come down and do not return there till they have watered the earth, making it fertile and fruitful, giving seed to the one who sows and bread to the one who eats, so shall my word be that goes forth from my mouth; my word shall not return to me void, but shall do my will, achieving the end for which I sent it.
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
            <div class="modal fade features-modal modal-about" id="saturday_res_psalm4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Saturday
                            <h6 class="modal-title modal-about text-center">Isaiah 12:2-3, 4, 5-6</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. You will draw water joyfully from the springs of salvation.</i></strong><br>
                                God indeed is my savior;<br> 
                                I am confident and unafraid.<br> 
                                My strength and my courage is the LORD,<br> 
                                and he has been my savior.<br> 
                                With joy you will draw water<br> 
                                at the fountain of salvation.<br>
							    <strong><i>R. You will draw water joyfully from the springs of salvation.</i></strong>
                            </p>
                            <p>
                                Give thanks to the LORD, acclaim his name;<br> 
                                among the nations make known his deeds,<br> 
                                proclaim how exalted is his name.<br>
								<strong><i>R. You will draw water joyfully from the springs of salvation.</i></strong>
                            </p>
                            <p>
                                Sing praise to the LORD for his glorious achievement;<br> 
                                let this be known throughout all the earth.<br> 
                                Shout with exultation, O city of Zion,<br> 
                                for great in your midst is the Holy One of Israel!<br>
                                <strong><i>R. You will draw water joyfully from the springs of salvation.</i></strong>
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
            <div class="modal fade features-modal modal-about" id="saturday_6th_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">6th Reading - Saturday</h4>
							<h6 class="modal-title modal-about text-center">Baruch 3:9-15, 32C4:4</h6>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Hear, O Israel, the commandments of life: listen, and know prudence! How is it, Israel, that you are in the land of your foes, grown old in a foreign land, defiled with the dead, accounted with those destined for the netherworld? You have forsaken the fountain of wisdom! Had you walked in the way of God, you would have dwelt in enduring peace. Learn where prudence is, where strength, where understanding; that you may know also where are length of days, and life, where light of the eyes, and peace. Who has found the place of wisdom, who has entered into her treasuries?
							</p>
							<p>
							    The One who knows all things knows her; he has probed her by his knowledgeC The One who established the earth for all time, and filled it with four-footed beasts; he who dismisses the light, and it departs, calls it, and it obeys him trembling; before whom the stars at their posts shine and rejoice; when he calls them, they answer, "Here we are!" shining with joy for their Maker. Such is our God; no other is to be compared to him: he has traced out the whole way of understanding, and has given her to Jacob, his servant, to Israel, his beloved son.
							</p>
							<p>
							    Since then she has appeared on earth, and moved among people. She is the book of the precepts of God, the law that endures forever; all who cling to her will live, but those will die who forsake her. Turn, O Jacob, and receive her: walk by her light toward splendor. Give not your glory to another, your privileges to an alien race. Blessed are we, O Israel; for what pleases God is known to us!
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
            <div class="modal fade features-modal modal-about" id="saturday_res_psalm5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Saturday
                            <h6 class="modal-title modal-about text-center">Psalm 19:8, 9, 10, 11</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Lord, you have the words of everlasting life.</i></strong><br>
                                The law of the LORD is perfect,<br> 
                                refreshing the soul;<br> 
                                the decree of the LORD is trustworthy,<br> 
                                giving wisdom to the simple.<br>
							    <strong><i>R. Lord, you have the words of everlasting life.</i></strong>
                            </p>
                            <p>
                                The precepts of the LORD are right,<br> 
                                rejoicing the heart;<br> 
                                the command of the LORD is clear,<br> 
                                enlightening the eye.<br>
								<strong><i>R. Lord, you have the words of everlasting life.</i></strong>
                            </p>
                            <p>
                                The fear of the LORD is pure,<br> 
                                enduring forever;<br> 
                                the ordinances of the LORD are true,<br> 
                                all of them just.<br>
                                <strong><i>R. Lord, you have the words of everlasting life.</i></strong>
                            </p>
                            <p>
                                They are more precious than gold,<br> 
                                than a heap of purest gold;<br> 
                                sweeter also than syrup<br> 
                                or honey from the comb.<br>
                                <strong><i>R. Lord, you have the words of everlasting life.</i></strong>
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
            <div class="modal fade features-modal modal-about" id="saturday_7th_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">7th Reading - Saturday</h4>
							<h6 class="modal-title modal-about text-center">Ezra 36:16-17A, 18-28</h6>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                The word of the LORD came to me, saying: Son of man, when the house of Israel lived in their land, they defiled it by their conduct and deeds. Therefore I poured out my fury upon them because of the blood that they poured out on the ground, and because they defiled it with idols. I scattered them among the nations, dispersing them over foreign lands; according to their conduct and deeds I judged them. But when they came among the nations wherever they came, they served to profane my holy name, because it was said of them: "These are the people of the LORD, yet they had to leave their land." So I have relented because of my holy name which the house of Israel profaned among the nations where they came. Therefore say to the house of Israel: Thus says the Lord GOD: Not for your sakes do I act, house of Israel, but for the sake of my holy name, which you profaned among the nations to which you came. I will prove the holiness of my great name, profaned among the nations, in whose midst you have profaned it. Thus the nations shall know that I am the LORD, says the Lord GOD, when in their sight I prove my holiness through you. For I will take you away from among the nations, gather you from all the foreign lands, and bring you back to your own land. I will sprinkle clean water upon you to cleanse you from all your impurities, and from all your idols I will cleanse you. I will give you a new heart and place a new spirit within you, taking from your bodies your stony hearts and giving you natural hearts. I will put my spirit within you and make you live by my statutes, careful to observe my decrees. You shall live in the land I gave your fathers; you shall be my people, and I will be your God.
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
            <div class="modal fade features-modal modal-about" id="saturday_res_psalm6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Saturday
                            <h6 class="modal-title modal-about text-center">Psalm 42:3, 5; 43:3, 4 / Isaiah 12:2-3, 4BCD, 5-6 / Psalm 51:12-13, 14-15, 18-19</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <h3 class="text-center">When baptism is celebrated.</h3>
                            </p>
                            <p>
                                <strong><i>R. Like a deer that longs for running streams, my soul longs for you, my God.</i></strong><br>
                                Athirst is my soul for God, the living God.<br> 
                                When shall I go and behold the face of God?<br>
							    <strong><i>R. Like a deer that longs for running streams, my soul longs for you, my God.</i></strong>
                            </p>
                            <p>
                                I went with the throng<br> 
                                and led them in procession to the house of God,<br> 
                                Amid loud cries of joy and thanksgiving,<br> 
                                with the multitude keeping festival.<br>
								<strong><i>R. Like a deer that longs for running streams, my soul longs for you, my God.</i></strong>
                            </p>
                            <p>
                                Send forth your light and your fidelity;<br> 
                                they shall lead me on<br> 
                                And bring me to your holy mountain,<br> 
                                to your dwelling-place.<br>
                                <strong><i>R. Like a deer that longs for running streams, my soul longs for you, my God.</i></strong>
                            </p>
                            <p>
                                Then will I go in to the altar of God,<br> 
                                the God of my gladness and joy;<br> 
                                then will I give you thanks upon the harp,<br> 
                                O God, my God!<br>
                                <strong><i>R. Like a deer that longs for running streams, my soul longs for you, my God.</i></strong>
                            </p>
                            <p>
                                <h3 class="text-center">OR</h3>
                            </p>
                            <p>
                                <h3 class="text-center">When baptism is not celebrated.</h3>
                            </p>
                            <p>
                                <strong><i>R. You will draw water joyfully from the springs of salvation.</i></strong><br>
                                God indeed is my savior;<br> 
                                I am confident and unafraid.<br> 
                                My strength and my courage is the LORD,<br> 
                                and he has been my savior.<br> 
                                With joy you will draw water<br> 
                                at the fountain of salvation.<br>
                                <strong><i>R. You will draw water joyfully from the springs of salvation.</i></strong>
                            </p>
                            <p>
                                Give thanks to the LORD, acclaim his name;<br> 
                                among the nations make known his deeds,<br> 
                                proclaim how exalted is his name.<br>
                                <strong><i>R. You will draw water joyfully from the springs of salvation.</i></strong>
                            </p>
                            <p>
                                Sing praise to the LORD for his glorious achievement;<br> 
                                let this be known throughout all the earth.<br> 
                                Shout with exultation, O city of Zion,<br> 
                                for great in your midst<br> 
                                is the Holy One of Israel!<br>
                                <strong><i>R. You will draw water joyfully from the springs of salvation.</i></strong>
                            </p>
                            <p>
                                <h3 class="text-center">OR</h3>
                            </p>
                            <p>
                                <h3 class="text-center">When baptism is not celebrated.</h3>
                            </p>
                            <p>
                                <strong><i>R. Create a clean heart in me, O God.</i></strong><br>
                                A clean heart create for me, O God,<br> 
                                and a steadfast spirit renew within me.<br> 
                                Cast me not out from your presence,<br> 
                                and your Holy Spirit take not from me.<br>
                                <strong><i>R. Create a clean heart in me, O God.</i></strong>
                            </p>
                            <p>
                                Give me back the joy of your salvation,<br> 
                                and a willing spirit sustain in me.<br> 
                                I will teach transgressors your ways,<br> 
                                and sinners shall return to you.<br>
                                <strong><i>R. Create a clean heart in me, O God.</i></strong>
                            </p>
                            <p>
                                For you are not pleased with sacrifices;<br> 
                                should I offer a holocaust, you would not accept it.<br> 
                                My sacrifice, O God, is a contrite spirit;<br> 
                                a heart contrite and humbled, O God, you will not spurn.<br>
                                <strong><i>R. Create a clean heart in me, O God.</i></strong>
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
            <div class="modal fade features-modal modal-about" id="epistle" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Epistle - Saturday</h4>
							<h6 class="modal-title modal-about text-center">Romans 6:3-11</h6>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Brothers and sisters:<br> 
                                Are you unaware that we who were baptized into Christ Jesus were baptized into his death? We were indeed buried with him through baptism into death, so that, just as Christ was raised from the dead by the glory of the Father, we too might live in newness of life.
							</p>
							<p>
							    For if we have grown into union with him through a death like his, we shall also be united with him in the resurrection. We know that our old self was crucified with him, so that our sinful body might be done away with, that we might no longer be in slavery to sin. For a dead person has been absolved from sin. If, then, we have died with Christ, we believe that we shall also live with him. We know that Christ, raised from the dead, dies no more; death no longer has power over him. As to his death, he died to sin once and for all; as to his life, he lives for God. Consequently, you too must think of yourselves as being dead to sin and living for God in Christ Jesus.
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
                            <h6 class="modal-title modal-about text-center">Luke 24:1-12</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                At daybreak on the first day of the week the women who had come from Galilee with Jesus took the spices they had prepared and went to the tomb. They found the stone rolled away from the tomb; but when they entered, they did not find the body of the Lord Jesus. While they were puzzling over this, behold, two men in dazzling garments appeared to them. They were terrified and bowed their faces to the ground. They said to them, "Why do you seek the living one among the dead? He is not here, but he has been raised. Remember what he said to you while he was still in Galilee, that the Son of Man must be handed over to sinners and be crucified, and rise on the third day." And they remembered his words. Then they returned from the tomb and announced all these things to the eleven and to all the others. The women were Mary Magdalene, Joanna, and Mary the mother of James; the others who accompanied them also told this to the apostles, but their story seemed like nonsense and they did not believe them. But Peter got up and ran to the tomb, bent down, and saw the burial cloths alone; then he went home amazed at what had happened.
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
                            <h6 class="modal-title modal-about text-center">Acts 10:34A, 37-43</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                 Peter proceeded to speak and said: "You know what has happened all over Judea, beginning in Galilee after the baptism that John preached, how God anointed Jesus of Nazareth with the Holy Spirit and power. He went about doing good and healing all those oppressed by the devil, for God was with him. We are witnesses of all that he did both in the country of the Jews and in Jerusalem. They put him to death by hanging him on a tree. This man God raised on the third day and granted that he be visible, not to all the people, but to us, the witnesses chosen by God in advance, who ate and drank with him after he rose from the dead. He commissioned us to preach to the people and testify that he is the one appointed by God as judge of the living and the dead. To him all the prophets bear witness, that everyone who believes in him will receive forgiveness of sins through his name."
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
                            <h6 class="modal-title modal-about text-center">Psalm 118:1-2, 16-17, 22-23.</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. This is the day the Lord has made; let us rejoice and be glad.</i></strong><br>
                                Give thanks to the LORD, for he is good,<br> 
                                for his mercy endures forever.<br> 
                                Let the house of Israel say,<br> 
                                “His mercy endures forever.”<br>
								<strong><i>R. This is the day the Lord has made; let us rejoice and be glad.</i></strong>
                            </p>
                            <p>
                                “The right hand of the LORD has struck with power;<br> 
                                the right hand of the LORD is exalted.<br> 
                                I shall not die, but live,<br> 
                                and declare the works of the LORD.”<br>
                                <strong><i>R. This is the day the Lord has made; let us rejoice and be glad.</i></strong>
                            </p>
                            <p>
                                The stone which the builders rejected<br> 
                                has become the cornerstone.<br> 
                                By the LORD has this been done;<br> 
                                it is wonderful in our eyes.<br>
						       <strong><i>R. This is the day the Lord has made; let us rejoice and be glad.</i></strong>
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
                            <h6 class="modal-title modal-about text-center">Colossians 3:1-4 / Colossians 5:6B-8</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                               Brothers and sisters:<br>
                               If then you were raised with Christ, seek what is above, where Christ is seated at the right hand of God. Think of what is above, not of what is on earth. For you have died, and your life is hidden with Christ in God. When Christ your life appears, then you too will appear with him in glory.
                            </p>
                            <p>
                                <h3 class="text-center">OR</h3>
                            </p>
                            <p>
                               Brothers and sisters:<br>
                               Do you not know that a little yeast leavens all the dough? Clear out the old yeast, so that you may become a fresh batch of dough, inasmuch as you are unleavened. For our paschal lamb, Christ, has been sacrificed. Therefore, let us celebrate the feast, not with the old yeast, the yeast of malice and wickedness, but with the unleavened bread of sincerity and truth.
                            </p>    
                            <p>
                                <strong><i>Sequence Victimae Paschali Laudes</i></strong>
                            </p>
                            <p class="text-center">
                                Christians, to the Paschal Victim<br> 
                                Offer your thankful praises!<br> 
                                A Lamb the sheep redeems;<br> 
                                Christ, who only is sinless,<br> 
                                Reconciles sinners to the Father.<br> 
                                Death and life have contended in that combat stupendous:<br> 
                                The Prince of life, who died, reigns immortal.<br> 
                                Speak, Mary, declaring<br> 
                                What you saw, wayfaring.<br> 
                                “The tomb of Christ, who is living,<br> 
                                The glory of Jesus’ resurrection;<br> 
                                bright angels attesting,<br> 
                                The shroud and napkin resting.<br> 
                                Yes, Christ my hope is arisen;<br> 
                                to Galilee he goes before you.”<br> 
                                Christ indeed from death is risen, our new life obtaining.<br> 
                                Have mercy, victor King, ever reigning!<br> 
                                Amen. Alleluia.
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
                            <h6 class="modal-title modal-about text-center">John 20:1-9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                On the first day of the week, Mary of Magdala came to the tomb early in the morning, while it was still dark, and saw the stone removed from the tomb. So she ran and went to Simon Peter and to the other disciple whom Jesus loved, and told them, “They have taken the Lord from the tomb, and we don’t know where they put him.” So Peter and the other disciple went out and came to the tomb. They both ran, but the other disciple ran faster than Peter and arrived at the tomb first; he bent down and saw the burial cloths there, but did not go in. When Simon Peter arrived after him, he went into the tomb and saw the burial cloths there, and the cloth that had covered his head, not with the burial cloths but rolled up in a separate place. Then the other disciple also went in, the one who had arrived at the tomb first, and he saw and believed. For they did not yet understand the Scripture that he had to rise from the dead.
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