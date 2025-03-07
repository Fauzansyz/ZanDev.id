<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
  /**
  * Middleware yang berjalan secara global.
  */
  protected $middleware = [
    /*\App\Http\Middleware\VerifyCsrfToken::class,*/
    \Illuminate\Http\Middleware\TrustProxies::class,
    \App\Http\Middleware\HandleCors::class,
    // Tambahkan jika ingin CORS berjalan global
    \Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance::class,
    \Illuminate\Http\Middleware\ValidatePostSize::class,
    \Illuminate\Http\Middleware\TrimStrings::class,
    \Illuminate\Http\Middleware\ConvertEmptyStringsToNull::class,
  ];

  /**
  * Middleware groups.
  */
  protected $middlewareGroups = [
    'web' => [
      \App\Http\Middleware\EncryptCookies::class,
      \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
      \Illuminate\Session\Middleware\StartSession::class,
      \Illuminate\View\Middleware\ShareErrorsFromSession::class,
      /*\App\Http\Middleware\VerifyCsrfToken::class,*/
      \Illuminate\Routing\Middleware\SubstituteBindings::class,
      \App\Http\Middleware\HandleCors::class,
    ],

    'api' => [
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
      'throttle:api',
      \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
  ];

  /**
  * Middleware route.
  */
  protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
    'can' => \Illuminate\Auth\Middleware\Authorize::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
    'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
    'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
  ];
];
}