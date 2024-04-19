@extends('layouts.app')

@section('content')
<x-banner/>
<div class="container py-3">

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-12">
            <h3 class="fw-bold">Hallo, {{Auth::user()->name}}</h3>
            <h6 class="fw-bold">Layanan Sertifikasi Online</h6>
            @if(Auth::user()->rules !== 'admin')
            @if (isset(Auth::user()->certificate->uploaded))
            <x-profile-detail :certificate-id="Auth::user()->certificate->id" />
            @else
            <div class="row gap-2">
                <div class="card text-center" style="width: 12rem; height: 7rem;">
                    <a href="{{route('sertifikasi')}}" style="text-decoration: none">
                        <div class="card-body">
                            <p class="fw-bold mt-4"><small class="text-muted">Kecakapan Awak Kapal</small></p>
                        </div>
                    </a>
                </div>
                <div class="card text-center" style="width: 12rem; height: 7rem;">
                    <div class="card-body">
                        <p class="mt-4"><small class="text-muted">Segera Hadir</small></p>
                    </div>
                </div>
            </div>
            @endif
            @else
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
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
                    
                </div>
            </div>
            @endif
        </div>
    </div>
   
</div>
@endsection