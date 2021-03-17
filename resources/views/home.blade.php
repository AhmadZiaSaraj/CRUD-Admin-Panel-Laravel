<x-home-master>
    @section('content')
        <h1>HOME: </h1>
        <!-- Blog Post -->
        <div class="row">

                @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <a href="{{ route('post', $post->id) }}">
                            <img class="card-img-top" src="{{ $post->featured_image }}" alt="Card image cap">
                        </a>

                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ Str::limit( $post->body, 150, '...' ) }}</p>
                            <a href="{{ route('post', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            <span>
                                Posted on: {{ $post->created_at->diffForHumans() }}
                            </span>
                                <span class="ml-1 mr-1">|</span>
                            <span>
                                <a href="#">{{ $post->user->name }}</a>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li>
        </ul>
    @endsection
</x-home-master>

