<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use App\User;
use App\Content;
use App\Navbar;
use App\Navbar_More_Sections;
use App\Tag;

use Auth;
use Illuminate\Http\Request;

class ContentMaintController extends Controller {
    
    
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
             //  $tags = Tag::all();
                $notif=self::getNotif();
		
		return view('adminPanel.contentMaintenance',compact('notif'));
	}
        
            public function editContent($id){
        $currentContent=  Content::findOrFail($id);
      // $t=Tag::findOrFail(5);
      // return ($t);
        $tags = Tag::lists('tagname','id');
       // dd ($t->content_list);
         $notif=self::getNotif();
        return view('adminPanel.editContent',compact('currentContent','tags','notif'));
        
    }   
      public function updateContent($id , Request $request){
        $content=  Content::findOrFail($id);
        $content->update(['title' => $request->title , 'isvisible' =>$request->isvisible , 'isfeatured'=> $request->isfeatured]);
       if($request->input('tag_list')==""){
         $content->tags()->detach($request->input('tag_list'));}
       else{
        $content->tags()->sync($request->input('tag_list'));}
         return redirect('/adminPanel/contentMaintenance');
        
    }
        
        
}