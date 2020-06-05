<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Illuminate\Http\Request;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserMaintController
 *
 * @author Kunwar
 */
class UserMaintController extends Controller{
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
            $user = User::all();
           
		return view('adminPanel.getUsers',compact('user','notif'));
	}
        
               public function editUser($id){
                    $notif=self::getNotif();
        $user=  User::findOrFail($id);
 
        return view('adminPanel.editUser',compact('user','notif'));
        
    }   
      public function updateUser($id , Request $request){
        $user=  User::findOrFail($id);
     //   return $request->all();
        $user->update(['username'=>$request->username , 'email'=>$request->email , 'usertype'=>$request->usertype]);
      
         return redirect('/adminPanel/userMaintenance');
        
    }
      
        
    
    
}
