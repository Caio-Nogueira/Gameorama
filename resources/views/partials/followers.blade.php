<div class="modal fade" id="modalFollowers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Followers</h5>
                <button type="button" data-bs-dismiss="modal" id="close-window-button" aria-label="Close"><span
                        class="material-icons-round">close</span></button>
            </div>
            <div class="modal-body">
                <div class="profiles-container">
                    @foreach ($followers as $follower)
                        <div class="profile-container d-flex justify-content-between mb-2">
                            <div class="d-flex">
                                <img src="{{ asset('storage/members/'.$follower->avatar_image) }}" class="flex-shrink-0 rounded-circle"
                                    style="width:50px;height:50px;" alt="">
                                <div class="ms-2">
                                    <h1 class="h5 fw-normal">{{$follower->username}}</h1>
                                    <p class="h6 fw-normal">{{$follower->aura}} Aura Score</p>
                                </div>
                            </div>
                            <div>
                            @auth
                                @if (!$follower->isMe(Auth::user()->id))
                                    @if ((Auth::user()->isFollowing($follower->id)) != null)
                                        <button type="button" data-id = {{$follower->username}}
                                            class="following-button btn btn-outline-primary col-12 mb-1"> 
                                        </button>
                                    @else
                                        <button type="button" data-id = {{$follower->username}}
                                            class="follow-button btn btn-outline-primary col-12 mb-1">
                                        </button>
                                    @endif
                                @endif
                            @endauth
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
