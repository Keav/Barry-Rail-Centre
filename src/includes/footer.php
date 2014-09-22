
<div class="grid_4" id="footerLeft">
    <h2>Copyright &copy; Barry Rail Centre 2013</h2>
    <p class="footerFollow">Follow us on <a href="https://twitter.com/BarryRailway" target="_blank">Twitter</a> &amp; <a target="_blank" href="http://www.facebook.com/pages/Barry-Tourist-Railway/196540117115590">Facebook</a></p>
    
     </div>
 


<div class="grid_5" id="footerRight">
       <? 
            function ago($timestamp) {
                $difference = time() - $timestamp;

                if ($difference < 60)
                    return $difference . " seconds ago";
                else {
                    $difference = round($difference / 60);
                    if ($difference < 60)
                        return $difference . " minutes ago";
                    else {
                        $difference = round($difference / 60);
                        if ($difference < 24)
                            return $difference . " hours ago";
                        else {
                            $difference = round($difference / 24);
                            if ($difference < 7)
                                return $difference . " days ago";
                            else {
                                $difference = round($difference / 7);
                                return $difference . " weeks ago";
                            }
                        }
                    }
                }
            }

            $username = "BarryRailway";
            $format = 'json'; // set format
            $tweets = json_decode(file_get_contents("http://api.twitter.com/1/statuses/user_timeline/{$username}.{$format}")); // get tweets and decode them into a variable
            $tweet_count = 1;

            foreach (array_slice($tweets, 0, $tweet_count) as $tweet):
                $time = ago(strtotime($tweet->created_at));
                $content = $tweet->text; // show latest tweet
            //<a href="http://twitter.com/#!/status/username/39762213950459904">
            endforeach
            ?>

            <?php
            
                $tweet = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '<a target="_blank" href="$1">$1</a>', $content);
                $tweet = preg_replace("/@([0-9a-zA-Z]+)/", "<a target=\"_blank\" href=\"http://twitter.com/$1\">@$1</a>", $tweet);
                $tweet = preg_replace("/#([0-9a-zA-Z]+)/", "<a target=\"_blank\" href=\"http://twitter.com/#!/search/%23$1\">#$1</a>", $tweet);
                  $tweet = str_replace('&', '&amp;', $tweet);
		echo "<h2>Latest Tweet <span>".$time."</span></h2>";
		echo "<p>".$tweet."</p>";
            
                
                
                 
 
            ?>
    
    
    
    
            
    
    
    
</div>

<br style="clear:both;"/>

 
    <p class="bluestag">Web Design by <a target="_blank" href="http://www.bluestagstudio.co.uk/">Blue Stag Studio</a></p>
 
    <p class="conjunction">In conjunction with <a href="http://www.barrytouristrailway.co.uk/" target="_blank">Barry Tourist Railway</a></p>
 
 

<br style="clear:both;"/>