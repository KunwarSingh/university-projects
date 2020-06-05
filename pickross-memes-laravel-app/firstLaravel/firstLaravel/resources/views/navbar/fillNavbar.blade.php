
<li class='li-1b'>    <a  href='{{url('Trending')}}'>#Trending</a></li>
<li class='li-2b'>    <a  href='{{url('Fresh')}}'>Fresh</a></li>

@foreach($navbarMain as $main)

<li class='li-{{$main->navbarMainOrder+2}}b'>    <a  href='{{url($main->tagname)}}'>{{$main->tagname}} </a></li>

@endforeach
            
           <li class='dropdown li-11b' >    <a data-toggle='dropdown' class='dropdown-toggle ' href='#'>More <b class='caret'></b></a>    
           <ul class="dropdown-menu">
                 <?php $i=$navbarMain->last()->navbarMainOrder; $j=$i/2 -3; ?>
               @for($i;$i>$j;$i--)
                        <li class='li-{{$i+2}}d'>    <a  href='{{url($navbarMain[$i-1]->tagname)}}'>{{$navbarMain[$i-1]->tagname}} </a></li> 
                 @endfor             
          @foreach($navbarMore as $more)
                  <li class='mli-{{$more->navbarMoreOrder}}b'>    <a  href='{{url($more->tagname)}}'>{{$more->tagname}}</a></li>                    
            @endforeach                   
                   
             </ul> </li>
             <li id="memeCreateM" class="createButtonM"> <a href="{{ url('/mGenerator') }}">Create</a></li>                       
           
            
            
     