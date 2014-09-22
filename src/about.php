<?php
$this_page = "about";
$heading = "About Barry Rail Centre";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Barry Rail Centre</title>  
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/grid.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'/>
 
     <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic' rel='stylesheet' type='text/css'/>

        <script type="text/javascript" src="btrc_fancybox/lib/jquery-1.7.2.min.js"></script> 
        <script type="text/javascript" src="btrc_fancybox/source/jquery.fancybox.js?v=2.0.6"></script>
        <link rel="stylesheet" type="text/css" href="btrc_fancybox/source/jquery.fancybox.css?v=2.0.6" media="screen" />


        <script type="text/javascript">
            $(document).ready(function() {
       
    
                // Set custom style, close if clicked, change title type and overlay color
                $(".fancybox-effects-c").fancybox({
                    wrapCSS    : 'fancybox-custom',
                    closeClick : true,

                    helpers : {
                        title : {
                            type : 'inside'
                        },
                        overlay : {
                            css : {
                                'background-color' : '#eee'
                            }
                        }
                    }
                });

          


            });
        </script>


    </head>
    <body>
        <div class="header_outer">
            <div class="container">  
                    <?php
                    include('includes/header.php');
                    ?> 
                
            </div>
        </div>

        <div class="bodyArea">

            <div class="container">

                <div class="grid_8">
                    <p>Barry Rail Centre is a 100+ acre site connected to the Vale of Glamorgan mainline in Barry.  It has <!--ADD miles of--> track stretching between Barry Waterfront and Barry Island, and for large sections runs immediately adjacent to the mainline.  This proximity provides an excellent location for testing and training, but with far more scope for controlling activities, away from the restrictions required on the mainline.</p>
                    <p class="indent">Barry Rail Centre has extensive safe covered storage and workshop facilities at its Main Depot, New Works Building, Plymouth Road Engine Shed and Hood Road Shed.  It also has impressive bookable meeting facilities at its offices at the restored Station Buildings on Barry Island, and further facilities at its Hood Road Engine Shed, which are also connected to its running line.  Further detailed technical specifications on the railway can be provided upon request.</p>

                    <br/><br/>
                    <!--<h2>The Cambrian Group of Companies</h2>
                    <p>Barry Rail Centre is operated by BRECO (Barry Railway Engineering Company), one of the Cambrian Group of Companies.  The first Cambrian company, Cambrian Transport Ltd, was established by ex British Rail Divisional Civil Engineer South West, John Buxton who established the company on rail privatisation.  John, who was also formally Managing Director of Cardiff Valley Lines, established BRECO more recently since taking on a long-term lease of the Barry Rail Centre in 2000.</p>
                    <p class="indent">Cambrian Transport Ltd has developed a strong reputation in the rail industry for excellent consultancy and civil engineering services to its clients, and its flexible value for money ethos is carried through into its services to clients at Barry Rail Centre.</p>-->



                </div> 
                <div class="grid_3_right">
                    <div class="searchImg">
                        <div class="searchImgIcon">
                  
                        <a class="fancybox-effects-c" href="images/about_img_big.jpg" title="Our Main Depot has extensive facilities">&nbsp;</a>
                        </div>
                        <a class="fancybox-effects-c" href="images/about_img_big.jpg" title="Our Main Depot has extensive facilities">
                            <img src="images/about_img.jpg" alt="" />
                        </a>

                    </div>

                    <p class="caption">Our Main Depot has extensive facilities</p>




                    <!--<div class="download">
                        <a href="">Download a site plan.</a>
                    </div>-->
                    <div class="searchImg">
                        <div class="searchImgIcon">
                            <a class="fancybox-effects-c" href="images/about_img2_big.jpg" title="Our New Works Building has modern facilties">&nbsp;</a>
                        </div>
                     <a class="fancybox-effects-c" href="images/about_img2_big.jpg" title="Our New Works Building has modern facilties"><img src="images/about_img2.jpg" alt=""/></a>
                    </div>
                    <p class="caption">Our New Works Building has modern facilties</p>

                </div>

                <br style="clear:both;"/>





            </div>


        </div>
        <div class="container">
            <div class="footer">
                <?php
                include('includes/footer.php');
                ?> 
            </div>
        </div>
    </body>
</html>
