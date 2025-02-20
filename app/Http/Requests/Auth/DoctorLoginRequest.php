<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;



class DoctorLoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (!auth('doctor')->attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('Dashboard/auth.failed'),
                
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    
    // public function authenticate(): void
    // {
    //     $this->ensureIsNotRateLimited();

    //     // تحقق من وجود البريد الإلكتروني
    //     $emailExists = Admin::where('email', $this->input('email'))->exists();

    //     if (!$emailExists) {
    //         // إذا كان البريد الإلكتروني غير موجود
    //         RateLimiter::hit($this->throttleKey());

    //         throw ValidationException::withMessages([
              
    //             'email' => (trans('Dashboard/auth.failed')),
    //         ]);
    //     }

    //     // محاولة تسجيل الدخول
    //     if (!auth('admin')->attempt($this->only('email', 'password'), $this->boolean('remember'))) {
    //         RateLimiter::hit($this->throttleKey());

    //         throw ValidationException::withMessages([
    //             'password' => (trans('Dashboard/auth.failed')),
                
    //         ]);
    //     }

    //     // إذا نجح تسجيل الدخول، قم بإزالة قيود الـ RateLimiter
    //     RateLimiter::clear($this->throttleKey());
    // }





    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('email')) . '|' . $this->ip());
    }
}
