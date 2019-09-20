<div class="app-body">
<div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/index') }}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-title">PRIME HRM Modules</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/employees') }}">
                <i class="nav-icon cui-file"></i> Employees</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{ url('/members') }}">
                <i class="nav-icon icon-user"></i> Leave Application</a>
            </li>

           <!-- <li class="nav-item">
              <a class="nav-link" href="{{ url('/employees') }}">
                <i class="nav-icon icon-people"></i> Employees</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/loans') }}">
                <i class="nav-icon icon-pencil"></i> Loans</a>
            </li>

            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-calculator"></i> Bills</a>

                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/bills') }}">
                        <i class="nav-icon cui-lock-unlocked"></i> Active Bills
                      </a>
                    </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/inactivebills') }}">
                        <i class="nav-icon cui-lock-locked"></i> Inactive Bills
                      </a>
                  </li>
                </ul>

            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/payments') }}">
                <i class="nav-icon icon-wallet"></i> Payments</a>
            </li>
            <li class="nav-title">Accounting</li>
             <li class="nav-item">
              <a class="nav-link" href="{{ url('/vouchers') }}">
                <i class="nav-icon icon-pie-chart"></i> Voucher
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{ url('/payees') }}">
                <i class="nav-icon icon-pie-chart"></i> Payee
              </a>
            </li> -->
            <li class="nav-title">Components</li>
            <?php
              $user = auth()->user();
              if($user->username == 'admin'){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/users') }}">
                <i class="nav-icon icon-pie-chart"></i> Users
              </a>
            </li>
            <?php } ?>

            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-settings"></i> Settings</a>
              <ul class="nav-dropdown-items">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/accountcategories') }}">
                    <i class="nav-icon icon-list"></i> Account Categories
                  </a>
                </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/accountnames') }}">
                    <i class="nav-icon icon-list"></i> Account Names
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/divisions') }}">
                    <i class="nav-icon icon-list"></i> Divisions
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/particulars') }}">
                    <i class="nav-icon icon-people"></i> Particulars
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/positions') }}">
                    <i class="nav-icon icon-star"></i> Positions
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/flags.html">
                    <i class="nav-icon icon-info"></i> Permissions</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="{{ url('/productservices') }}">
                    <i class="nav-icon icon-people"></i> Products/Services
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/font-awesome.html">
                    <i class="nav-icon icon-info"></i> Roles
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-bell"></i> Notifications</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="notifications/alerts.html">
                    <i class="nav-icon icon-bell"></i> Alerts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/badge.html">
                    <i class="nav-icon icon-bell"></i> Badge</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/modals.html">
                    <i class="nav-icon icon-bell"></i> Modals</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="widgets.html">
                <i class="nav-icon icon-calculator"></i> Widgets
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            <li class="divider"></li>
            <li class="nav-title">Extras</li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-star"></i> Pages</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="login.html" target="_top">
                    <i class="nav-icon icon-star"></i> Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.html" target="_top">
                    <i class="nav-icon icon-star"></i> Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="404.html" target="_top">
                    <i class="nav-icon icon-star"></i> Error 404</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="500.html" target="_top">
                    <i class="nav-icon icon-star"></i> Error 500</a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>