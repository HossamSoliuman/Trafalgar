 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('storage/profileImage/'.Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">  {{ ucfirst(Auth::user()->name) }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!--<div class="form-inline">-->
      <!--  <div class="input-group" data-widget="sidebar-search">-->
      <!--    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">-->
      <!--    <div class="input-group-append">-->
      <!--      <button class="btn btn-sidebar">-->
      <!--        <i class="fas fa-search fa-fw"></i>-->
      <!--      </button>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!-- Sidebar Menu -->
      <!--{{ (Request::is('users') || Request::is('users/*') ? 'active open' : '') }}-->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="{{ route('admin.dashboard')}}" class="nav-link  {{ (Request::is('admin/dashboard')? 'active' : '') }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{ route('admin.contactus.index')}}" class="nav-link  {{ (Request::is('admin/contactus')? 'active' : '') }}">
             <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
             <i class='far fa-address-card'></i>
              <p>
                Contact us
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{ route('admin.agent-contact-list')}}" class="nav-link  {{ (Request::is('admin/agent-contact-list')? 'active' : '') }}">
             <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
             <i class='far fa-address-card'></i>
              <p>
                Agent contact list
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
          
           <li class="nav-item">
            <a href="{{ route('admin.agent-contact-for-property')}}" class="nav-link  {{ (Request::is('admin/agent-contact-for-property')? 'active' : '') }}">
             <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
             <i class='far fa-address-card'></i>
              <p>
                 Agent contact list for Property
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{ route('admin.user')}}" class="nav-link  {{ (Request::is('admin/user')? 'active' : '') }}">
            <i class='fas fa-user-alt'></i>
              <p>
                Users
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
            <li class="nav-item">
            <a href="{{ route('admin.propertysolution.index')}}" class="nav-link  {{ (Request::is('admin/propertysolution') || Request::is('admin/propertysolution/*'))? 'active' : '' }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Property Solution
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
          
          
           <li class="nav-item">
            <a href="{{ route('admin.importproperty.index')}}" class="nav-link  {{ (Request::is('admin/importproperty')? 'active' : '') }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Import property from Baseapi Entegral Api
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.syncapi.index')}}" class="nav-link  {{ (Request::is('admin/syncapi')? 'active' : '') }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Import property from Sync Api
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
            <li class="nav-item">
            <a href="{{ route('admin.importagents.index')}}" class="nav-link  {{ (Request::is('admin/importagents')? 'active' : '') }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Import Baseapi Entegral Agents
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('admin.syncapiimportagents.index') }}" class="nav-link  {{ (Request::is('admin/syncapiimportagents')? 'active' : '') }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Import Sync Api Agents
               
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="{{ route('admin.password')}}" class="nav-link  {{ (Request::is('admin/password')? 'active' : '') }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Change password
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
          
             <li  class="nav-item {{ (Request::is('admin/pagemanagement/*') 
             || Request::is('admin/custom-page/*') || Request::is('admin/custom-sub-page/*'))? 'menu-is-opening menu-open' : '' }} ">
            <a href="#" class="nav-link {{ (Request::is('admin/pagemanagement/*'))? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Page Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.pagemanagement.terms-conditions')}}" class="nav-link  {{ (Request::is('admin/pagemanagement/terms-conditions'))? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terms conditions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pagemanagement.disclaimer')}}" class="nav-link  {{ (Request::is('admin/pagemanagement/disclaimer'))? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Disclaimer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pagemanagement.supplier-privacy-policy')}}" class="nav-link  {{ (Request::is('admin/pagemanagement/supplier-privacy-policy'))? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier privacy policy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pagemanagement.privacy-policy')}}" class="nav-link  {{ (Request::is('admin/pagemanagement/privacy-policy'))? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy policy</p>
                </a>
              </li>
              
              <!--  <li class="nav-item">-->
              <!--  <a href="{{ route('admin.custom-page.add-page')}}" class="nav-link  {{ (Request::is('admin/custom-page/add-page'))? 'active' : '' }}" class="nav-link">-->
              <!--    <i class="far fa-circle nav-icon"></i>-->
              <!--    <p>Add Page</p>-->
              <!--  </a>-->
              <!--</li>-->
              
              <!-- <li class="nav-item">-->
              <!--  <a href="{{ route('admin.custom-page.page-list')}}" class="nav-link  {{ (Request::is('admin/custom-page/page-list') || Request::is('admin/custom-page/*') || Request::is('admin/custom-sub-page/*') )? 'active' : '' }}" class="nav-link">-->
              <!--    <i class="far fa-circle nav-icon"></i>-->
              <!--    <p>Page List</p>-->
              <!--  </a>-->
              <!--</li>-->
              
              <!--  <li class="nav-item">-->
              <!--  <a href="{{ route('admin.rent-pages')}}" class="nav-link  {{ (Request::is('admin/custom-page/page-list') || Request::is('admin/custom-page/*') || Request::is('admin/custom-sub-page/*') )? 'active' : '' }}" class="nav-link">-->
              <!--    <i class="far fa-circle nav-icon"></i>-->
              <!--    <p>Rent pages</p>-->
              <!--  </a>-->
              <!--</li>-->
              
              
            </ul>
          </li>
          
          <li  class="nav-item {{ ((Request::is('admin/job-management/*') || Request::is('admin/job-management')) || (Request::is('admin/job-applications/*') || Request::is('admin/job-applications')) )? 'menu-is-opening menu-open' : '' }} ">
            <a href="#" class="nav-link {{ (Request::is('admin/job-management/*') || Request::is('admin/job-management'))? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Job Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.job-management.create')}}" class="nav-link  {{ (Request::is('admin/job-management/create'))? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Jobs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.job-management.index')}}" class="nav-link  {{ (Request::is('admin/job-management'))? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Job list</p>
                </a>
              </li>
              
                <li class="nav-item">
                <a href="{{ route('admin.job-applications')}}" class="nav-link  {{ (Request::is('admin/job-applications'))? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Job Applications</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          
          
            <li class="nav-item">
            <a href="{{ route('admin.news-letter-subscriber')}}" class="nav-link  {{ (Request::is('admin/news-letter-subscriber')? 'active' : '') }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Newsletter Subscriber
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
          
            <li class="nav-item">
            <a href="{{ route('admin.setting')}}" class="nav-link  {{ (Request::is('admin/setting')? 'active' : '') }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Settings
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="{{ route('admin.static-page-meta-tag.index')}}" class="nav-link  {{ (Request::is('admin/static-page-meta-tag')? 'active' : '') }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Static Page Meta Tag
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>
           
          <!--<li class="nav-item">-->
          <!--  <a href="{{ route('admin.news.index')}}" class="nav-link  {{ (Request::is('admin/news') || Request::is('admin/news/create') )? 'active' : '' }}">-->
          <!--   <i class="nav-icon fas fa-tachometer-alt"></i>-->
          <!--    <p>-->
          <!--     News post-->
                <!--<span class="right badge badge-danger">New</span>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          
          
          
      <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-tachometer-alt"></i>-->
          <!--    <p>-->
          <!--      Dashboard-->
          <!--      <i class="right fas fa-angle-left"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../../index.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Dashboard v1</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../../index2.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Dashboard v2</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../../index3.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Dashboard v3</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="../widgets.html" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-th"></i>-->
          <!--    <p>-->
          <!--      Widgets-->
          <!--      <span class="right badge badge-danger">New</span>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-copy"></i>-->
          <!--    <p>-->
          <!--      Layout Options-->
          <!--      <i class="fas fa-angle-left right"></i>-->
          <!--      <span class="badge badge-info right">6</span>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../layout/top-nav.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Top Navigation</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../layout/top-nav-sidebar.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Top Navigation + Sidebar</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../layout/boxed.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Boxed</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../layout/fixed-sidebar.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Fixed Sidebar</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../layout/fixed-sidebar-custom.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Fixed Sidebar <small>+ Custom Area</small></p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../layout/fixed-topnav.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Fixed Navbar</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../layout/fixed-footer.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Fixed Footer</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../layout/collapsed-sidebar.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Collapsed Sidebar</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-chart-pie"></i>-->
          <!--    <p>-->
          <!--      Charts-->
          <!--      <i class="right fas fa-angle-left"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../charts/chartjs.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>ChartJS</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../charts/flot.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Flot</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../charts/inline.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Inline</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../charts/uplot.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>uPlot</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-tree"></i>-->
          <!--    <p>-->
          <!--      UI Elements-->
          <!--      <i class="fas fa-angle-left right"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../UI/general.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>General</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../UI/icons.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Icons</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../UI/buttons.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Buttons</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../UI/sliders.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Sliders</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../UI/modals.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Modals & Alerts</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../UI/navbar.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Navbar & Tabs</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../UI/timeline.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Timeline</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../UI/ribbons.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Ribbons</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-edit"></i>-->
          <!--    <p>-->
          <!--      Forms-->
          <!--      <i class="fas fa-angle-left right"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../forms/general.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>General Elements</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../forms/advanced.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Advanced Elements</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../forms/editors.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Editors</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../forms/validation.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Validation</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-table"></i>-->
          <!--    <p>-->
          <!--      Tables-->
          <!--      <i class="fas fa-angle-left right"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../tables/simple.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Simple Tables</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../tables/data.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>DataTables</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../tables/jsgrid.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>jsGrid</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-header">EXAMPLES</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="../calendar.html" class="nav-link">-->
          <!--    <i class="nav-icon far fa-calendar-alt"></i>-->
          <!--    <p>-->
          <!--      Calendar-->
          <!--      <span class="badge badge-info right">2</span>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="../gallery.html" class="nav-link">-->
          <!--    <i class="nav-icon far fa-image"></i>-->
          <!--    <p>-->
          <!--      Gallery-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="../kanban.html" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-columns"></i>-->
          <!--    <p>-->
          <!--      Kanban Board-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon far fa-envelope"></i>-->
          <!--    <p>-->
          <!--      Mailbox-->
          <!--      <i class="fas fa-angle-left right"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../mailbox/mailbox.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Inbox</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../mailbox/compose.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Compose</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../mailbox/read-mail.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Read</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-book"></i>-->
          <!--    <p>-->
          <!--      Pages-->
          <!--      <i class="fas fa-angle-left right"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/invoice.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Invoice</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/profile.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Profile</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/e-commerce.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>E-commerce</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/projects.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Projects</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/project-add.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Project Add</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/project-edit.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Project Edit</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/project-detail.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Project Detail</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/contacts.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Contacts</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/faq.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>FAQ</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/contact-us.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Contact us</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item menu-open">-->
          <!--  <a href="#" class="nav-link active">-->
          <!--    <i class="nav-icon far fa-plus-square"></i>-->
          <!--    <p>-->
          <!--      Extras-->
          <!--      <i class="fas fa-angle-left right"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="#" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>-->
          <!--          Login & Register v1-->
          <!--          <i class="fas fa-angle-left right"></i>-->
          <!--        </p>-->
          <!--      </a>-->
          <!--      <ul class="nav nav-treeview">-->
          <!--        <li class="nav-item">-->
          <!--          <a href="../examples/login.html" class="nav-link">-->
          <!--            <i class="far fa-circle nav-icon"></i>-->
          <!--            <p>Login v1</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li class="nav-item">-->
          <!--          <a href="../examples/register.html" class="nav-link">-->
          <!--            <i class="far fa-circle nav-icon"></i>-->
          <!--            <p>Register v1</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li class="nav-item">-->
          <!--          <a href="../examples/forgot-password.html" class="nav-link">-->
          <!--            <i class="far fa-circle nav-icon"></i>-->
          <!--            <p>Forgot Password v1</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li class="nav-item">-->
          <!--          <a href="../examples/recover-password.html" class="nav-link">-->
          <!--            <i class="far fa-circle nav-icon"></i>-->
          <!--            <p>Recover Password v1</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--      </ul>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="#" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>-->
          <!--          Login & Register v2-->
          <!--          <i class="fas fa-angle-left right"></i>-->
          <!--        </p>-->
          <!--      </a>-->
          <!--      <ul class="nav nav-treeview">-->
          <!--        <li class="nav-item">-->
          <!--          <a href="../examples/login-v2.html" class="nav-link">-->
          <!--            <i class="far fa-circle nav-icon"></i>-->
          <!--            <p>Login v2</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li class="nav-item">-->
          <!--          <a href="../examples/register-v2.html" class="nav-link">-->
          <!--            <i class="far fa-circle nav-icon"></i>-->
          <!--            <p>Register v2</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li class="nav-item">-->
          <!--          <a href="../examples/forgot-password-v2.html" class="nav-link">-->
          <!--            <i class="far fa-circle nav-icon"></i>-->
          <!--            <p>Forgot Password v2</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li class="nav-item">-->
          <!--          <a href="../examples/recover-password-v2.html" class="nav-link">-->
          <!--            <i class="far fa-circle nav-icon"></i>-->
          <!--            <p>Recover Password v2</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--      </ul>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/lockscreen.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Lockscreen</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/legacy-user-menu.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Legacy User Menu</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/language-menu.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Language Menu</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/404.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Error 404</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/500.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Error 500</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/pace.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Pace</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../examples/blank.html" class="nav-link active">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Blank Page</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../../starter.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Starter Page</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-search"></i>-->
          <!--    <p>-->
          <!--      Search-->
          <!--      <i class="fas fa-angle-left right"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../search/simple.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Simple Search</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="../search/enhanced.html" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Enhanced</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-header">MISCELLANEOUS</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="../../iframe.html" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-ellipsis-h"></i>-->
          <!--    <p>Tabbed IFrame Plugin</p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="https://adminlte.io/docs/3.1/" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-file"></i>-->
          <!--    <p>Documentation</p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-header">MULTI LEVEL EXAMPLE</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="fas fa-circle nav-icon"></i>-->
          <!--    <p>Level 1</p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-circle"></i>-->
          <!--    <p>-->
          <!--      Level 1-->
          <!--      <i class="right fas fa-angle-left"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--      <a href="#" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Level 2</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="#" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>-->
          <!--          Level 2-->
          <!--          <i class="right fas fa-angle-left"></i>-->
          <!--        </p>-->
          <!--      </a>-->
          <!--      <ul class="nav nav-treeview">-->
          <!--        <li class="nav-item">-->
          <!--          <a href="#" class="nav-link">-->
          <!--            <i class="far fa-dot-circle nav-icon"></i>-->
          <!--            <p>Level 3</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li class="nav-item">-->
          <!--          <a href="#" class="nav-link">-->
          <!--            <i class="far fa-dot-circle nav-icon"></i>-->
          <!--            <p>Level 3</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--        <li class="nav-item">-->
          <!--          <a href="#" class="nav-link">-->
          <!--            <i class="far fa-dot-circle nav-icon"></i>-->
          <!--            <p>Level 3</p>-->
          <!--          </a>-->
          <!--        </li>-->
          <!--      </ul>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--      <a href="#" class="nav-link">-->
          <!--        <i class="far fa-circle nav-icon"></i>-->
          <!--        <p>Level 2</p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="fas fa-circle nav-icon"></i>-->
          <!--    <p>Level 1</p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-header">LABELS</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon far fa-circle text-danger"></i>-->
          <!--    <p class="text">Important</p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon far fa-circle text-warning"></i>-->
          <!--    <p>Warning</p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="#" class="nav-link">-->
          <!--    <i class="nav-icon far fa-circle text-info"></i>-->
          <!--    <p>Informational</p>-->
          <!--  </a>-->
          <!--</li>-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
<!--  A little more complicated example – method Request::is() allows a pattern parameter, like this:-->

<!--if (\Request::is('companies/*')) { -->
<!--  // will match URL /companies/999 or /companies/create-->
<!--}-->