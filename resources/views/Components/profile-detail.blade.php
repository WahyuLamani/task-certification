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
    <img src="{{asset('storage/'.$certificate->photo_profile)}}" alt="Profile Picture" class="profile-img">
  </div>
  <div class="col-md-8">
    <h2>{{$certificate->user->name}}</h2>
    {!! $certificate->desc !!}
    <ul class="list-group">
      <li class="list-group-item">Status Sertifikasi: <span
          class="badge bg-{{$certificate->status == 'pending' ? 'warning' : 'success'}}">{{$certificate->status}}</span>
      </li>
    </ul>
    <div class="mt-3">
      <a href="#" data-bs-toggle="modal" data-bs-target="#{{'modal'.$certificate->id}}" class="btn btn-primary">Lihat
        Berkas</a>
    </div>
  </div>
</div>
<x-modal :certificate="$certificate" />