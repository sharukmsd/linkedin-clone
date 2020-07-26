<div class="row border shadow-sm p-md-1">
    <div class="col-12 py-md-2">
        <h6>Add to your feed</h6>
    </div>

    <div class="col-12 py-md-1">
        <div class="row">
            <div class="col-md-2 px-md-1">
                <a href="{{route('profile', $user->id.'')}}">
                    <img src="https://i.pravatar.cc/150?u={{ $user->email }}"
                         class="rounded-circle border border-light shadow" height="48px" width="48px">
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{route('profile', $user->id.'')}}" class="h6 text-decoration-none text-dark">
                    <strong>{{ $user->name }}</strong>
                </a>
                <p class="two-line pt-0"><small>Student at University of Management and Technology</small></p>
            </div>

            <div class="col-md-4 px-md-1 py-md-2">
                <button class="btn btn-outline-primary">+ Follow</button>
            </div>
        </div>
    </div>


</div>
