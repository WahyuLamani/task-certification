@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (isset(Auth::user()->certificate->usia))
                    <x-profile-detail/>
                    @else
                    <p>Anda Belum Melakukan Sertifikasi silakan klik <a href="{{route('sertifikasi')}}">link</a> Untuk
                        melakukan pendaftaran !!</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection