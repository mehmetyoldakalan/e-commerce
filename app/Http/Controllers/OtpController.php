<?php

namespace App\Http\Controllers;

use App\Models\OtpToken;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OtpController extends Controller
{
    private int $userId;

    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->userId = Auth::user()->id;
            return $next($request);
        });
    }

    public function index():View
    {
        return view('auth.otp');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => 'required'
        ]);

        $userToken = OtpToken::query()->where('user_id', $this->userId)->where('token', $request->token)->first();

        if ($userToken) {
            Session::put('user_otp', $this->userId);
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        return back()->withErrors(['error' => __('invalid_otp_token')]);
    }

    /**
     * @throws Exception
     */
    public function resend(): RedirectResponse
    {
        (new User())->generateOtp();
        return back()->with('status', __('otp_sent'));
    }
}
