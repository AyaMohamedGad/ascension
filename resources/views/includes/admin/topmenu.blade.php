<div class="col-md-12 topmenu">
    <a href="{{ route('NewsIndex') }}" class="btn btn-white btn-primary {{ Request::is('administration/new*') ? 'active' : '' }}">
        <i class="fa fa-home"></i> News</a>
    <a href="#" class="btn btn-white btn-primary {{ Request::is('administration/course*') ? 'active' : '' }}">
        <i class="fa fa-gamepad"></i> Courses Time</a>
</div>