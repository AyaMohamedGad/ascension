<div class="col-md-12 topmenu">
    <a href="#" class="btn btn-white btn-primary {{ Request::is('admin/statistics') || Request::is('admin') ? 'active' : '' }}">
        <i class="fa fa-home"></i> News</a>
    <a href="#" class="btn btn-white btn-primary {{ Request::is('admin/journey*') ? 'active' : '' }}">
        <i class="fa fa-gamepad"></i> Courses Time</a>
</div>