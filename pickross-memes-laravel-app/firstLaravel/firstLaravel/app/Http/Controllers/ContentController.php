<?php namespace App\Http\Controllers;

use App\Content;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Polldetail;
use App\Memedetail;
use App\Polloption;
use App\User;
use App\Useraction;
use App\Tag;
use App\Tag_Content_Pivot;
//use Illuminate\Http\Request;
use Request;
//use Intervention\Image\Facades\Image;
use Auth;
//use Session;
//use Validator;
//use Input;
use View;
use Redirect;
use Carbon\Carbon;

class ContentController extends Controller {
           
             /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
   
            public static function getNotif(){
                
          if(Auth::user()){      
          $usr=User::findOrFail(Auth::user()->id);
          $content=$usr->content()->where('isvisible','=','1')->get();  
         
          if((!$content->isEmpty()) and ($content[0]->isvisible=="1")){
          $content[0]->n_likes=0;
          $content[0]->n_comments=0;
           
	  $notif=$usr->notifications->where('is_seen','0');
           $i=0;
           $n_likes=0; $n_comments=0;
           foreach($content as $c){
                      foreach($notif as $n){
                         if($n->crefid==$c->id){ 
                                  if($n->actiontype=="Like")
                                    $content[$i]->n_likes +=1;
                                  if($n->actiontype=="Comment")
                                    $content[$i]->n_comments +=1;
                         }
                      }
               $i++;
                      }    
          }
            return $content;
            
        }
            }
    
    
	public function index()
	{
         
               $notif= self::getNotif();
             
            
               $tagname="Trending";
		//$cont = Content::orderby('pscore','DESC')->take(2)->get();
               //  $cont=Content::take(2)->skip(2)->get();
            $cont=Content::where('isvisible','=','1')->orderby('pscore','DESC')->take(5)->get();
           // return $cont;
	    $trend=Content::where('isvisible','=','1')->orderby('created_at','DESC')->take(10)->get();  // Fresh Sidebar
          //  $cont[0]->like=1;
            $id=0;
           //return $cont;
            foreach($cont as $c){
                
    
             Content::where('id', '=',$c->id )->update(['nviews' => $c->nviews + 1]);
             Content::where('id', '=',$c->id )->update(['pscore' => $c->pscore + 1]);
            
           
               $cont[$id]->like=-1;
               $cont[$id]->comment=-1;
               $cont[$id]->report=-1;
                if(Auth::user()){
                // use any of 2 methods both works
             //   $userActions = Useraction::whereRaw('userid = ? and crefid = ?',[Auth::user()->id,$c->id])->get();
                $userActions = Useraction::where('userid','=',Auth::user()->id)
                               ->where('crefid','=',$c->id)->get();
                        
                     foreach($userActions as $u){
                         
                         if($u->actiontype=="Like"){                   
                             $cont[$id]->like=1;
                         }
                          if($u->actiontype=="Comment"){
                             $cont[$id]->comment=1;
                         }
                          if($u->actiontype=="Flag"){
                             $cont[$id]->report=1;
                         }
                     }
               $id++;
                 Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints + 1]);  
                 Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints + 1]);
               
            }
            
                          }
            // return $cont;
            //$cont = Content::paginate(2);	
                      //  dd($cont[0]->tags[0]->tagname);
                       //   return($tag[0]->tagname);
		return view('content.index', compact('cont','tagname','trend','notif'));
                }

	
        
        	public function viewByTag($id)
	{
                     $notif= self::getNotif(); 
                  if($id=="Trending"){
                  return Redirect::to('/');}
                  elseif($id=="Fresh"){
                 $tagname="Fresh";     
                 $cont=Content::where('isvisible','=','1')->orderby('created_at','DESC')->take(10)->get();
                 $trend=Content::where('isvisible','=','1')->orderby('pscore','DESC')->take(10)->get();      
                  }
                   else{ 
                    $tagname=$id;
                    $tag=Tag::where('tagname','=',$id)->get();
                //return $tag;
            //     return ($tag[0]->content_list);
		    $cont=Content::where('isvisible','=','1')->find($tag[0]->content_list)->take(5);
                   // dd($cont);
                    $trend=Content::whereIn('id',$tag[0]->content_list)->where('isvisible','=','1')->orderby('pscore','DESC')->take(10)->get();  
  
          //  $cont[0]->like=1;
                   }
            $id=0;
           
            foreach($cont as $c){
         
             Content::where('id', '=',$c->id )->update(['nviews' => $c->nviews + 1]);
             Content::where('id', '=',$c->id )->update(['pscore' => $c->pscore + 1]);
        
               $cont[$id]->like=-1;
               $cont[$id]->comment=-1;
               $cont[$id]->report=-1;
                if(Auth::user()){
                // use any of 2 methods both works
             //   $userActions = Useraction::whereRaw('userid = ? and crefid = ?',[Auth::user()->id,$c->id])->get();
                $userActions = Useraction::where('userid','=',Auth::user()->id)
                               ->where('crefid','=',$c->id)->get();
                        
                     foreach($userActions as $u){
                         
                         if($u->actiontype=="Like"){                   
                             $cont[$id]->like=1;
                         }
                          if($u->actiontype=="Comment"){
                             $cont[$id]->comment=1;
                         }
                          if($u->actiontype=="Flag"){
                             $cont[$id]->report=1;
                         }
                     }
               $id++;
                 Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints + 1]);  
                 Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints + 1]);
               
            }
            
                          }
            // return $cont;
            //$cont = Content::paginate(2);	
                      //  dd($cont[0]->tags[0]->tagname);
                       //   return($tag[0]->tagname);
		return view('content.index', compact('cont','tagname','trend','notif'));

	}
        
          //Pagination Main Content
        public function more(\Illuminate\Http\Request $request)
	{
            
            
                 if (Request::ajax()){
                  $tagname=$request->tagname;
                  $limit=$request->limit;
                  $offset=$request->offset;
                     
                      if($tagname=="Trending")
                   {
                     $cont=Content::where('isvisible','=','1')->orderby('pscore','DESC')->take($limit)->skip($offset)->get();
                 
                    }
                  elseif($tagname=="Fresh"){
                 $cont=Content::where('isvisible','=','1')->orderby('created_at','DESC')->take($limit)->skip($offset)->get();
               //  $trend=Content::orderby('pscore','DESC')->take(10)->get();      
                  }
            
           //return ($request->limit ."   ". $request->offset ." ". $request->tagname);
                  else{
                  $tag=Tag::where('tagname','=',$tagname)->get();                  
		  $cont=Content::whereIn('id',$tag[0]->content_list)->where('isvisible','=','1')->take($limit)->skip($offset)->get();                        
	    //      $trend=Content::whereIn('id',$tag[0]->content_list)->orderby('pscore','DESC')->take(10)->get(); //sidebar 
               //  return $cont;
                 //  $cont=Content::take($limit)->skip($offset)->get();
                  }
             $id=0;
           
            foreach($cont as $c){
                
               $cont[$id]->like=-1;
               $cont[$id]->comment=-1;
               $cont[$id]->report=-1;
               
             Content::where('id', '=',$c->id )->update(['nviews' => $c->nviews + 1]);
             Content::where('id', '=',$c->id )->update(['pscore' => $c->pscore + 1]);
               
                if(Auth::user()){
                // use any of 2 methods both works
             //   $userActions = Useraction::whereRaw('userid = ? and crefid = ?',[Auth::user()->id,$c->id])->get();
                $userActions = Useraction::where('userid','=',Auth::user()->id)
                               ->where('crefid','=',$c->id)->get();
                        
                     foreach($userActions as $u){
                         
                         if($u->actiontype=="Like"){                   
                             $cont[$id]->like=1;
                         }
                          if($u->actiontype=="Comment"){
                             $cont[$id]->comment=1;
                         }
                           if($u->actiontype=="Flag"){
                             $cont[$id]->report=1;
                         }
                     }
               $id++;
               
                 Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints + 1]);  
                 Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints + 1]);
               
            }
            
             }
             
              
      
      return View::make('content.moreContent',compact('cont'));
                 
                 
            }

	}
        
        
        public function content($id,\Illuminate\Http\Request $request)
	{
            if (preg_match('/[0-9]/', substr(strrchr($id, "-"), 1))) 
			{
				$id = substr(strrchr($id, "-"), 1);
                              
            
              if(Auth::user()){      
              $usr=User::findOrFail(Auth::user()->id);
              Useraction::where('crefid','=',$id)->update(['is_seen' => '1']);}
            
               $notif= self::getNotif();   
               
               $content=Content::where('id','=',$id)->where('isvisible','=','1')->get();  
            if(!$content->isEmpty()){
               $content[0]->like=-1;
               $content[0]->comment=-1;
               $content[0]->report=-1;
              // return $content;
                if(Auth::user()){
                 $u1 = Useraction::where('userid','=',Auth::user()->id)
                               ->where('crefid','=',$content[0]->id)
                               ->where('actiontype','=','Like')
                               ->orWhere('actiontype','=','Unlike')->get(); 
                    if(!$u1->isEmpty()){
                         if($u1[0]->actiontype=="Like"){                   
                             $content[0]->like=1;
                         }  
                    }
                }
           
                 $userAction= Useraction::where('crefid','=',$id)
                              ->where('actiontype','=','Comment')->orderby('created_at','DESC')->get();        
                            
  
   if(!$userAction->isEmpty())
    {
        $id=0;
        foreach($userAction as $u){
            $user=User::where('id','=',$u->userid)->get();
            $userAction[$id]->avatar=$user[0]->avatar;
            $userAction[$id]->username=$user[0]->username;
            if($userAction[$id]->created_at->diffInSeconds(Carbon::now())<60)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInSeconds(Carbon::now())." sec";}
            elseif($userAction[$id]->created_at->diffInMinutes(Carbon::now())<60)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInMinutes(Carbon::now())." min";}
            elseif($userAction[$id]->created_at->diffInHours(Carbon::now())<24)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInHours(Carbon::now())." hrs";}
            elseif($userAction[$id]->created_at->diffInDays(Carbon::now())<=30)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInDays(Carbon::now())." days";}
            elseif($userAction[$id]->created_at->diffInMonths(Carbon::now())<=12)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInMonths(Carbon::now())." months";}
            else
            {$userAction[$id]->datediff=$userAction[$id]->created_at->format('M Y');}      
            $id++;
        }
        // return $userAction[0];
       //  return View::make('content.comments', compact('userAction','content'));
             
        
    }
    
                   
               
                    $cont=Content::orderby('pscore','DESC')->take(10)->get(); 
                    $tagname="Trending";
  //   return "userActions = ".$userAction."   content = ".$content."    cont  = ".$cont."   notif =".$notif;

                    return view('content.contentDetails', compact('userAction','content','cont','notif','tagname'));
            }                

        }
        
                        else{
                            
                             $notif= self::getNotif(); 
                  if($id=="Trending"){
                  return Redirect::to('/');}
                  elseif($id=="Fresh"){
                 $tagname="Fresh";     
                 $cont=Content::where('isvisible','=','1')->orderby('created_at','DESC')->take(10)->get();
                 $trend=Content::where('isvisible','=','1')->orderby('pscore','DESC')->take(10)->get();      
                  }
                   else{ 
                    $tagname=$id;
                    $tag=Tag::where('tagname','=',$id)->get();
                    
                //return $tag;
            //     return ($tag[0]->content_list);
		    $cont=Content::where('isvisible','=','1')->find($tag[0]->content_list)->take(5);
                   // dd($cont);
                    $trend=Content::whereIn('id',$tag[0]->content_list)->where('isvisible','=','1')->orderby('pscore','DESC')->take(10)->get();  
  
          //  $cont[0]->like=1;
                   }
            $id=0;
           
            foreach($cont as $c){
         
             Content::where('id', '=',$c->id )->update(['nviews' => $c->nviews + 1]);
             Content::where('id', '=',$c->id )->update(['pscore' => $c->pscore + 1]);
        
               $cont[$id]->like=-1;
               $cont[$id]->comment=-1;
               $cont[$id]->report=-1;
                if(Auth::user()){
                // use any of 2 methods both works
             //   $userActions = Useraction::whereRaw('userid = ? and crefid = ?',[Auth::user()->id,$c->id])->get();
                $userActions = Useraction::where('userid','=',Auth::user()->id)
                               ->where('crefid','=',$c->id)->get();
                        
                     foreach($userActions as $u){
                         
                         if($u->actiontype=="Like"){                   
                             $cont[$id]->like=1;
                         }
                          if($u->actiontype=="Comment"){
                             $cont[$id]->comment=1;
                         }
                          if($u->actiontype=="Flag"){
                             $cont[$id]->report=1;
                         }
                     }
               $id++;
                 Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints + 1]);  
                 Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints + 1]);
               
            }
            
                          }
            // return $cont;
            //$cont = Content::paginate(2);	
                      //  dd($cont[0]->tags[0]->tagname);
                       //   return($tag[0]->tagname);
                          
		return view('content.index', compact('cont','tagname','trend','notif','tag'));

                            
                        }
        
        
        }
        
        
        public function liveSearch(\Illuminate\Http\Request $request){
          if (Request::ajax()){
              
               $type=$request->type;
               $content=Content::where('title', 'like', '%'.$request->search.'%')->where('isvisible','=','1')->get();
               // return $content[0]->tag_list;
          /*     $tags;
               $i=0;
               foreach($content as $c){
                $tags[$i]=Tag::where('id','=',$c->tag_list)->get();
                $i++;
               }
               return $tags; */
                return View::make('content.liveSearchResult', compact('content','type'));
          }
           }





            
            
        
        //fillNavbar
        
        
        public function fillNavbar(){
            if (Request::ajax()){
                $navbarMain=Tag::where('navbarMainOrder','>','0')
                           ->where('navbarMainOrder','<=','10')
                           ->orderby('navbarMainOrder','ASC')->take(10)->get();
                $navbarMore=Tag::where('navbarMainOrder','>','10')
                            ->where('navbarMainOrder','<=','15')
                           ->orderby('navbarMainOrder','ASC')->take(5)->get();
                
               
                 
                   return View::make('navbar.fillNavbar', compact('navbarMain','navbarMore'));
            }
            
        }
        
        public function navbarTags(){
              if (Request::ajax()){
                 $tags=Tag::all(); 
                 $navbarMain=Tag::where('navbarMainOrder','>','0')
                           ->where('navbarMainOrder','<=','10')
                           ->orderby('navbarMainOrder','ASC')->take(10)->get();
                $navbarMore=Tag::where('navbarMainOrder','>','10')
                            ->where('navbarMainOrder','<=','15')
                           ->orderby('navbarMainOrder','ASC')->take(5)->get();
                
               
             
                   return View::make('navbar.navbarTags', compact('navbarMain','navbarMore','tags'));
            }
            
            
        }
        
        public function updateTag(\Illuminate\Http\Request $request){
             if (Request::ajax()){
           // return $request->value;
              $prev=Tag::where('id','=',$request->value)->get();   
            $removeOld=Tag::where('navbarMainOrder','=',$request->id)->update(['navbarMainOrder' => $prev[0]->navbarMainOrder]);
         //   $removeOld->save();
            $update=Tag::where('id','=',$request->value)->update(['navbarMainOrder' => $request->id]);
             //  $update->save(); 
            return "Updated";
        }
        }
        
         public function updateMoreTag(\Illuminate\Http\Request $request){
             if (Request::ajax()){
           // return $request->value;
              $prev=Tag::where('id','=',$request->value)->get();   
            $removeOld=Tag::where('navbarMainOrder','=',$request->id)->update(['navbarMainOrder' => $prev[0]->navbarMainOrder]);
         //   $removeOld->save();
            $update=Tag::where('id','=',$request->value)->update(['navbarMainOrder' => $request->id]);
             //  $update->save(); 
            return "Updated";
        }
        }
        
      
        
          public function deleteTag(\Illuminate\Http\Request $request){
          if (Request::ajax()){
        
              $delete=Tag::where('navbarMainOrder','=',$request->id)->update(['navbarMainOrder'=>'0']);
              return "Success";
          }
          
          
          
          }
          
           public function deleteMoreTag(\Illuminate\Http\Request $request){
          if (Request::ajax()){
        
              $delete=Tag::where('navbarMainOrder','=',$request->id)->update(['navbarMainOrder'=>'0']);
              return "Success";
          }
          }
          
          public function addTag(\Illuminate\Http\Request $request){
              
              
          if (Request::ajax()){
             
            // $prev=Tag::where('id','=',$request->value)->get();   
             Tag::where('id','=',$request->value)->update(['navbarMainOrder' => $request->id]);
              
              return "Added Successfully";
          }
          
          
          
          }
           public function addMoreTag(\Illuminate\Http\Request $request){
         if (Request::ajax()){
             
            // $prev=Tag::where('id','=',$request->value)->get();   
             Tag::where('id','=',$request->value)->update(['navbarMainOrder' => $request->id]);
              
              return "Added Successfully";
          }
          
          
          
          }
        

        public function like(\Illuminate\Http\Request $request){
            
   // $request->likeValue;
    $cont=Content::find($request->contentId);  
    Content::where('id', '=',$request->contentId )->update(['nlikes' => $cont->nlikes + $request->likeValue]);
    if($request->likeValue==1)
     Content::where('id', '=',$request->contentId )->update(['pscore' => $cont->pscore + 10]);
    else
      Content::where('id', '=',$request->contentId )->update(['pscore' => $cont->pscore - 10]); 
    
   if(Auth::user()){
       if($request->likeValue==1){
      Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints + 10]); 
       Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints + 10]); } 
    else{
       Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints - 10]); 
    Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints - 10]); } 
       
       
    
    $userAction= Useraction::where('userid','=',Auth::user()->id)
                             ->where('crefid','=',$request->contentId)
                             ->where('actiontype','=','Like')        
                             ->orWhere('actiontype','=','Unlike')->get();
  //  return $userAction;
    if(!$userAction->isEmpty())
    {
        $newActionType="";
        if($userAction[0]->actiontype=="Like"){
             $newActionType="Unlike";
        }
         else{
             $newActionType="Like";
         }
        $userAction1=Useraction::where('id', '=',$userAction[0]->id)->update(['actiontype' => $newActionType]);
        
    }
    else{
    $userAction= new Useraction();
                    $userAction->crefid= $request->contentId;
                      $userAction->actiontype="Like";
                      $userAction->creftype="M"; 
                       $userAction->userid=Auth::user()->id;
                     $userAction->save();
                     return  $userAction;
    } 
    
// Auth::user()->action()->save($userAction);
   }
            
            
        }
        
        //Load view on comment click
        public function comment(\Illuminate\Http\Request $request)
        {
            
   // $request->likeValue;
   $content=Content::where('id','=',$request->contentId)->get();
    
  
           
           
                
               $content[0]->like=-1;
               $content[0]->comment=-1;
               
                if(Auth::user()){
                // use any of 2 methods both works
             //   $userActions = Useraction::whereRaw('userid = ? and crefid = ?',[Auth::user()->id,$c->id])->get();
                $u1 = Useraction::where('userid','=',Auth::user()->id)
                               ->where('crefid','=',$content[0]->id)
                               ->where('actiontype','=','Like')
                               ->orWhere('actiontype','=','Unlike')->get(); 
                        
             // return $u1[0];
                         if($u1[0]->actiontype=="Like"){                   
                             $content[0]->like=1;
                         }   
            }
           
                          
   
   
   
    $userAction= Useraction::where('crefid','=',$request->contentId)
                             ->where('actiontype','=','Comment')->get();        
                            
  
   if(!$userAction->isEmpty())
    {
        $id=0;
        foreach($userAction as $u){
            $user=User::where('id','=',$u->userid)->get();
            $userAction[$id]->avatar=$user[0]->avatar;
            $userAction[$id]->username=$user[0]->username;
               if($userAction[$id]->created_at->diffInSeconds(Carbon::now())<60)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInSeconds(Carbon::now())." sec";}
            elseif($userAction[$id]->created_at->diffInMinutes(Carbon::now())<60)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInMinutes(Carbon::now())." min";}
            elseif($userAction[$id]->created_at->diffInHours(Carbon::now())<24)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInHours(Carbon::now())." hrs";}
            elseif($userAction[$id]->created_at->diffInDays(Carbon::now())<=30)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInDays(Carbon::now())." days";}
            elseif($userAction[$id]->created_at->diffInMonths(Carbon::now())<=12)
            {$userAction[$id]->datediff=$userAction[$id]->created_at->diffInMonths(Carbon::now())." months";}
            else
            {$userAction[$id]->datediff=$userAction[$id]->created_at->format('M Y');}                  
            $id++;
        }
        // return $userAction[0];
       //  return View::make('content.comments', compact('userAction','content'));
             
        
    }
    
     return View::make('content.comments', compact('userAction','content'));
                  /*
                     $userAction= new Useraction();
                    $userAction->crefid= $request->contentId;
                      $userAction->actiontype="Comment";
                      $userAction->actioncontent="Sexy Bitch";
                      $userAction->creftype="M"; 
                       $userAction->userid=10;
                     $userAction->save();   */
               // Auth::user()->action()->save($userAction);
  
            
            
            
        }
        
        // actions on comment post
        public function sendcomment(\Illuminate\Http\Request $request){
             $cont=Content::find($request->contentId);  
             Content::where('id', '=',$request->contentId )->update(['ncomments' => $cont->ncomments + 1]);
             Content::where('id', '=',$request->contentId )->update(['pscore' => $cont->pscore + 20]);
             Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints + 20]);  
             Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints + 20]);
 
    
                  
                     $userAction= new Useraction();
                    $userAction->crefid= $request->contentId;
                      $userAction->actiontype="Comment";
                      $userAction->actioncontent=$request->text;
                      $userAction->creftype="M"; 
                       $userAction->userid=Auth::user()->id;
                     $userAction->save();
                     $userAction->datediff="Now";
              // Auth::user()->action()->save($userAction);
  
     return View::make('content.newcomment', compact('userAction'));
            
            
        }
        
           public function viewCount(\Illuminate\Http\Request $request){
             $cont=Content::find($request->contentId);  
             Content::where('id', '=',$request->contentId )->update(['nviews' => $cont->nviews + 1]);
             Content::where('id', '=',$request->contentId )->update(['pscore' => $cont->pscore + $request->score]);
            
             if(Auth::user()){
             Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints + $request->score]);  
             Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints + $request->score]);
             }
    
            
            
        }
        
           public function report(\Illuminate\Http\Request $request){
            
   // $request->likeValue;
    $cont=Content::find($request->contentId);  
    Content::where('id', '=',$request->contentId )->update(['redflag' => $cont->redflag + $request->reportValue]);
    if($request->reportValue==1)
     Content::where('id', '=',$request->contentId )->update(['pscore' => $cont->pscore - 20]);
    else
      Content::where('id', '=',$request->contentId )->update(['pscore' => $cont->pscore + 20]); 
    
   if(Auth::user()){
       if($request->reportValue==1){
      Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints + 20]); 
       Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints + 20]); } 
    else{
       Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints - 20]); 
    Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints - 20]); } 
       
       
    
    $userAction= Useraction::where('userid','=',Auth::user()->id)
                             ->where('crefid','=',$request->contentId)
                             ->where('actiontype','=','Flag')        
                             ->orWhere('actiontype','=','Unflag')->get();
  //  return $userAction;
    if(!$userAction->isEmpty())
    {
        $newActionType="";
        if($userAction[0]->actiontype=="Flag"){
             $newActionType="Unflag";
        }
         else{
             $newActionType="Flag";
         }
       Useraction::where('id', '=',$userAction[0]->id)->update(['actiontype' => $newActionType]);
        
    }
    else{
    $userAction= new Useraction();
                    $userAction->crefid= $request->contentId;
                      $userAction->actiontype="Flag";
                      $userAction->creftype="M"; 
                       $userAction->userid=Auth::user()->id;
                     $userAction->save();
                     return  $userAction;
    } 
    
// Auth::user()->action()->save($userAction);
   }
            
            
        }
        
        
        
        
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
                $notif= self::getNotif(); 
		return view('content.create');
	}
        
        public function memeGenerator()
	{    $notif= self::getNotif(); 
            $tags = Tag::orderBy('navbarMainOrder', 'ASC')->where('navbarMainOrder', '>', 0)->get();
		return view('creater.memeGenerator', compact('tags','notif'));
		
	}
        public function memeGeneratorMobile()
	{    $notif= self::getNotif(); 
             $tags = Tag::orderBy('navbarMainOrder', 'ASC')->where('navbarMainOrder', '>', 0)->get();
		return view('creater.memeGeneratorMobile', compact('tags','notif'));
	
	}
        
       
        
        
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(\Illuminate\Http\Request $request)
	{
		
		
		$this->validate ($request, ['title'=> 'required']);
                
		if($request->ctype == 'P')
		{
			
		//save img here
		
		 $content = new Content();
		 $content->ctype = Request::input('ctype');
		 $content->title = Request::input('title');
		 Auth::user()->content()->save($content);
		 
		 $pollcontent = new Polldetail(['pollcontent' => $desPathimg ]);
		 $content->poll()->save($pollcontent);
		 
		
                 
                 
		 foreach ($request->option as $option)
		{
			if ($option != "")
			{
				
				$polloption = new Polloption(['option' => $option ]);
		        $pollcontent->polloption()->save($polloption);

			}
			
		}
		 
		  

		
		
		
			}
	
		
	
	elseif($request->ctype== 'M')
		{   
                
              //  $file = array('image' => base64_decode($request->pollcontent));
                   $rawData = $request->pollcontent;
                 //  dd($request);
                   $filteredData = explode(',', $rawData);
                   $unencoded = base64_decode($filteredData[1]);
                   
                   $destinationPath = 'assets/uploads/image/';
                   $fileName = rand(11111,99999).'.png';
                   $desPathimg=$destinationPath.$fileName;
                   $fp = fopen($desPathimg, 'w');
                   fwrite($fp, $unencoded);
                   fclose($fp); 
            
            
		
		
		 $content = new Content();
		 $content->ctype = $request->ctype;
		 $content->title = $request->title;
                 if(Auth::guest()){
                     $old=User::where('email','=',$request->email)->get();
                     if(!$old->isEmpty()){
                        // return $old;
                         $old[0]->content()->save($content);
                         $old[0]->update(['mplaypoints'=>$old[0]->mplaypoints + 100]);  
                         $old[0]->update(['loyaltypoints'=>$old[0]->loyaltypoints + 100]);
                     }
                     else{
                     $user= new User();
                     $user->email= $request->email;
                      $user->provider='meme reg';
                       $user->provider_id = strtotime("now").'memereg:'.rand();
                     $user->save();
                     $user->content()->save($content);
                     }
                 }
                 else{
		 Auth::user()->content()->save($content);
                 Auth::user()->update(['mplaypoints'=>Auth::user()->mplaypoints + 100]);  
                 Auth::user()->update(['loyaltypoints'=>Auth::user()->loyaltypoints + 100]);
                 }
		 $meme = new Memedetail(['filelocation' => $desPathimg ]);
		 $content->meme()->save($meme);
                 $content->tags()->attach($request->input('tags'));
		//return $content->id;
                 $pg = str_replace(' ', '-', $content->title);
		 return redirect('/'.$pg.'-'.$content->id);
		
		 
		  

		
		
		
            
            
                }
			
			
			
		elseif(Request::input('ctype')== 'F')
		{}
	
	
	
		elseif(Request::input('ctype')== 'A')
		{}
		}
		
		
		
			
		
	

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

/*      $file = array('image' => Input::file('pollcontent'));
            	//$file = array('image' => Request::file('pollcontent'));
		  $rules = array('image' => 'required', 'mimes'=>'jpeg|bmp|png'); //mimes:jpeg,bmp,png and for max size max:10000
		  $validator = Validator::make($file, $rules);
		  if ($validator->fails())
			  {
			// send back to the page with the input data and errors
			return redirect('create')->withInput()->withErrors($validator);
				}
		  else {
			// checking file is valid.
			if (Input::file('pollcontent')->isValid()) {
                            //return "true";
			  $destinationPath = 'assets/uploads/image/'; // upload path
			  $extension = Input::file('pollcontent')->getClientOriginalExtension(); // getting image extension
			  $fileName = rand(11111,99999).'.'.$extension; // renaming image
			  Input::file('pollcontent')->move($destinationPath, $fileName); // uploading file to given path
			  // sending back with message
			  $desPathimg=$destinationPath.$fileName;
			  \Session::flash('success', 'Upload successfully'); 
			  //return redirect('create');
			}
			else {
			  // sending back with error message.
			  \Session::flash('error', 'uploaded file is not valid');
			  return redirect('create');
			}
		
		
		
		 $content = new Content();
		 $content->ctype = $request->ctype;
		 $content->title = $request->title;
		 Auth::user()->content()->save($content);
		 
		 $meme = new Memedetail(['filelocation' => $desPathimg ]);
		 $content->meme()->save($meme); */