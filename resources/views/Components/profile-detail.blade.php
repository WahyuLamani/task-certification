<style>
    .profile-img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
<div class="row">
    <div class="col-md-4 text-center">
    <img src="{{asset('storage/'.$user->photo_profile)}}" alt="Profile Picture" class="profile-img">
    </div>
    <div class="col-md-8">
    <h2>{{$user->user->name}}</h2>
    {!! $user->desc !!}
    <ul class="list-group">
        <li class="list-group-item">Status Sertifikasi: <span class="badge bg-{{$user->status == 'pending' ? 'warning' : 'success'}}">{{$user->status}}</span></li>
    </ul>
    <div class="mt-3">
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Lihat Berkas</a>
    </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <iframe id="pdfIframe" src="{{asset('storage/'.$user->dok_ktp)}}" width="100%" height="600px"></iframe>
            <iframe id="pdfIframe" src="{{asset('storage/'.$user->dok_ijazah)}}" width="100%" height="600px"></iframe>
            <iframe id="pdfIframe" src="{{asset('storage/'.$user->dok_kesehatan)}}" width="100%" height="600px"></iframe>
            <iframe id="pdfIframe" src="{{asset('storage/'.$user->dok_certif_training)}}" width="100%" height="600px"></iframe>
            <iframe id="pdfIframe" src="{{asset('storage/'.$user->dok_certif_competention_one)}}" width="100%" height="600px"></iframe>
            @if ($user->dok_other != null)
                <iframe id="pdfIframe" src="{{asset('storage/'.$user->dok_other)}}" width="100%" height="600px"></iframe>
            @endif
        </div>
      </div>
    </div>
  </div>