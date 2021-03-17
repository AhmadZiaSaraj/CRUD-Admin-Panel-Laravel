<x-admin-master>
    @section('admin-content')
        <h1>Edit Post: </h1>

        <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-inline">
                <label for="title" class="m-2">Title:</label>
                <input class="form-control m-2" type="text" value="{{$post->title}}" name="title" id="title" placeholder="Post tittle...">
                <label for="featured_image" class="m-2">Featured Image:</label>
                <input class="form-control m-2" type="file" name="featured_image" id="featured_image">
                <div class="mb-5">
                    <img src="{{$post->featured_image}}" alt="{{$post->title}}" height="300px">
                </div>
            </div>

            <div class="form-group">
                <textarea class="form-control" rows="10" name="body" id="body">{{$post->body}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary">Save Post</button>
            </div>
        </form>



    @endsection
</x-admin-master>
