<?php namespace App\Http\Controllers;

use App\Models\User as User;

/**
 * Class UserController
 * @author Scott Wilcox <scott@dor.ky>
 * @website http://github.com/ssx
 * @website http://dor.ky
 * @package App\Http\Controllers
 */
class UserController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the leaderboard
     *
     * @return Response
     */
    public function getIndex()
    {
        $Users = User::orderBy('count_followers', 'DESC')->get();
        return \View::make("home")->with("Users", $Users);
    }

    /**
     * Show the add yourself form
     *
     * @return Response
     */
    public function getSubmit()
    {
        return \View::make("submit");
    }
}
