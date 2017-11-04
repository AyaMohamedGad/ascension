<h1 id="logo">
    <a href="{{ route('HomePage') }}"><img src="{{ asset('images/logo.png') }}" alt="{{ trans('ascension') }}"></a>
</h1>
<div id="menu-button">
    <div class="cursor">
        <!--Menu-->
        <div id="nav-button">
            <span class="nav-bar"></span>
            <span class="nav-bar"></span>
            <span class="nav-bar"></span>
        </div>
    </div>
</div>
<header>
    <nav id="main-nav">
        <ul class="option-set clearfix" data-option-key="filter">
            <li><a href="#" class="active">{{ trans('locale.home') }}</a></li>
            <li><a href="#" class="sub-nav-toggle">{{ trans('locale.training') }}</a>
                <ul id="options" class="sub-nav">
                    <li><a href="{{ route('HomePage') }}" class="control">{{ trans('locale.cma') }}</a></li>
                    <li><a href="{{ route('CPAPage') }}" class="control">{{ trans('locale.cpa') }}</a></li>
                    <li><a href="#" class="control">{{ trans('locale.cia') }}</a></li>
                    <li><a href="#" class="control">{{ trans('locale.cfa') }}</a></li>
                    <li><a href="{{ route('CoursePage') }}" class="control">{{ trans('locale.ascension_courses') }}</a></li>
                    <li><a href="{{ route('ERSPage') }}" class="control">{{ trans('locale.ascension').trans('locale.ers') }}</a></li>
                </ul>
            </li>
            <li><a href="#" class="sub-nav-toggle">{{ trans('locale.consultancy') }}</a>
                <ul id="options" class="sub-nav">
                    <li><a href="{{ route('BookKeeping') }}" class="control">{{ trans('locale.bookkeeping') }}</a></li>
                    <li><a href="#" class="control">{{ trans('locale.information_system') }}</a></li>
                    <li><a href="#" class="control">{{ trans('locale.feasibility_studies') }}</a></li>
                    <li><a href="#" class="control">{{ trans('locale.business_advisory') }}</a></li>
                    <li><a href="#" class="control">{{ trans('locale.national_fund') }} <span>
                    <img src="{{ asset('images/national_fund.png') }}" style="width: 30px;"></span></a></li>
                </ul>
            </li>
            <li><a href="#">{{ trans('locale.about_us') }}</a></li>
            <li><a href="#">{{ trans('locale.careers') }}</a></li>
            <li><a href="{{ route('ContactPage') }}">{{ trans('locale.contacts') }}</a></li>
        </ul>
    </nav>
</header>
