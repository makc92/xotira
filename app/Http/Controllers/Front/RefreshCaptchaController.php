<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mews\Captcha\Captcha;

class RefreshCaptchaController extends Controller
{

    public function __invoke(Request $request)
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
