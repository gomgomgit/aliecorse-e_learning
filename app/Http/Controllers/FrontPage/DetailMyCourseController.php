<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailMyCourseController extends Controller
{
    public function index()
    {
        return view('front-page.detail-course');
    }
}
