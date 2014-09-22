<div id="headerTop">
    
    <a href="index.php"><img src="images/logo.png" alt=""/></a>

<ul> 
    <li <?php if($this_page == 'home'){ echo "class=\"active\""; } ?>><a href="index.php">Home</a></li>     
    <li <?php if($this_page == 'What-We-Offer'){ echo "class=\"active\""; } ?>><a href="what-we-offer.php">What We Offer</a></li>     
    <li <?php if($this_page == 'about'){ echo "class=\"active\""; } ?>><a href="about.php">About</a></li>     
   <li <?php if($this_page == 'news'){ echo "class=\"active\""; } ?>><a href="news-page-1.php">News</a></li>     
    <li <?php if($this_page == 'contact'){ echo "class=\"active\""; } ?>><a href="contact.php">Contact</a></li> 
</ul>
                  <br style="clear:both;"/>  
                </div>


<h1>
  <?php echo $heading;?>
</h1>

<?php if($this_page == 'What-We-Offer') { ?>
<div class="enquire">
    <a href="contact.php">ENQUIRE ABOUT OUR SERVICES</a>
</div>
<br style="clear:both;"/>
<?php } else{
    ?>

<br style="clear:left;"/>
<?php
}
?>