<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
       aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-file-alt"></i>
        <span>Posts</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">posts:</h6>
            <a class="collapse-item" href="{{ route('post.create') }}"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Add New</a>
            <a class="collapse-item" href="{{ route( 'post.index' ) }}"><i class="fa fa-eye mr-2" aria-hidden="true"></i>Show Posts</a>
        </div>
    </div>
</li>
