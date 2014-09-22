<?php
$this_page = "home";
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
        <!-- CALL JQUERY-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <!-- END CALL JQUERY -->


        <!-- JQUERY -->
        <script type="text/javascript">
       <!--

            $(document).ready(function(){
                var bulletCount = 0;
                var numSlides = $('#bannerOuter > div.banner').length;
                var current = 0;
                
                while(bulletCount < numSlides) {
                    if (bulletCount == 0) {
                        $('#bullets').append('<div class="bullet activeBullet"></div>');
                    } else {
                        $('#bullets').append('<div class="bullet"></div>');
                    }
                    bulletCount++;
                }
                
                var timer = setInterval(animate, 5000);

                $('.bullet').click(function() {
                    clearInterval(timer);
                    animate($(this));
                    timer = setInterval(animate, 5000);              
                });

                function animate(e) {
                    if(!$('#bannerOuter div').is(":animated")) {
                        
                        var temp;

                        if(e != null) {
                            temp = e.index();
                        } else {
                            temp = (current+1)%numSlides;
                        }

                        $('#bannerOuter div:eq('+current+')').fadeOut(500);
                        setTimeout(function() {
                            $('#bannerOuter div:eq('+temp+')').fadeIn(500);
                        },500);
                        $('#bullets :eq('+current+')').removeClass("activeBullet");
                        $('#bullets :eq('+temp+')').addClass("activeBullet");
                        
                        current = temp;
                    }   
                }              
            });
            //-->
        </script>

    </head>
    <body>
        <div class="header_outerHome">
            <div class="container">
                <div id="banner_outer"> 
                    <?php
                    include('includes/header_home.php');
                    ?> 
                </div>
            </div>
        </div>

        <div class="bodyArea">

            <div class="container">
                <div class="homeCols">
                    <div class="grid_4">
                        <img src="images/home1.jpg" alt=""/>
                        <p> <span>BARRY RAIL CENTRE</span> is a mainline connected private railway in South Wales, offering rolling stock storage, servicing and maintenance, and testing and commissioning services, as well as extensive facilities for the undertaking of practical rail-based training.    
                        </p>
                    </div>

                    <div class="grid_divide">
                        &nbsp;
                    </div>

                    <div class="grid_4">
                        <img src="images/home3.jpg" alt=""/>
                        <p> <span>THE SITE IS SHARED</span> with its sister company <a target="_blank" href="http://www.barrytouristrailway.co.uk/">Barry Tourist Railway</a>, and as such has a variety settings and rolling stock, from heritage to modern, which provide excellent filming locations.</p>

                    </div>
                    <div class="grid_divide">
                        &nbsp;
                    </div>

                    <div class="grid_4">
                        <img src="images/home2.jpg" alt=""/>
                        <p><span>BARRY RAIL CENTRE</span> provides excellent professional customer services to its clients, which is flexible, responsive, value for money and open for business.
                        </p>
                    </div>

                    <br style="clear:left;"/>&nbsp;
                </div>

                <div class="greenButton">
                    <a href="what-we-offer.php">VIEW OUR SERVICES</a> 
                </div>

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
