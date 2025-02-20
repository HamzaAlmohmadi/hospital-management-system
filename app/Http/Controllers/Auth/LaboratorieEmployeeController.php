<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LaboratorieEmployeeLoginRequest;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;

class LaboratorieEmployeeController extends Controller
{
    
    public function create()
    {
        return view('Dashboard.User.auth.signin');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LaboratorieEmployeeLoginRequest $request): RedirectResponse
    {
       
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard.laboratorie_employee', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */


    public function destroy(Request $request): RedirectResponse
    {
         // dd($request->all());

        Auth::guard('laboratorie_employee')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
