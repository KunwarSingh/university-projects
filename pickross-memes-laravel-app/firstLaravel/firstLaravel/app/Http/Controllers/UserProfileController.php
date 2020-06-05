<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Content;
use Auth;
use App\Useraction;
use App\User;
use View;
use Request;
use Redirect;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserProfileController
 *
 * @author Kunwar
 */
class UserProfileController extends Controller{
    //put your code here
  public static function getNotif(){
                
          if(Auth::user()){      
          $usr=User::findOrFail(Auth::user()->id);
          $content=$usr->content()->where('isvisible','=','1')->get(); 
           if(!$content->isEmpty()){
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
         $notif=self::getNotif();
         	//$cont = Content::orderby('pscore','DESC')->take(2)->get();
               //  $cont=Content::take(2)->skip(2)->get();
            $cont=Content::where('userid','=',Auth::user()->id)->where('isvisible','=','1')->take(5)->get();
          //  $cont[0]->like=1;
                  $id=0;
               $cont[$id]->like=-1;
               $cont[$id]->comment=-1;
               $cont[$id]->report=-1;
            foreach($cont as $c){

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
            
                          }
                         
                          $favouritesAction = Useraction::where('userid','=',Auth::user()->id)
                               ->where('actiontype','=',"Like")->get();
                     
                     //  dd($favourites->toArray());
                       //$fav=Content::where('id','=',$favourites[0]->crefid)->get();
                           $j=0;
                            foreach($favouritesAction as $f){
                                
                                $fav[$j]=(Content::where('id','=',$f->crefid)->first());
                                $fav[$j]->like=1;
                                 $fav[$j]->comment=-1;
                                 $fav[$j]->report=-1;
                                    // $hasCommented=;
                                         
                                             if(!Useraction::where('crefid','=',$f->crefid)
                                                ->where('actiontype','=',"Comment")
                                                ->groupBy('crefid')->get()->isEmpty()){
                                                  $fav[$j]->comment=1;    
                                               }
                                               if(!Useraction::where('crefid','=',$f->crefid)
                                                ->where('actiontype','=',"Flag")
                                                ->groupBy('crefid')->get()->isEmpty()){
                                                  $fav[$j]->report=1;    
                                               }
                                               
                                 $j++;
                            }
                               
                            
                            $commentsAction = Useraction::where('userid','=',Auth::user()->id)
                                        ->where('actiontype','=',"Comment")
                                        ->groupBy('crefid')->get();
                            $k=0;
                            foreach($commentsAction as $com){
                                
                                $comments[$k]=(Content::where('id','=',$com->crefid)->first());
                                $comments[$k]->comment=1;
                                $comments[$k]->like=-1;
                                $comments[$k]->report=-1;
                                      if(!Useraction::where('crefid','=',$com->crefid)
                                            ->where('actiontype','=',"Like")->get()->isEmpty()){
                                               $comments[$k]->like=1;    
                                               }
                                               
                                       if(!Useraction::where('crefid','=',$com->crefid)
                                            ->where('actiontype','=',"Flag")->get()->isEmpty()){
                                               $comments[$k]->report=1;    
                                               }        
                                 $k++;
                            }

      
         // return ($comments);
          //  return $fav;	
		return view('user.myProfile', compact('cont','fav','comments','notif'));
           
		//return view('adminPanel.userMaintenance',compact('user'));
	}
        
        
          public function comments()
	{        	
           
                            $commentsAction = Useraction::where('userid','=',Auth::user()->id)
                                        ->where('actiontype','=',"Comment")
                                        ->groupBy('crefid')->get();
                            
                           if(!$commentsAction->isEmpty()){    
                            $k=0;
                            foreach($commentsAction as $com){
                                
                                $comments[$k]=(Content::where('id','=',$com->crefid)->where('isvisible','=','1')->first());
                             
                                if($comments[$k]!="") { 
                               $comments[$k]->comment=1;
                                $comments[$k]->like=-1;
                                $comments[$k]->report=-1;
                                      if(!Useraction::where('crefid','=',$com->crefid)
                                            ->where('actiontype','=',"Like")->get()->isEmpty()){
                                               $comments[$k]->like=1;    
                                               }
                                               
                                       if(!Useraction::where('crefid','=',$com->crefid)
                                            ->where('actiontype','=',"Flag")->get()->isEmpty()){
                                               $comments[$k]->report=1;    
                                               }        
                            $k++;  } //else{$k--;}
        }}else{$comments='null';}
                $trend=Content::where('isvisible','=','1')->orderby('pscore','DESC')->take(10)->get();   
     	        $postsTab='';
                $favTab='';
                $commentsTab='active';
                $tagname='Comments';
                $notif=self::getNotif();
		return view('user.myComments', compact('comments','postsTab','favTab','commentsTab','tagname','trend','notif'));
           
		//return view('adminPanel.userMaintenance',compact('user'));
	}
        
             public function fav()
	{        	
           
                          $favouritesAction = Useraction::where('userid','=',Auth::user()->id)
                               ->where('actiontype','=',"Like")->get();
                       //  return $favouritesAction; 
                        
                  if(!$favouritesAction->isEmpty()){  
                           $j=0;
                            foreach($favouritesAction as $f){
                                
                                $fav[$j]=(Content::where('id','=',$f->crefid)->where('isvisible','=','1')->first());
                               if($fav[$j]!=""){
                                $fav[$j]->like=1;
                                 $fav[$j]->comment=-1;
                                 $fav[$j]->report=-1;
                                    // $hasCommented=;
                                         
                                             if(!Useraction::where('crefid','=',$f->crefid)
                                                ->where('actiontype','=',"Comment")
                                                ->groupBy('crefid')->get()->isEmpty()){
                                                  $fav[$j]->comment=1;    
                                               }
                                               if(!Useraction::where('crefid','=',$f->crefid)
                                                ->where('actiontype','=',"Flag")
                                                ->groupBy('crefid')->get()->isEmpty()){
                                                  $fav[$j]->report=1;    
                                               }
                                               
                               $j++;}
                            }
        }else{$fav='null';}
     //  return $fav;
                $trend=Content::where('isvisible','=','1')->orderby('pscore','DESC')->take(10)->get();   
     	        $postsTab='';
                $favTab='active';
                $commentsTab='';
                $tagname='Favourites';
                $notif=self::getNotif();
		return view('user.myFavourites', compact('fav','postsTab','favTab','commentsTab','tagname','trend','notif'));
           
		
	}
             public function posts()
	{        	
           
            $cont=Content::where('userid','=',Auth::user()->id)->where('isvisible','=','1')->take(5)->get();
          //  $cont[0]->like=1;
            if(!$cont->isEmpty()){      $id=0;
               $cont[$id]->like=-1;
               $cont[$id]->comment=-1;
               $cont[$id]->report=-1;
            foreach($cont as $c){

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
            
                          }
        }
          
        
                          
                $trend=Content::where('isvisible','=','1')->orderby('pscore','DESC')->take(10)->get();        
                          
                          
     	        $postsTab='active';
                $favTab='';
                $commentsTab='';
                $tagname='Posts';
                $notif=self::getNotif();
		return view('user.myPosts', compact('cont','postsTab','favTab','commentsTab','tagname','trend','notif'));
           
		//return view('adminPanel.userMaintenance',compact('user'));
	}
        
        public function more(\Illuminate\Http\Request $request){
                $tagname=$request->tagname;
                  $limit=$request->limit;
                  $offset=$request->offset;
                  
                      if($tagname=="Posts")
                   {
                        
                  //  return $offset;
                     $cont=Content::where('userid','=',Auth::user()->id)->where('isvisible','=','1')->take($limit)->skip($offset)->get();
          //  $cont[0]->like=1;
                   // return $cont;
                  $id=0;
               $cont[$id]->like=-1;
               $cont[$id]->comment=-1;
               $cont[$id]->report=-1;
            foreach($cont as $c){

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
            
                          }

                    }
                    
                    elseif($tagname=="Comments"){
                        
                            $commentsAction = Useraction::where('userid','=',Auth::user()->id)
                                        ->where('actiontype','=',"Comment")
                                        ->groupBy('crefid')
                                        ->take($limit)->skip($offset)->get();
                           // return $commentsAction;
                            $k=0;
                            foreach($commentsAction as $com){
                                
                                $comments[$k]=(Content::where('id','=',$com->crefid)->where('isvisible','=','1')->first());
                               iF($comments[$k]!=""){
                                $comments[$k]->comment=1;
                                $comments[$k]->like=-1;
                                $comments[$k]->report=-1;
                                      if(!Useraction::where('crefid','=',$com->crefid)
                                            ->where('actiontype','=',"Like")->get()->isEmpty()){
                                               $comments[$k]->like=1;    
                                               }
                                               
                                       if(!Useraction::where('crefid','=',$com->crefid)
                                            ->where('actiontype','=',"Flag")->get()->isEmpty()){
                                               $comments[$k]->report=1;    
                                               }        
                               $k++;}
                            }
                            $cont=$comments;
                          //  return "limit=".$limit."   offset=".$offset;
                    }        
                            elseif($tagname=="Favourites"){
                                   $favouritesAction = Useraction::where('userid','=',Auth::user()->id)
                                   ->where('actiontype','=',"Like")
                                   ->take($limit)->skip($offset)->get();
                 
                           $j=0;
                            foreach($favouritesAction as $f){
                                
                                $fav[$j]=(Content::where('id','=',$f->crefid)->where('isvisible','=','1')->first());
                               if($fav[$j]=""){
                                $fav[$j]->like=1;
                                 $fav[$j]->comment=-1;
                                 $fav[$j]->report=-1;
                                    // $hasCommented=;
                                         
                                             if(!Useraction::where('crefid','=',$f->crefid)
                                                ->where('actiontype','=',"Comment")
                                                ->groupBy('crefid')->get()->isEmpty()){
                                                  $fav[$j]->comment=1;    
                                               }
                                               if(!Useraction::where('crefid','=',$f->crefid)
                                                ->where('actiontype','=',"Flag")
                                                ->groupBy('crefid')->get()->isEmpty()){
                                                  $fav[$j]->report=1;    
                                               }
                                               
                               $j++;}
                            }
                              
                                $cont=$fav;
                            }
                            
                           // return $cont;
                            return View::make('user.moreContent',compact('cont')); 
      
                    }
                    
                     public function avatarUpload(\Illuminate\Http\Request $request){
                         if (Request::ajax()){
                            $fileName = $_FILES["file-0"]["name"]; 
                            $kaboom = explode(".", $fileName); 
                            $ext = end($kaboom);                           
                             
                     //    return "this=".$_FILES['file-0']['name'];
                         $target_path = 'assets/uploads/dpic/' . "avatar_".Auth::user()->id.".".$ext; 
             
if(move_uploaded_file($_FILES['file-0']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file-0']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

                         Auth::user()->update(['avatar'=>'assets/uploads/dpic/'. "avatar_".Auth::user()->id.".".$ext]);
                     
                         $resized_file = "assets/uploads/dpic/avatar_".Auth::user()->id.".".$ext;
                         $w=150; $h=150;                     
                         list($w_orig, $h_orig) = getimagesize($target_path);
                         
                         $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
           $w = $h * $scale_ratio;
    } else {
           $h = $w / $scale_ratio;
    }
    $img = "";
   
    $ext = strtolower($ext);
    if ($ext == "gif"){ 
      $img = imagecreatefromgif($target_path);
    } else if($ext =="png"){ 
      $img = imagecreatefrompng($target_path);
    } else { 
      $img = imagecreatefromjpeg($target_path);
    } 
    $tci = imagecreatetruecolor($w, $h);
    // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    imagejpeg($tci, $resized_file, 80);
}                       
                     }
            
        }
    
    

