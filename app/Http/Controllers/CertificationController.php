<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CertificationController extends Controller
{
    public function index() {
        return view('register-certificate');
    }

    public function store(Request $request) {
        $request->validate([
            'telepon' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'ktp' => ['required','mimes:pdf','max:2048'],
            'ijazah' => ['required','mimes:pdf','max:2048'],
            'photo' => ['required','mimes:jpg,png,jpeg','max:2048'],
            'doc_mcu' => ['required','mimes:pdf','max:2048'],
            'doc_trening' => ['required','mimes:pdf','max:2048'],
            'doc_certif' => ['required','mimes:pdf','max:2048'],
            'doc_other' => ['mimes:pdf','max:2048'],
        ]);
        
        $ktp = $request->file('ktp');
        $ijazah = $request->file('ijazah');
        $photo = $request->file('photo');
        $doc_mcu = $request->file('doc_mcu');
        $doc_trening = $request->file('doc_trening');
        $doc_certif = $request->file('doc_certif');
        $doc_other = $request->file('doc_other');
        try{
            $pathKtp = $ktp->storeAs('ktp', Str::slug($request->user()->name).'-'. uniqid().'.'.$ktp->extension(), ['disk' => 'public']);
            $pathIjazah = $ijazah->storeAs('ijazah', Str::slug($request->user()->name).'-'. uniqid().'.'.$ijazah->extension(), ['disk' => 'public']);
            $pathPhoto = $photo->storeAs('profile', Str::slug($request->user()->name).'-'. uniqid().'.'.$photo->extension(), ['disk' => 'public']);
            $pathMcu = $doc_mcu->storeAs('medical-check-up', Str::slug($request->user()->name).'-'. uniqid().'.'.$doc_mcu->extension(), ['disk' => 'public']);
            $pathTrening = $doc_trening->storeAs('certificate/training', Str::slug($request->user()->name).'-'. uniqid().'.'.$doc_trening->extension(), ['disk' => 'public']);
            $pathCertif = $doc_certif->storeAs('certificate/kompetention', Str::slug($request->user()->name).'-'. uniqid().'.'.$doc_certif->extension(), ['disk' => 'public']);
            if ($request->file('doc_other') == null) {
                $pathOther = "";
            }else{
                $pathOther = $doc_other->storeAs('other', Str::slug($request->user()->name).'-'. uniqid().'.'.$doc_other->extension(), ['disk' => 'public']);
            }

        }catch(Exception $e){
            return redirect()->back()->with('error',$e);
        }
        Auth::user()->certificate()->create([
            'telepon' => $request->telepon,
            'dok_ktp' => $pathKtp,
            'dok_ijazah' => $pathIjazah,
            'photo_profile' => $pathPhoto,
            'dok_kesehatan'=> $pathMcu,
            'dok_certif_training' => $pathTrening,
            'dok_certif_competention_one' => $pathCertif,
            'dok_other' => $pathOther,
            'desc' => $request->desc,
        ]);

        return redirect()->to('/');

    }
}
