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

    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'image' => 'required|image'
        ]);

        CertificateSetting::create($data);

        return redirect()->route('certificate.index');
    }

    public function edit($id)
    {
        $certificate = CertificateSetting::findOrFail($id);

        return view('admin.pages.certificate.edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image'
        ]);

        $data = CertificateSetting::find($id);

        if ($request->file('image') !== null ) {
            $image = $request->file('image')->store('assets/certificate','public');
        }else{
            $image = $data->image;
        }

        $data->update([
            'image' => $image
        ]);

        return redirect()->route('certificate.index');
    }

}
