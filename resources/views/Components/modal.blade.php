<div class="modal fade" id="{{'modal'.$certificate->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <style>
                    .profile-img {
                        width: 200px;
                        height: 200px;
                        border-radius: 50%;
                        object-fit: cover;
                    }
                </style>
                <div class="text-center">
                    <img src="{{asset('storage/'.$certificate->photo_profile)}}" class="profile-img"
                        style="width: 450px; height: 450px;">
                </div>
                <iframe id="pdfIframe" src="{{asset('storage/'.$certificate->dok_ktp)}}" width="100%"
                    height="600px"></iframe>
                <iframe id="pdfIframe" src="{{asset('storage/'.$certificate->dok_ijazah)}}" width="100%"
                    height="600px"></iframe>
                <iframe id="pdfIframe" src="{{asset('storage/'.$certificate->dok_kesehatan)}}" width="100%"
                    height="600px"></iframe>
                <iframe id="pdfIframe" src="{{asset('storage/'.$certificate->dok_certif_training)}}" width="100%"
                    height="600px"></iframe>
                <iframe id="pdfIframe" src="{{asset('storage/'.$certificate->dok_certif_competention_one)}}"
                    width="100%" height="600px"></iframe>
                @if ($certificate->dok_other != null)
                <iframe id="pdfIframe" src="{{asset('storage/'.$certificate->dok_other)}}" width="100%"
                    height="600px"></iframe>
                @endif
            </div>
        </div>
    </div>
</div>