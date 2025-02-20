<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Http\Requests\Auth\LoginRequest;
use Filament\Forms\Components\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   

    
    public function create()
    {
        return view('Dashboard.User.auth.signin');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(AdminLoginRequest $request): RedirectResponse
    {
 
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard.admin', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */


    public function destroy(Request $request): RedirectResponse
    {

        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }



}
