<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use App\User;
use App\Tag;
use App\Navbar;
use App\Navbar_More_Sections;

use Auth;
use Illuminate\Http\Request;

class WebUIMaintController extends Controller {
    
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
    
    
     public function webUIMnt()
	{     
         $notif=self::getNotif();
               $tags = Tag::all();
           
		
		return view('adminPanel.createTag',compact('tags','notif'));
	}
    
        public function editTag($id){
        $notif=self::getNotif();
        $currentTag=  Tag::findOrFail($id);
         $tags = Tag::all();
        return view('adminPanel.editTag',compact('tags','currentTag','notif'));
        
    }
    
    
    //this function is used once to fill navbar for first time ,, or fill directly via php my admin
        public function fillNavbar(){
            
            $navbar = Navbar::find(11);          
            $navbarMore= new Navbar_More_Sections;
            $navbarMore->section = 'Extra1';
            $navbar->more()->save($navbarMore);
            
        }
    
    
     public function updateTag($id , Request $request){
        $tag=  Tag::findOrFail($id);
        $tag->update($request->all());
         return redirect('/adminPanel/webUIMaintenance');
        
    }
    
     public function deleteTag($id ){
        $tag = Tag::find($id);
        
        $tag->delete();
         return redirect('/adminPanel/webUIMaintenance');
        
    }
        
    public function createTag(Request $request)
	{
		// dd ())
		//dd (Request::all());
		
		//dd (Auth::user()->name);
		
                $tag = new Tag();
		 $tag->tagname = $request->tagname;
		 $tag->urlname = $request->urlname;
                 $tag->metakeyword =$request->metakeyword;
                 $tag->metatitle=$request->metatitle;
                 $tag->metadesc=$request->metadesc;                 
		Auth::user()->tags()->save($tag);
		return redirect('/adminPanel/webUIMaintenance');
}

}
