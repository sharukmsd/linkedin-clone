<div class="border shadow-sm px-md-5 py-md-4 mt-md-2">
    <div class="row mt-0 pt-0">
        <a href="{{route('profile', $post->user)}}">
            <img src="https://i.pravatar.cc/150?u={{ $post->user->email }}" class="rounded-circle" height="48px"
                 width="48px">
        </a>
        <a href="{{route('profile', $post->user)}}"  class="pt-md-2 ml-md-2 text-decoration-none text-dark">
            <strong>{{ $post->user->name }}</strong>
        </a>
    </div>
    <div class="row p-md-2">
        <p>{{ $post->body }}</p>
    </div>
</div>
