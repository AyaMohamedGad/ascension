<div class="container clearfix">
<div class="social_media social-list clearfix container">
	<div class="right-align">
		<a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
	    <a href="#" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
	    <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	    <a href="#" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
	    <a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>	
	</div>
    <a class="language" href="{{ route('setLanguage', app()->getLocale() == 'en' ? 'ar' : 'en') }}" @if(app()->getLocale() == 'en') style="font-family: 'Changa', sans-serif;" @endif>{{ App::getLocale() == 'en' ? 'عربى' : 'English' }}</a>
</div>
</div>