<form method="POST" action="/publishes">
    @csrf
    <textarea
        class="form-control"
        placeholder="What do you want to talk about?"
        name="body"
        required
    ></textarea>


    <div
        class="text-right">
        <button
            type="submit"
            class="btn btn-primary mt-md-2"
        >
            Post
        </button>
    </div>
    @error('body')
    <p class="text-sm-left text-danger pt-md-1 mx-md-3"> {{ $message }}</p>
    @enderror
</form>
