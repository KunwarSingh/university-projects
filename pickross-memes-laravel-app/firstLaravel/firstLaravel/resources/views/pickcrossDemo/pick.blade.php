@extends('hello')

@section('header')
        
      
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
   <script type="text/javascript" src="js/home.js"></script>
  

  <style>
      @font-face {
    font-family: 'drakolomb';
    src: url('css/Raleway-Medium.ttf');
}
      .header{
          background-color: #19887e;
          height:55px;
          padding-left: 30px;
          margin-top:-5px;
          padding-right:30px;
      }
     
     .navbar-nav li a {
          color:#ffffff;
          font-family: 'drakolomb', sans-serif;
          text-decoration: none;
}
     

      .navbar-nav li a:hover{
          color:#ffcc00;
          background-color: #19887e;
      }
      li{
          margin-left:2px;
      }
      
      #meme{
          background-color:#ffcc00;
      }
      
    
      .second-heading{
            background-color: #fff;
         border-bottom: 1px solid #ddd;
        margin-top:65px ;
        padding-bottom: 10px;
        padding-left: 85px;
       
         color: #999;
          line-height: 20px;
          font-size: 12px;
          float: left;
          width:100%;
 
      
      }
      
      
      .userbar a{
           color:#ffffff;
          font-family: 'drakolomb', sans-serif;
          text-decoration: none;
          
      }
      .userbar a:hover{
          color:#ffcc00;
          background-color: #19887e;
      }
      
      .well{
            background: none;
  border: 0px solid #e3e3e3;
  border-radius: 0px;
  box-shadow: none;
  margin-bottom: 20px;
  min-height: 0;
  padding: 0px;
  margin-top: 40px;
    font-family: "drakolomb",sans-serif;
  font-weight: 400;
          
      }
      
      .well h4 {
  color: #000;
  font-weight: bold;
  font-size: 20px;
  line-height: 30px;
}
.well h3 {
  color: #000;
  font-weight: bold;
  font-size: 25px;
  line-height: 30px;
}
.well ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.well ul li {
  list-style: none;
  margin-bottom: 20px;
  padding: 0;
}
.well ul li a {
  color: #000;
  font-weight: bold;
  font-size: 16px;
}

.img-responsive {
  float: left;
}
      aside{
          float: left;
  margin-bottom: 0px;
  padding-bottom: 30px;
  border-bottom: 0px #eee solid;
  width: 100%;
  font-family: "drakolomb",sans-serif;
  font-weight: 400;
      }
      aside .row {
  margin-left: 0px;
}
      
.row{
      font-family: "drakolomb",sans-serif;
  font-weight: 400;
    display: block;
}


        .sharebar{
            color:#19887e;
            font-size:12px;
        }
        .sharebar img{
            margin-left:-3px;
            padding-top:5px;
        }
  </style>
    
   
    

        
        
       <nav class="navbar navbar-fixed-top" style="border: 1px solid #19887e;border-radius:0px;"> 
        <div class="container-fluid" style="background-color: #19887e; ">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <div class="navbar-header navbar-left header">
               
                <a class="navbar-brand" href="/pickross">
                	<img src="images/logo5.png" alt="fuck" >            
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " >
                <ul class="nav navbar-nav">
                     <li>
                        <a href="http://www.pickcross.com/post/mostpopular/">Most Popular</a>
                    </li>
                    <li>
                        <a href="http://www.pickcross.com/iin/">IIN</a>
                    </li>
					<li>
                        <a href="http://www.pickcross.com/gayatri/">Gayatri</a>
                    </li>

                    <li>
                        <a href="http://www.pickcross.com/whatsappjokes/">Whatsapp Jokes</a>
                    </li>
			<li>
                        <a href="http://www.pickcross.com/jugaad/">Jugaad</a>
                    </li>
                    <li>
                        <a href="http://www.pickcross.com/contactus/">Sections</a>
                    </li>
                   

                </ul>
                <ul class="nav navbar-nav navbar-right">
        
        <li id="login"><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
      </ul>
            </div>
         
            
            <!-- /.navbar-collapse -->
        </div> </nav>
        <!-- /.container -->
     
       
        <div class="row second-heading">
    	<div class="col-lg-12">
            Our collection of top Indian memes, funny Indian photos and more </div> 
                                         
                                        
        </div>
          <div style=" float:right; "> @include('login.login')</div>
          
          <div class="container">
	<div class="row">
	    <!-- Blog Entries Column -->
        <div class="col-md-6">
@foreach($memes as $m)   	   	
<div id="results" class="well">
    <h4> {{ $m->title }} </h4>
</div>
            <img src="images/{{$m->image}}"></img>
            <div class="container sharebar">
                <div class="row">
                    <div class="col-lg-1">
                        <span> <span class="glyphicon glyphicon-eye-open" style="color:#19887e; font-size: 15px; padding-top: 5px; padding-right: 5px;"></span>{{$m->n_views}}</span></div>
                 <div class="col-lg-1">
                       <span class="glyphicon glyphicon-thumbs-up" style="color:#19887e;font-size: 15px; padding-top: 5px; padding-right: 5px;"></span>{{$m->n_likes}}</div>
                <div class="col-lg-1">
                       <span class="glyphicon glyphicon-comment" style="color:#19887e; font-size: 15px;padding-top: 5px; padding-right: 5px;"></span>{{$m->n_comments}}</div>
                 <div class="col-lg-1"></div>
                    
                    <div class="col-lg-5" >
              
                <img class="image2" src="images/facebook.png" height="30px"></img>
                <img class="image2" src="images/google.png" height="30px"></img>
                <img class="image2" src="images/twitter.png" height="30px"></img>
                </div>
                    <div class="col-lg-1"></div>
                
                </div></div>
@endforeach
        </div>
            <div class="col-md-2"></div>
        
        <div class="col-md-4 " style="z-index:-1;">
	<aside>
		<div class="well" style="width:300px;">
                    <div class="input-group">
                                             <input type="text" class="form-control" id="search" placeholder="Hot Search">
                <span class="input-group-addon"><span class="glyphicon glyphicon-search" style="color:#19887e;"></span></span>
                
            </div>
                    
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
        
          
         <!-- bottom-bar  -->
          <nav class="navbar userbar" style="position:fixed; bottom:-40px; width:100%;">
               <div class="container-fluid" style="background-color: #19887e; height:40px; ">
                   
                 
                   
                   <div class="row " style="border-radius:0px;">
               
                       <div class="col-lg-5 " >
                           
                          
                           
                       </div>
                            <div class="col-lg-6 " >
                                <a>  Copyrights Pickcross.com</a>
                               
                       
					

                </div>
                            <div class="col-lg-1">
                       
                                <button type="button" id="meme" style="color:#ffffff; background-color:#19887e; border: 1px solid #19887e; border-radius:4px;"> Submit </button>
                   </div>
               
            </div>
                   
                  
                      
                       
                   
                  
                   
               </div>
              
              
          </nav>
        
      
        
        
  
 @stop


