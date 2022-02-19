<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header mb-4">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="" target="_blank">
            <span class="ms-1 font-weight-bold text-white"><br> Magnifique Anonymous<br>Questions System</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse" id="sidenav-collapse-main" style="height: initial;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @if ($active == 'ask')
                active bg-primary 
                @endif text-white " href="{{ route('ask.create') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-question"></i>
                    </div>
                    <span class="nav-link-text ms-1">Ask Question</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if ($active == 'asked')
                active bg-primary 
                @endif" href="{{ route('ask.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-bible"></i>
                    </div>
                    <span class="nav-link-text ms-1">Answered Questions</span>
                </a>
            </li>
        </ul>
    </div>
</aside>