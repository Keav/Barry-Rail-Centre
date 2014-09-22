<?php
$this_page = "contact";
$heading = "Contact";

ini_set('display_errors',0);
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//gather variables from contactform
    $cf_name = htmlentities($_POST['cf_name']);
    $cf_email = htmlentities($_POST['cf_email']);
    $cf_phone = htmlentities($_POST['cf_phone']);
    $cf_comments = htmlentities($_POST['cf_comments']);

    $check = 1;

//check content
    if (strlen($cf_name) < 1) {
        $check = 0;
        $cf_name_error = "PLEASE ENTER A NAME";
    }
 


    if (strlen($cf_email) < 1) {
        $check = 0;
        $cf_email_error = "PLEASE ENTER AN EMAIL ADDRESS";
    } else if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $cf_email)) {
        //also check for .mobi
        if (substr($cf_email, -4) != "mobi") {
            $check = -1;
            $cf_email_error = "EMAIL ADDRESS IS INVALID";
        }
    }
 
    if (strlen($cf_comments) < 1) {
        $check = 0;
        $cf_comments_error = "PLEASE ENTER A MESSAGE";
    }

    if ($check == 1) {

        //send  email
        $ToEmail = "enquiries@barryrailcentre.co.uk";
        $EmailSubject = "Contact From - Barry Rail Centre";
        $mailheader = "From: $cf_email\n";
        $mailheader .= "Reply-To: $cf_email \n";
        $message .= "A visitor to your website has posted a contact form - these are the details they entered:\n\n";
        $message .= "Name:\n $cf_name\n\n";
        $message .= "Email:\n $cf_email\n\n";
        $message .= "Phone:\n $cf_phone\n\n";
        $message .= "Query:\n $cf_comments\n\n";
        $message .= "Contact Form powered by blue stag studio ltd";

        //  mail("contact-forms@bluestagstudio.co.uk", $EmailSubject, $message, $mailheader);
        if (mail($ToEmail, $EmailSubject, $message, $mailheader) or die("Failure")) {
            header('location:contact-success.php');
        }
    }
}
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

<script type="text/javascript"  src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <style>
    html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}

#map_canvas {
width:500px;
height:500px;
}

@media print {
  html, body {
    height: auto;
  }

  #map_canvas {
    height: 650px;
  }
}
</style>
<script type="text/javascript">
  function initialize() {

                     var myLatlng= new google.maps.LatLng(51.3925,-3.27294);
     var myOptions = {
      zoom: 16,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }


    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
       var marker = new google.maps.Marker({
        position: myLatlng,
        map: map
    });


  }


</script>
        
    </head>
    <body onload="initialize()">
        <div class="header_outer">
            <div class="container">  
                    <?php
                    include('includes/header.php');
                    ?>  
            </div>
        </div>

        <div class="bodyArea">

            <div class="container">
            
                
                <div class="contactLeft">
                    <form action="contact.php?submit=1" method="post">
                        <label>NAME</label>
                        <input type="text" name="cf_name" value="<?php echo $cf_name; ?>"/>
                        <br style="clear:left;"/>
                        
                        <?php if($cf_name_error){ ?>
                        <div class="error">
                            <p><?php echo $cf_name_error; ?></p>
                        </div><br style="clear:left;"/>
                        <?php } ?>
                        <label>EMAIL</label>
                        <input type="text" name="cf_email" value="<?php echo $cf_email; ?>"/>
                        <br style="clear:left;"/>
                            <?php if($cf_email_error){ ?>
                        <div class="error">
                            <p><?php echo $cf_email_error; ?></p>
                        </div><br style="clear:left;"/>
                        <?php } ?>
                        <label>PHONE<span>Optional</span></label>
                        <input type="text" name="cf_phone" value="<?php echo $cf_phone; ?>"/>
                        <br style="clear:left;"/>
                        
                        <label>YOUR MESSAGE</label>
                   <textarea name="cf_comments" rows="0" cols="0"><?php echo $cf_comments; ?></textarea>
                        <br style="clear:left;"/>
                            <?php if($cf_comments_error){ ?>
                        <div class="error">
                            <p><?php echo $cf_comments_error; ?></p>
                        </div><br style="clear:left;"/>
                        <?php } ?>
                        
                        <input type="submit" value=""/>
                        <br style="clear:right;"/>
                    </form>
                </div>
                
      <div class="contactRight">

<div class="mapHolder">

<div id="map_canvas" style="width: 380px; height: 380px"></div>
                    </div>
               
          <!--<iframe width="379" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=cf10+1bs&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=43.393645,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=Cardiff+CF10+1BS,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.480922,-3.181286&amp;output=embed"></iframe><br />-->
          
          <h3>ADDRESS</h3>
          <p>The Station Buildings, Station Approach, Barry Island, Vale of Glamorgan CF62 5TH</p>
          <h3>EMAIL</h3>
          <p><a href="mailto:enquiries@barryrailcentre.co.uk">enquiries@barryrailcentre.co.uk</a></p>
          <h3>TELEPHONE</h3>
          <p>01446 748 816</p>
          
          <a href="https://twitter.com/barryrailcentre" class="twitter-follow-button" data-show-count="false">Follow @barryrailcentre</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
               <br style="clear:right;"/> </div>
                
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
