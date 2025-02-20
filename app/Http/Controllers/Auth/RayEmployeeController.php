<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RayEmployeeLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RayEmployeeController extends Controller
{
    
        
    public function create()
    {
        return view('Dashboard.User.auth.signin');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(RayEmployeeLoginRequest $request): RedirectResponse
    {
       
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard.ray_employee', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */


    public function destroy(Request $request): RedirectResponse
    {
        // dd($request->all());

        Auth::guard('ray_employee')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
