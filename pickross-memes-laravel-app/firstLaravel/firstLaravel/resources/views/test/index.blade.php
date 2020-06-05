@extends('app')

@section('content')
@foreach($cont as $a)
<article>
<h2>
<a href='#'>{{$a->title}}</a>
</h2>
<div>
{{$a->article->artext}}
</div>
<ul class="button">
    	<li>
        	<a id="like_2078" href="javascript:void(0);">
            	0 like            </a>
            	            <a id="likebttn_{{$a->id}}" onclick="like{{$a->id}}" href="javascript:void(0);"><img id="likebttn_img_{{$a->id}}" src="{{ asset('/images/like.png') }}" alt=""></a>
                    </li>
        <li><a target="_blank" href="#">0 comments &nbsp;<img src="{{ asset('/images/comment.png') }}" alt=""> </a></li>
    </ul>
	<ul class="button">
	<li></li>
    	<li style="margin-top:10px;">
        	<div class="fb-share-button fb_iframe_widget" data-href="http://www.pickcross.com/post/index/2078/All-the-ladies-of-the-house-be-like" data-layout="button" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=142274075815513&amp;container_width=0&amp;href=http%3A%2F%2Fwww.pickcross.com%2Fpost%2Findex%2F2078%2FAll-the-ladies-of-the-house-be-like&amp;layout=button&amp;locale=en_US&amp;sdk=joey"><span style="vertical-align: bottom; width: 55px; height: 20px;"><iframe name="f166df04ac" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:share_button Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/share_button.php?app_id=142274075815513&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FNM7BtzAR8RM.js%3Fversion%3D41%23cb%3Df996a3c8c%26domain%3Dwww.pickcross.com%26origin%3Dhttp%253A%252F%252Fwww.pickcross.com%252Ff66db3564%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fwww.pickcross.com%2Fpost%2Findex%2F2078%2FAll-the-ladies-of-the-house-be-like&amp;layout=button&amp;locale=en_US&amp;sdk=joey" style="border: none; visibility: visible; width: 55px; height: 20px;" class=""></iframe></span></div>
       </li>
	   
	   
	       	<li style="margin-top:10px;">
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://pickcross.com" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
       </li>
    </ul>
	</article>
	
@endforeach


@stop