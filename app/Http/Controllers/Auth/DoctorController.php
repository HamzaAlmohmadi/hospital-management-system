<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\DoctorLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    
    public function create()
    {
        return view('Dashboard.User.auth.signin');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(DoctorLoginRequest $request): RedirectResponse
    {
       
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard.doctor', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */


    public function destroy(Request $request): RedirectResponse
    {


        Auth::guard('doctor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
