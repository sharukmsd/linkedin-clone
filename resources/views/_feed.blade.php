<div>
    @include('_publish-post')
</div>

<hr>

<div>
    @foreach($posts as $post)
        @include('_post')
    @endforeach

</div>
