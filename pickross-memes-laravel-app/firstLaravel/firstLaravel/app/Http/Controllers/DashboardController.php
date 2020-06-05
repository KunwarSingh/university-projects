<?php namespace App\Http\Controllers;
use App\User;
use App\Photo;
use App\Meme;
use App\Relationship;
use App\UserProfile;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;
use Input;
use Redirect;

class DashboardController extends Controller
{
    public function index()
    {
       // $photos = Auth::user()->photos()->order_by('created_at', 'desc')->order_by('id', 'desc')->get();
       $photos = Auth::user()->photos()->get();
      return view('dashboard.index', compact('photos'));
      // return $photos;
    }
    
    public function addMeme(){
        return view('dashboard.memes');
    }
    
    public function saveMeme(\Illuminate\Http\Request $request){
       // $meme=new Student(Request::all());
      $file = Input::file('image');
     
       if ($file->isValid()) {
      $destinationPath = 'images'; // upload path
      $filename = $file->getClientOriginalName(); 
     
      Input::file('image')->move($destinationPath, $filename); // uploading file to given path
      $memes=new Meme;
      $memes->title=$request->title;
      $memes->type=$request->type;
      $memes->image=$filename;
      $memes->save();
      return Redirect::to('pickcross');
    }
    else {
      // sending back with error message.
     // Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('memes');
    }
      
      
    }
    
    public function pick(){
         $memes= Meme::all();
      
         return view('pickcrossDemo.pick', compact('memes'));
    }
    
    public function insertData()
{
    $logged_in_user = User::find(1);
    //return $logged_in_user->id;
     
   for( $x = 0; $x < 5; $x++ ) {
        $email = rand().'@gmail.com';
        $user = new User();
        $user->name = rand();
        $user->email=$email;
        $user->password = $email;
        $user->save();
          
        $logged_in_user->followers()->attach($user->id);
       if( $x > 5 ) {
           $logged_in_user->following()->attach($user->id);
     }
    } 
    /* 
    $photos = array(
        array(
            'user_id' => $logged_in_user->id,
            'location' => 'http://farm6.staticflickr.com/5044/5319042359_68fb1f91b4.jpg',
            'description' => 'Dusty Memories, The Girl in the Black Beret (http://www.flickr.com/photos/cloudy-day/)'
        ),
        array(
            'user_id' => $logged_in_user->id,
            'location' => 'http://farm3.staticflickr.com/2354/2180198946_a7889e3d5c.jpg',
            'description' => 'Rascals, Tannenberg (http://www.flickr.com/photos/tannenberg/)'
        ),
        array(
            'user_id' => $logged_in_user->id,
            'location' => 'http://farm7.staticflickr.com/6139/5922361568_85628771cd.jpg',
            'description' => 'Sunset, Funset, Nikko Bautista (http://www.flickr.com/photos/nikkobautista/)'
        )
    );
    $logged_in_user->photos()->save($photos);  
  */ 
    $photo = new Photo;
    $photo->user_id=$logged_in_user->id;
      $photo->location = 'http://farm6.staticflickr.com/5044/5319042359_68fb1f91b4.jpg';
            $photo->description = 'Dusty Memories, The Girl in the Black Beret (http://www.flickr.com/photos/cloudy-day/)';
    $photo->save();
    
    $photo1 = new Photo;
      $photo1->user_id=$logged_in_user->id;
      $photo1->location = 'http://farm3.staticflickr.com/2354/2180198946_a7889e3d5c.jpg';
            $photo1->description = 'Rascals, Tannenberg (http://www.flickr.com/photos/tannenberg/)';
    $photo1->save();
    
    $photo2 = new Photo;
      $photo2->user_id=$logged_in_user->id;
      $photo2->location = 'http://farm7.staticflickr.com/6139/5922361568_85628771cd.jpg';
            $photo2->description = 'Sunset, Funset, Nikko Bautista (http://www.flickr.com/photos/nikkobautista/)';
    $photo2->save();
}
    
    
}