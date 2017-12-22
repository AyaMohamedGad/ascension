<div class="col-md-12 topmenu">
    <a href="{{ route('NewsIndex') }}" class="btn btn-white btn-primary {{ Request::is('administration/new*') ? 'active' : '' }}">
        <i class="fa fa-newspaper-o"></i> News</a>
    <a href="#" class="btn btn-white btn-primary {{ Request::is('administration/course*') ? 'active' : '' }}">
        <i class="fa fa-calendar"></i> Courses Time</a>
    <a href="{{ route('PhotoGalleryIndex') }}" class="btn btn-white btn-primary {{ Request::is('administration/photo_gallery*') ? 'active' : '' }}">
        <i class="fa fa-image"></i> Photo Gallery</a>
</div>