<?php

namespace App\Http\Controllers;

use App\Models\CertificateSetting;
use Illuminate\Http\Request;

class CertificateSettingController extends Controller
{
    public function index()
    {
        $certificate = CertificateSetting::get()->first();

        return view('admin.pages.certificate.index', compact('certificate'));
    }
}
