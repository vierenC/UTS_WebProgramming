<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\CoffeeCategory;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    // CHANGE VALUE BETWEEN 1 AND 2 FOR CHANGING USERS
    public static $current_user_id = 1;

    public function home(){
        return view('home',
            [
                'greet' => $this->greet(),
                'loyalty'=> $this->loyalty(),
                'user_name' => $this->user_name(),
                'stars' => $this->stars()
            ]);
    }

    public function index(Request $request){

        $selected = $request->id;
        $categories = CoffeeCategory::all();

        return view('coffee')->with([
            "categories"=> $categories,
            "selected"=> $selected ?: 1,
            'greet' => $this->greet(),
            'loyalty'=> $this->loyalty(),
            'user_name' => $this->user_name()
        ]);
    }

    public function transaction(Request $request){
        return view('transaction')->with([
            'transactions' => User::find(self::$current_user_id)->transactions,
            'greet' => $this->greet(),
            'loyalty'=> $this->loyalty(),
            'user_name' => $this->user_name()
        ]);
    }

    public function buy(Request $request){
        $user = User::find(self::$current_user_id);

        $user->stars = $user->stars + floor(Coffee::find($request->coffee_id)->price / 10000);
        $user->save();

        Transaction::create([
            "user_id" => self::$current_user_id,
            "coffee_id" => $request->coffee_id
        ]);

        return redirect("transaction");
    }

    public function stars(){
        $user = User::find(self::$current_user_id);
        return $user->stars;
    }

    public function loyalty(){
        $user = User::find(self::$current_user_id);
        return $user->loyalty;
    }

    public function user_name(){
        $user = User::find(self::$current_user_id);

        return $user->name;
    }

    public function greet(){

        // WAKTU INDONESIA BARAT
        $currentTime = intval(date('H')) + 7;

        if ($currentTime >= 5 && $currentTime <= 11) {
            $greeting = 'Good morning';
        } else if ($currentTime >= 12 && $currentTime <= 17) {
            $greeting = 'Good afternoon';
        } else {
            $greeting = 'Good evening';
        }

        $message = $greeting . ',';

        return $message;
    }

}


