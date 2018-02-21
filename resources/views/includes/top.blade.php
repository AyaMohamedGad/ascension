<div class="container clearfix">
<div class="social_media social-list clearfix">
	<div class="right-align">
		<a href="https://www.facebook.com/Ascension-Consulting-and-Training-143527592978917/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
	    <a href="https://www.linkedin.com/company/ascension_ct/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
	    <a href="https://www.instagram.com/ascension_ct/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	    <a href="https://www.youtube.com/channel/UClAICI0h0twpKmYusAYzq3A/featured?view_as=subscriber" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
	    <a href="https://twitter.com/ascension_CT" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
	</div>
    <a class="language" href="{{ route('setLanguage', app()->getLocale() == 'en' ? 'ar' : 'en') }}" @if(app()->getLocale() == 'en') style="font-family: 'Changa', sans-serif;" @endif>{{ App::getLocale() == 'en' ? 'عربي' : 'English' }}</a>
</div>
</div>