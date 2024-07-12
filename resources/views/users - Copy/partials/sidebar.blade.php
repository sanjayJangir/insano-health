<div class="sidebar px-2" id="side_nav">
    <div class="header-box px-2 pb-4 pt-3 d-flex justify-content-between">
        <h1 class="fs-4">Trusted <span class="health">Healthcare</span></h1>
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-dark"><i class="fas fa-bars"></i></button>
    </div>
    <ul class="list-unstyled px-2 mx-4">
        <p>Dashboard</p>

        <li class="">
            <a href="{{ route('users.myprofile') }}" class="dash-link text-decoration-none d-block py-2"><i
                    class="px-2 py-2 far fa-user-circle"></i>My Profile</a>
        </li>
        <li class="">
            <a href="{{ route('users.recent-candidates') }}" class="dash-link text-decoration-none d-block py-2">
                <i class="px-2 py-2 fal fa-briefcase"></i>Recent
                Views</a>
        </li>
        <li class="">
            <a href="{{ route('users.overview') }}" class="dash-link text-decoration-none d-block py-2"><i
                    class="px-2 py-2 fal fa-layer-group"></i>Overview</a>
        </li>
        <li class="">
            <a href="{{ route('users.saved-candidates') }}" class="dash-link text-decoration-none d-block py-2"><i
                    class="px-2 py-2 far fa-bookmark"></i>Saved Candidate</a>
        </li>
        {{-- <li class="">
            <a href="{{ route('users.saved-candidates') }}" class="dash-link text-decoration-none d-block py-2"><i
                    class="px-2 py-2 far fa-book-user"></i>Plans &
                Billing</a>
        </li> --}}
        <li class="">
            <a href="{{ route('users.settings') }}" class="dash-link text-decoration-none d-block py-2"><i
                    class="px-2 py-2 far fa-cog"></i>Settings</a>
        </li>
        <li class="">
            <a href="#" class="dash-link text-decoration-none d-block py-2">
                <i class="px-2 py-2 fal fa-sign-out-alt"></i>Log
                Out</a>
        </li>

    </ul>

</div>
