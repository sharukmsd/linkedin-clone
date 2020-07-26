<div class="row border shadow-sm">
    <div class="col-12 text-center py-md-2 mt-md-3">
        <a href="{{route('profile', auth()->user())}}">
            <img src="https://i.pravatar.cc/150?u={{ auth()->user()->email }}"
                 class="rounded-circle border border-light shadow" height="72px" width="72px">
        </a>
    </div>

    <div class="col-12 text-center mt-md-3">
        <a href="{{route('profile', auth()->user())}}"  class="h6 text-decoration-none text-dark">
            <strong>{{ auth()->user()->name }}</strong>
        </a>
    </div>

    <div class="col-12 text-center">
        <p>Student at University of Management and Technology</p>
    </div>
</div>
