<div class="border shadow-sm p-md-5 mt-md-2">
    <div class="row">
        <img src="https://i.pravatar.cc/150?u={{ $post->user->email }}" class="rounded-circle" height="48px"
             width="48px">

        <h6 class="col-md-10 pt-md-3 px-md-2"><strong>{{ $post->user->name }}</strong></h6>
    </div>
    <div class="row p-md-2">
        <p>{{ $post->body }}</p>
    </div>
</div>
