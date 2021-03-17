<x-admin-master>
    @section('admin-content')
        <h1>Create Post: </h1>

        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-inline">
                <label for="title" class="m-2">Title:</label>
                <input class="form-control m-2" type="text" name="title" id="title" placeholder="Post tittle...">
                <label for="featured_image" class="m-2">Featured Image:</label>
                <input class="form-control m-2" type="file" name="featured_image" id="featured_image">
            </div>

            <div class="form-group">
                <textarea class="form-control" rows="10" name="body" id="body"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary">Save Post</button>
            </div>
        </form>



        @endsection
</x-admin-master>
