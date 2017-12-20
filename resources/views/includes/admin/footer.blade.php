<div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
			<span class="bigger-120">
				All Rights Reserved &copy; <span class="blue bolder">Ascension</span>
			</span>
        </div>
    </div>
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>

<script src="//code.jquery.com/jquery.js"></script>
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
{!! Html::script('js/app.js') !!}
{!! Html::script('js/ace-extra.min.js') !!}
{!! Html::script('js/jquery.dataTables.min.js') !!}
{!! Html::script('js/jquery.dataTables.bootstrap.min.js') !!}
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<!-- page specific plugin scripts -->
<!-- ace scripts -->
{!! Html::script('js/ace-elements.min.js') !!}
{!! Html::script('js/ace.min.js') !!}

<script>
    $(document).ready(function() {
        $('#loading').hide();
    });
</script>
@yield('scripts')