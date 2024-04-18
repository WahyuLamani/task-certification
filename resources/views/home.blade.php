@extends('layouts.app')

@section('content')
<x-banner/>
<div class="container py-3">

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
                    @if(Auth::user()->rules !== 'admin')
                    @if (isset(Auth::user()->certificate->uploaded))
                    <x-profile-detail :certificate-id="Auth::user()->certificate->id" />
                    @else
                    <p>Anda Belum Melakukan Sertifikasi silakan klik <a href="{{route('sertifikasi')}}">link</a> Untuk
                        melakukan pendaftaran !!</p>
                    @endif
                    @else
                    <link rel="stylesheet" href=" https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
                    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
                    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

                    <table id="example" class="display table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @if (!isset($user->certificate->uploaded))
                                <td><span class="badge bg-secondary">User belum mengajukan sertifikasi</span></td>
                                <td></td>
                                @else
                                <td>{{$user->certificate->telepon}}</td>
                                <td><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#{{'modal'.$user->certificate->id}}"
                                        class="btn btn-sm btn-primary">Lihat Berkas</a></td>
                            </tr>
                            <x-modal :certificate="$user->certificate" />
                            @endif

                            @endforeach
                        </tbody>
                    </table>

                    <script>
                        new DataTable('#example');
                    </script>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
@endsection