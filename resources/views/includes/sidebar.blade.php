<h1 id="logo">
    <a href="{{ route('HomePage') }}"><img src="{{ asset('images/logo.png') }}" alt="{{ trans('ascension') }}"></a>
</h1>
<div id="menu-button">
    <div class="cursor">
        <div id="nav-button">
            <span class="nav-bar"></span>
            <span class="nav-bar"></span>
            <span class="nav-bar"></span>
        </div>
    </div>
</div>
<header>
    <nav id="main-nav" class="mt-50">
        <ul class="option-set clearfix" data-option-key="filter">
            <li><a href="{{ route('HomePage') }}" class="{{ Request::is('home*') || Request::is('/') ? 'active' : '' }}">{{ trans('locale.home') }}</a></li>
            <li>
                <a href="#" class="sub-nav-toggle {{ Request::is('training*') ? 'active' : '' }}">{{ trans('locale.training') }}</a>
                <ul class="sub-nav {{ Request::is('training*') ? '' : 'hidden' }}">
                    <li><a href="{{ route('CMAPage') }}" class="control {{ Request::is('*cma') ? 'active' : '' }}">{{ trans('locale.cma') }}</a></li>
                    <li><a href="{{ route('CPAPage') }}" class="control {{ Request::is('*cpa') ? 'active' : '' }}">{{ trans('locale.cpa') }}</a></li>
                    <li><a href="{{ route('CIAPage') }}" class="control {{ Request::is('*cia') ? 'active' : '' }}">{{ trans('locale.cia') }}</a></li>
                    <li><a href="{{ route('CFAPage') }}" class="control {{ Request::is('*cfa') ? 'active' : '' }}">{{ trans('locale.cfa') }}</a></li>
                    <li><a href="{{ route('CoursePage') }}" class="control {{ Request::is('*ascension_course') ? 'active' : '' }}">{{ trans('locale.ascension_courses') }}</a></li>
                    <li><a href="{{ route('ERSPage') }}" class="control {{ Request::is('*ascension_ers') ? 'active' : '' }}">{{ trans('locale.ascension').trans('locale.ers') }}</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="sub-nav-toggle {{ Request::is('consultancy*') ? 'active' : '' }}">{{ trans('locale.consultancy') }}</a>
                <ul class="sub-nav {{ Request::is('consultancy*') ? '' : 'hidden' }}">
                    <li><a href="{{ route('BookKeeping') }}" class="control {{ Request::is('*bookkeeping') ? 'active' : '' }}">{{ trans('locale.bookkeeping') }}</a></li>
                    <li><a href="{{ route('InformationSystem') }}" class="control {{ Request::is('*information_system') ? 'active' : '' }}">{{ trans('locale.information_system') }}</a></li>
                    <li><a href="{{ route('FeasibilityStudy') }}" class="control {{ Request::is('*feasibility_study') ? 'active' : '' }}">{{ trans('locale.feasibility_studies') }}</a></li>
                    <li><a href="{{ route('BusinessAdvisory') }}" class="control {{ Request::is('*business_advisory') ? 'active' : '' }}">{{ trans('locale.business_advisory') }}</a></li>
                    <li><a href="{{ route('NationalFunds') }}" class="control {{ Request::is('*national_fund') ? 'active' : '' }}">{{ trans('locale.national_fund') }} <span>
                    <img src="{{ asset('images/national_fund.png') }}" style="width: 30px;"></span></a></li>
                </ul>
            </li>
            <li><a href="{{ route('AboutPage') }}" class="{{ Request::is('aboutus') ? 'active' : '' }}">{{ trans('locale.about_us') }}</a></li>
            <li><a href="{{ route('CareersPage') }}" class="{{ Request::is('careers') ? 'active' : '' }}">{{ trans('locale.careers') }}</a></li>
            <li><a href="{{ route('ContactPage') }}" class="{{ Request::is('contactus') ? 'active' : '' }}">{{ trans('locale.contacts') }}</a></li>
        </ul>
    </nav>
</header>
