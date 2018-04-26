<?php

namespace App\Http\Controllers;

use App\Events\StatusLiked;
use App\Notification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Not;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test(){
        //Persist data in DataBase
        $notif = new Notification();
            $notif->user_id_from = 1;
            $notif->title = "Like ur avatar";
            $notif->body = "Extra description here";
        $notif->save();

        //Creating Collection
        $data = new Collection();
        $data->put('notification', $notif);
        $data->put('user_from', User::first());

        //Announce a new notification
        event(new StatusLiked($data));

            return $data;
    }

    public function getNotif(){
        return ['status' => 'OK', 'data' => Notification::where('read', false)->get()];
    }

    public function delNotif(Request $request){
        $notifications = $request->data;
        for($i=0; $i<count($request->data); $i++)
        {
            $notif = Notification::find($notifications[$i]['id']);
            $notif->read = true;
            $notif->save();
        }

        return ['status' => 'OK'];
    }

}
