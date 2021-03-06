<div class="col-md-12 topmenu">
    <a href="{{ route('AdminHome') }}" class="btn btn-white btn-primary {{ Request::is('administration') ? 'active' : '' }}">
        <i class="fa fa-home"></i> Home</a>
    <a href="{{ route('NewsIndex') }}" class="btn btn-white btn-primary {{ Request::is('administration/new*') ? 'active' : '' }}">
        <i class="fa fa-newspaper-o"></i> News</a>
    <a href="{{ route('CoursesIndex') }}" class="btn btn-white btn-primary {{ Request::is('administration/course*') ? 'active' : '' }}">
        <i class="fa fa-calendar"></i> Courses' Time</a>
    <a href="{{ route('PhotoGalleryIndex') }}" class="btn btn-white btn-primary {{ Request::is('administration/photo_gallery*') ? 'active' : '' }}">
        <i class="fa fa-image"></i> Photo Gallery</a>
    <a href="{{ route('PartnerIndex') }}" class="btn btn-white btn-primary {{ Request::is('administration/partner*') ? 'active' : '' }}">
        <i class="fa fa-user"></i> Partners</a>
    <a href="{{ route('ExpertsIndex') }}" class="btn btn-white btn-primary {{ Request::is('administration/expert*') ? 'active' : '' }}">
        <i class="fa fa-user"></i> Experts</a>
</div>