 <div class="container">
	<div class="row">
	    <!-- Blog Entries Column -->
        <div class="col-md-8">
    	   	<script type="text/javascript">
$(document).ready(function() {
	var track_load = 0; //total loaded record group(s)
	var loading  = false; //to prevents multipal ajax loads 
		var total_groups = 229; //total record group(s)
	
	$('#results').load("http://www.pickcross.com/home/autoloaddata", {'group_no':track_load}, function() {track_load++;}); //load first group
	
	$(window).scroll(function() { //detect page scroll
		
		if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
		{
			
			if(track_load <= total_groups && loading==false) //there's more data to load
			{
				loading = true; //prevent further ajax loading
				$('.animation_image').show(); //show loading image
				
				//load data from the server using a HTTP POST request
				$.post('http://www.pickcross.com/home/autoloaddata',{'group_no': track_load}, function(data){
									
					$("#results").append(data); //append received data into the element

					//hide loading image
					$('.animation_image').hide(); //hide loading image once data is received
					
					track_load++; //loaded group increment
					loading = false; 
				
				}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
					
					alert(thrownError); //alert with HTTP error
					$('.animation_image').hide(); //hide loading image
					loading = false;
				
				});
				
			}
		}
	});
	
});
</script>
<div id="results">
</div>
<div class="animation_image" style="display:none" align="center"><img src="http://www.pickcross.com/site/public/images/preload.gif"></div>
        </div>

        
        <div class="col-md-4">
	<aside>
		<div class="well">
        	<h4>Most Popular</h4>
            <div class="row">
            	<ul>
                	                	<li>
                    	<a href="http://www.pickcross.com/post/index/320/Collecting-stamps-vs-tazos---tell-us-which-one-did-you-love-more-as-a-kid">
                            <p>Collecting stamps vs tazos - tell us which one did you love more as a kid?</p>
                            
                    <img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/faceoff/thumb/faceoff_1425390318.jpg" alt="Collecting stamps vs tazos - tell us which one did you love more as a kid?">
                           	
                        </a>
                    </li>
					                	<li>
                    	<a href="http://www.pickcross.com/post/index/313/Tendulkars-straight-drive-vs-Gangulys-cover-drive-which-stroke-was-more-beautiful-tell-us">
                            <p>Tendulkars straight drive vs Gangulys cover drive; which stroke was more beautiful, tell us</p>
                            
                    <img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/faceoff/thumb/faceoff_1425390325.jpg" alt="Tendulkars straight drive vs Gangulys cover drive; which stroke was more beautiful, tell us">
                           	
                        </a>
                    </li>
					                	<li>
                    	<a href="http://www.pickcross.com/post/index/318/Paint-vs-Pinball---what-did-you-really-use-your-comp-for-as-a-kid-tell-us">
                            <p>Paint vs Pinball - what did you really use your comp for as a kid? tell us?</p>
                            
                    <img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/faceoff/thumb/faceoff_1425390320.jpg" alt="Paint vs Pinball - what did you really use your comp for as a kid? tell us?">
                           	
                        </a>
                    </li>
					                	<li>
                    	<a href="http://www.pickcross.com/post/index/287/Krur-Singh-Chandrakanta-vs-Mogambo-Mr-India---which-villian-did-you-love-more">
                            <p>Krur Singh (Chandrakanta) vs Mogambo (Mr. India) - which villian did you love more</p>
                            
                    <img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/faceoff/thumb/faceoff_1425390361.jpg" alt="Krur Singh (Chandrakanta) vs Mogambo (Mr. India) - which villian did you love more">
                           	
                        </a>
                    </li>
					                	<li>
                    	<a href="http://www.pickcross.com/post/index/317/Throwing-sutli-bombs-vs-scared-of-phooljhadi---which-one-are-you-tell-us">
                            <p>Throwing sutli bombs vs scared of phooljhadi - which one are you? tell us?</p>
                            
                    <img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/faceoff/thumb/faceoff_1425390322.jpg" alt="Throwing sutli bombs vs scared of phooljhadi - which one are you? tell us?">
                           	
                        </a>
                    </li>
					                	<li>
                    	<a href="http://www.pickcross.com/post/index/423/1-mn-pounds-email-vs-candy-crush-saga-invite-which-one-do-you-hate-more-Tell-us">
                            <p>1 mn pounds email vs candy crush saga invite, which one do you hate more? Tell us!</p>
                            
                    <img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/faceoff/thumb/faceoff_1425382209.jpg" alt="1 mn pounds email vs candy crush saga invite, which one do you hate more? Tell us!">
                           	
                        </a>
                    </li>
					                	<li>
                    	<a href="http://www.pickcross.com/post/index/419/Who-did-a-better-shahrukh-pose-on-train-Random-stranger-vs-King-khan">
                            <p>Who did a better shahrukh pose on train? Random stranger vs King khan!</p>
                            
                    <img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/faceoff/thumb/faceoff_1425390229.jpg" alt="Who did a better shahrukh pose on train? Random stranger vs King khan!">
                           	
                        </a>
                    </li>
					                	<li>
                    	<a href="http://www.pickcross.com/post/index/750/Who-do-you-like-more-as-sherlock">
                            <p>Who do you like more as sherlock?</p>
                            
                	<img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/poll/thumb/" alt="Who do you like more as sherlock?">
                           	
                        </a>
                    </li>
					                	<li>
                    	<a href="http://www.pickcross.com/post/index/49/Kajol-vs-Chuttki-DDLJ---do-you-rbr-her-she-was-cute-then-but-well-done-puberty-check-her-out">
                            <p>Kajol vs Chuttki (DDLJ) - do you rbr her? she was cute then, but, well done puberty: check her out!</p>
                            
                    <img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/faceoff/thumb/faceoff_1425391292.jpg" alt="Kajol vs Chuttki (DDLJ) - do you rbr her? she was cute then, but, well done puberty: check her out!">
                           	
                        </a>
                    </li>
					                	<li>
                    	<a href="http://www.pickcross.com/post/index/310/Rahul-roy-as-tiger-in-Junoon-vs-Sanjeev-Kumar-as-bear-ghost-in-Jaani-Dushman-who-was-funnier">
                            <p>Rahul roy as tiger in Junoon vs Sanjeev Kumar as bear-ghost in Jaani Dushman; who was funnier?</p>
                            
                    <img width="332" class="img-responsive" src="http://www.pickcross.com/upload/post/faceoff/thumb/faceoff_1425390327.jpg" alt="Rahul roy as tiger in Junoon vs Sanjeev Kumar as bear-ghost in Jaani Dushman; who was funnier?">
                           	
                        </a>
                    </li>
					                </ul>
			</div>
		</div>
	</aside>  
</div>
        </div></div>