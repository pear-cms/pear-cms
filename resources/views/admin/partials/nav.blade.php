<header id="page-header">
    <div class="content-header">
        <div class="content-header-section">
            <div class="content-header-item">
                <a class="link-effect font-w700 mr-5" href="{{ url('backend') }}">
                    <span class="font-size-xl text-primary">Pear</span><span class="font-size-xl text-dual-primary-dark">CMS</span>
                </a>
            </div>
        </div>
        <div class="content-header-section d-none d-lg-block">
            <ul class="nav-main-header">
                <li>
                    <a href="{{ url('backend') }}"><i class="si si-compass"></i>Dashboard</a>
                </li>
                <li class="{{ (strpos(Request::route()->getName(), 'manager') !== FALSE) ? 'open' : '' }}">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fas fa-users"></i>Managers</a>
                    <ul>
                        <li>
                            <a class="{{ (Request::route()->getName() == 'accountsmanager') ? 'active' : '' }}" href="{{ url('backend/accounts') }}">Accounts Manager</a>
                        </li>
                        <li>
                            <a class="{{ (Request::route()->getName() == 'commentsmanager') ? 'active' : '' }}" href="{{ url('backend/comments') }}">Comments Manager</a>
                        </li>
                        <li>
                            <a class="{{ (Request::route()->getName() == 'articlesmanager') ? 'active' : '' }}" href="{{ url('backend/articles') }}">Articles Manager</a>
                        </li>
                    </ul>
                </li>
                @if(!empty(url()->previous()))
                <li>
                    <a href="{{ url()->previous() }}"><i class="si si-action-undo"></i>Go Back</a>
                </li>
                @endif
            </ul>
        </div>
        <div class="content-header-section">
          <a href="{{ url('backend/settings') }}" class="btn btn-circle btn-dual-secondary">
              <i class="fas fa-cog"></i>
          </a>
            <a href="{{ url('/') }}" target="_blank" class="btn btn-circle btn-dual-secondary">
                <i class="fa fa-globe"></i>
            </a>

            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
        </div>
    </div>
</header>
