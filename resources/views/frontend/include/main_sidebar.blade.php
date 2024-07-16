<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="menu-inner-shadow"></div>
    <div class="profile-section"
        style="display: flex; align-items: center; justify-content: center; height: 100vh;">
        <div class="text-center" style="text-align: center;">
            <div class="card-body text-center ml-2 d-block"
                style="display: flex; flex-direction: column; align-items: center;">
                <div class="dropdown btn-pinned">
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Share
                                connection</a></li>
                        <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Block
                                connection</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger waves-effect"
                                href="javascript:void(0);">Delete</a></li>
                    </ul>
                </div>
                <div class="mx-auto my-6"
                    style="margin-left: auto; margin-right: auto; margin-top: 1.5rem; margin-bottom: 1.5rem;">
                    <img src="{{ Auth::user()->profile_pic ? asset(Auth::user()->profile_pic) : asset('assets/assets/img/avatars/3.png') }}" alt="Avatar Image"
                        class="rounded-circle w-px-100" style="width: 100px; height: 100px;">
                </div>
                <h5 class="mb-0 card-title">{{ Auth::user()->name }}</h5>
                <div class="d-flex align-items-center justify-content-center text-center mt-3">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <button class="btn btn-light d-flex align-items-center me-4 waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Log Out
                    </button>
                </div>
                
            </div>
        </div>
    </div>
    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="{{ url('customer-dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div>Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div>Order</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div>Subscriptions</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div>Downloads</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div>My Licenses</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div>Support</div>
            </a>
        </li>
        <br>
        <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div>Affiliate Area</div>
            </a>
        </li>
    </ul>
</aside>