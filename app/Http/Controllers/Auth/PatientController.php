<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PatientLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class PatientController extends Controller
{
       
    public function create()
    {
        return view('Dashboard.User.auth.signin');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(PatientLoginRequest $request): RedirectResponse
    {
    //    dd($request->all());
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard.patient', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */


    public function destroy(Request $request): RedirectResponse
    {

        Auth::guard('patient')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
