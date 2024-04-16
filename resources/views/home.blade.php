@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::user()->rules !== 'admin')
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
                    
                        @if (isset(Auth::user()->certificate->uploaded))
                        <x-profile-detail :user-id="Auth::user()->certificate->id"/>
                        @else
                        <p>Anda Belum Melakukan Sertifikasi silakan klik <a href="{{route('sertifikasi')}}">link</a> Untuk
                            melakukan pendaftaran !!</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
    @else
    <link rel="stylesheet" href=" https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

    <table id="example" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{'test'}}</td>
                <td><a href="#" class="btn btn-sm btn-primary">Lihat Berkas</a></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>View</th>
            </tr>
        </tfoot>
    </table>
    
    <script>
        new DataTable('#example');
    </script>

    @endif
</div>
@endsection