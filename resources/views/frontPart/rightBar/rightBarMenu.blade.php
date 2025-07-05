<style>
    .pm-menu {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .pm-menu li {
        margin-bottom: .5rem
    }

    .pm-menu li.has-sub>ul {
        display: none;
        padding-left: 1rem
    }

    .pm-menu li.open>ul {
        display: block !important;
        margin-top: .5rem !important;
        padding-left: 1.2rem !important
    }

    .pm-menu li.open>ul>li {
        margin-bottom: .3rem !important
    }

    .pm-menu>li>a {
        font-size: 1rem !important;
        font-weight: 600
    }

    .pm-menu li.open>ul>li>a {
        font-size: .9rem !important;
        font-weight: 400
    }

    .pm-menu a.active {
        color: #d10e0e !important;
        font-weight: bold !important
    }

    .pm-menu li.has-sub>a::after {
        content: "▸";
        float: right;
        transition: transform .2s
    }

    .pm-menu li.open>a::after {
        transform: rotate(90deg)
    }
</style>
<div class="sidelist">
    <h4>PROPERTY MANAGEMENT MENU</h4>
    <ul id="pm-menu" class="pm-menu">
        <li>
            <a class="{{ request()->routeIs('property-management.community-scheme-management') ? 'active' : '' }}"
                href="{{ route('property-management.community-scheme-management') }}">Community Scheme Management</a>
        </li>
        <li>
            <a class="{{ request()->routeIs('property-management.sectional-title-and-hoa-management.sectional-title-management') ? 'active' : '' }}"
                href="{{ route('property-management.sectional-title-and-hoa-management.sectional-title-management') }}">Sectional
                Title Management</a>
        </li>
        <li>
            <a class="{{ request()->routeIs('property-management.sectional-title-and-hoa-management.hoa-management') ? 'active' : '' }}"
                href="{{ route('property-management.sectional-title-and-hoa-management.hoa-management') }}">HOA
                Management</a>
        </li>
        <li>
            <a class="{{ request()->routeIs('property-management.body-corporate-management') ? 'active' : '' }}"
                href="{{ route('property-management.body-corporate-management') }}">Body Corporate Management</a>
        </li>

        <li
            class="has-sub {{ request()->routeIs('property-management.commercial-property-management*') ? 'open' : '' }}">
            <a href="{{ route('property-management.commercial-property-management') }}">Commercial Property
                Management</a>
            <ul>
                <li><a class="{{ request()->routeIs('property-management.commercial-property-management.commercial-landlord-services') ? 'active' : '' }}"
                        href="{{ route('property-management.commercial-property-management.commercial-landlord-services') }}">Landlord
                        Services</a></li>
                <li><a class="{{ request()->routeIs('property-management.commercial-property-management.commercial-tenant-services') ? 'active' : '' }}"
                        href="{{ route('property-management.commercial-property-management.commercial-tenant-services') }}">Tennant
                        Services</a></li>
                <li><a class="{{ request()->routeIs('property-management.commercial-property-management.commercial-brokering-services') ? 'active' : '' }}"
                        href="{{ route('property-management.commercial-property-management.commercial-brokering-services') }}">Brokering
                        Services</a></li>
                <li><a class="{{ request()->routeIs('online-services.online-applications.property-management-quote-request') ? 'active' : '' }}"
                        href="{{ route('online-services.online-applications.property-management-quote-request') }}">Online
                        Applications</a></li>
                <li><a class="{{ request()->routeIs('rent.vacancy-marketing') ? 'active' : '' }}"
                        href="{{ route('rent.vacancy-marketing') }}">Vacancy Marketing</a>
                </li>
            </ul>
        </li>

        <li
            class="has-sub {{ request()->routeIs(
                'property-management.estate-management',
                'property-management.hoa-estate-management',
                'property-management.golf-estate-management',
                'property-management.retirement-village-management',
                'property-management.caretaker-services',
                'property-management.sectional-title-and-hoa-management.financial-management',
                'property-management.property-management-service-provider',
            )
                ? 'open active'
                : '' }}">
            <a class="{{ request()->routeIs('property-management.estate-management') ? 'active' : '' }}"
                href="{{ route('property-management.estate-management') }}">Estate Management</a>
            <ul>
                <li><a class="{{ request()->routeIs('property-management.hoa-estate-management') ? 'active' : '' }}"
                        href="{{ route('property-management.hoa-estate-management') }}">HOA Estate Management</a></li>
                <li><a class="{{ request()->routeIs('property-management.golf-estate-management') ? 'active' : '' }}"
                        href="{{ route('property-management.golf-estate-management') }}">Golf Estate Management</a>
                </li>
                <li><a class="{{ request()->routeIs('property-management.retirement-village-management') ? 'active' : '' }}"
                        href="{{ route('property-management.retirement-village-management') }}">Retirement Village
                        Management</a></li>
                <li><a class="{{ request()->routeIs('property-management.caretaker-services') ? 'active' : '' }}"
                        href="{{ route('property-management.caretaker-services') }}">Caretaker Services</a></li>
                <li><a class="{{ request()->routeIs('property-management.sectional-title-and-hoa-management.financial-management') ? 'active' : '' }}"
                        href="{{ route('property-management.sectional-title-and-hoa-management.financial-management') }}">Financial
                        Management</a></li>
                <li><a class="{{ request()->routeIs('property-management.property-management-service-provider') ? 'active' : '' }}"
                        href="{{ route('property-management.property-management-service-provider') }}">Estate
                        Management
                        Services</a></li>
            </ul>
        </li>

        <li class="has-sub {{ request()->routeIs('managing-agent*') ? 'open' : '' }}">
            <a class="{{ request()->routeIs('managing-agent') ? 'active' : '' }}"
                href="{{ route('managing-agent') }}">Managing Agents</a>
            <ul>
                <li><a class="{{ request()->routeIs('managing-agent.property-management-agent') ? 'active' : '' }}"
                        href="{{ route('managing-agent.property-management-agent') }}">Property Management Agent</a>
                </li>
                <li><a class="{{ request()->routeIs('managing-agent.body-corporate-managing-agent') ? 'active' : '' }}"
                        href="{{ route('managing-agent.body-corporate-managing-agent') }}">Body Corporate Managing
                        Agent</a></li>
                <li><a class="{{ request()->routeIs('managing-agent.community-scheme-managing-agent') ? 'active' : '' }}"
                        href="{{ route('managing-agent.community-scheme-managing-agent') }}">Community Scheme Managing
                        Agent</a></li>
                <li><a class="{{ request()->routeIs('managing-agent.executive-managing-agent') ? 'active' : '' }}"
                        href="{{ route('managing-agent.executive-managing-agent') }}">Executive Managing Agent</a></li>
                <li><a class="{{ request()->routeIs('managing-agent.hoa-managing-agent') ? 'active' : '' }}"
                        href="{{ route('managing-agent.hoa-managing-agent') }}">HOA Managing Agent</a></li>
                <li><a class="{{ request()->routeIs('managing-agent.sectional-title-managing-agent') ? 'active' : '' }}"
                        href="{{ route('managing-agent.sectional-title-managing-agent') }}">Sectional Title Managing
                        Agent</a></li>
                <li><a class="{{ request()->routeIs('managing-agent.shareblock-managing-agents') ? 'active' : '' }}"
                        href="{{ route('managing-agent.shareblock-managing-agents') }}">Shareblock Managing Agent</a>
                </li>
                <li><a class="{{ request()->routeIs('managing-agent.homeowners-association-managing-agent') ? 'active' : '' }}"
                        href="{{ route('managing-agent.homeowners-association-managing-agent') }}">Homeowners
                        Association Managing Agent</a></li>
                <li><a class="{{ request()->routeIs('managing-agent.ema') ? 'active' : '' }}"
                        href="{{ route('managing-agent.ema') }}">EMA</a></li>
            </ul>
        </li>

        <li><a class="{{ request()->routeIs('property-management.property-management-company') ? 'active' : '' }}"
                href="{{ route('property-management.property-management-company') }}">Property Developer Services</a>
        </li>
        <li><a class="{{ request()->routeIs('property-management.property-management-service-provider') ? 'active' : '' }}"
                href="{{ route('property-management.property-management-service-provider') }}">Management Service
                Options</a></li>
        <li><a class="{{ request()->routeIs('online-services') ? 'active' : '' }}"
                href="{{ route('online-services') }}">Online Services</a></li>
        <li><a class="{{ request()->routeIs('managing-agent') ? 'active' : '' }}"
                href="{{ route('managing-agent') }}">Managing Agents</a></li>
        <li><a class="{{ request()->routeIs('property-management.faqs') ? 'active' : '' }}"
                href="{{ route('property-management.faqs') }}">FAQ's</a></li>
        {{-- <li><a class="{{ request()->routeIs('sectional-title-act-annexures') ? 'active' : '' }}"
                href="{{ route('sectional-title-act-annexures') }}">Sectional Title Act, Annexures</a></li> --}}
        {{-- <li><a class="{{ request()->routeIs('useful-property-management-links') ? 'active' : '' }}"
                href="{{ route('useful-property-management-links') }}">Useful Property Management Links</a></li> --}}
        {{-- <li><a class="{{ request()->routeIs('training-courses') ? 'active' : '' }}"
                href="{{ route('training-courses') }}">Training Courses</a></li> --}}
    </ul>
</div>


<script>
    document.querySelectorAll('#pm-menu li.has-sub>a').forEach(a => {
        a.addEventListener('click', e => {
            e.preventDefault()
            a.parentElement.classList.toggle('open')
        })
    })
    const active = document.querySelector('#pm-menu a.active')
    if (active) {
        const p = active.closest('li.has-sub')
        if (p) p.classList.add('open')
    }
</script>
