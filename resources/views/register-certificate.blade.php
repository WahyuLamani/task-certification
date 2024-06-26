@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-12">
            <div class="card">
                <div class="card-header">Daftar Sertifikasi</div>
                <div class="card-body">
                    @if ($message = Session::get('error'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <form action="{{route('submit.certificate')}}" method="post" enctype="multipart/form-data">@csrf
                        <div class="row mb-3 gap-3">
                            <label for="telepon" class="col-md-4 col-form-label text-md-end">Telepon</label>
                            <div class="col-md-6">
                                <input id="telepon" type="text"
                                    class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                                    value="{{ old('telepon') }}" autocomplete="telepon" autofocus>
                                @error('telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="ktp" class="col-md-4 col-form-label text-md-end">Upload KTP</label>
                            <div class="col-md-6">
                                <input id="ktp" type="file" class="form-control @error('ktp') is-invalid @enderror"
                                    name="ktp" value="{{ old('ktp') }}" autocomplete="ktp" autofocus>
                                <small class="form-text text-muted"><i>*)Kartu Tanda Penduduk <b>.pdf</b></i></small>
                                @error('ktp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="ijazah" class="col-md-4 col-form-label text-md-end">Upload Ijazah</label>
                            <div class="col-md-6">
                                <input id="ijazah" type="file"
                                    class="form-control @error('ijazah') is-invalid @enderror" name="ijazah"
                                    value="{{ old('ijazah') }}" autocomplete="ijazah" autofocus>
                                <small class="form-text text-muted"><i>*)Ijazah Pendidikan
                                        terakhir <b>.pdf</b></i></small>
                                @error('ijazah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="photo" class="col-md-4 col-form-label text-md-end">Photo Profile</label>
                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror"
                                    name="photo" value="{{ old('photo') }}" autocomplete="photo">
                                <small id="inputNote" class="form-text text-muted"><i>*)foto selfie atau pas
                                        photo <b>.jpg,png,jpeg</b></i></small>
                                @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="doc_mcu" class="col-md-4 col-form-label text-md-end">Upload Hasil medical check
                                up</label>
                            <div class="col-md-6">
                                <input id="doc_mcu" type="file"
                                    class="form-control @error('doc_mcu') is-invalid @enderror" name="doc_mcu"
                                    value="{{ old('doc_mcu') }}" autocomplete="doc_mcu" autofocus>
                                <small id="inputNote" class="form-text text-muted"><i>*)Hasil tes kesehatan /
                                        SKS<b> .pdf</b></i></small>
                                @error('doc_mcu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <label for="doc_trening" class="col-md-4 col-form-label text-md-end">Upload Sertifikat Basic
                                traning</label>
                            <div class="col-md-6">
                                <input id="doc_trening" type="file"
                                    class="form-control @error('doc_trening') is-invalid @enderror" name="doc_trening"
                                    value="{{ old('doc_trening') }}" autocomplete="doc_trening" autofocus>
                                <small id="inputNote" class="form-text text-muted"><i>*)Basic Safety Training <b>
                                            .pdf</b></i> (BST
                                    KLM)</small>
                                @error('doc_trening')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="doc_certif" class="col-md-4 col-form-label text-md-end">Upload Sertifikat
                                Kompetensi</label>
                            <div class="col-md-6">
                                <input id="doc_certif" type="file"
                                    class="form-control @error('doc_certif') is-invalid @enderror" name="doc_certif"
                                    value="{{ old('doc_certif') }}" autocomplete="doc_certif" autofocus>
                                <small id="inputNote" class="form-text text-muted"><i>*)kompetensi pengawakan kapal
                                        dengan tonase kurang dari GT 7 di Dermaga UPTD LLASDP<b> .pdf</b> meliputi :
                                        <ul>
                                            <li>Pengalaman kerja</li>
                                            <li>Pengendalian kapal</li>
                                            <li>Pemahaman kenavigasian</li>
                                            <li>sistem pemuatan</li>
                                            <li>pemahaman alat-alat K3 dalam kapal</li>
                                        </ul>
                                    </i>
                                </small>
                                @error('doc_certif')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="doc_other" class="col-md-4 col-form-label text-md-end">Upload Dokumen Pendukung
                                lainnya</label>
                            <div class="col-md-6">
                                <input id="doc_other" type="file"
                                    class="form-control @error('doc_other') is-invalid @enderror" name="doc_other"
                                    value="{{ old('doc_other') }}" autocomplete="doc_other" autofocus>
                                <small id="inputNote" class="form-text text-muted"><i>*)jika memiliki sertifikat
                                        lain</i></small>
                                @error('doc_other')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>
                            <label for="desc" class="col-md-4 col-form-label text-md-end">Deskripsikan Diri Anda</label>
                            <div class="col-md-6">
                                <textarea name="desc" id="editor" cols="100" rows="10"></textarea>
                            </div>
                            <script>
                                ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                            </script>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Daftar Sekarang !!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection