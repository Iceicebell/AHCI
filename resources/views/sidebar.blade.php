<link rel="stylesheet" href="<?php echo asset('css/sidebar.css')?>">
<aside>
    <div class="toggle">
        <div class="logo">
            <h2>Vinci<span class="danger">.Ent</span></h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">
                close
            </span>
        </div>
    </div>

    <div class="sidebar">
        <a href="home" class="active">
            <span class="material-icons-sharp">
                dashboard
            </span>
            <h3>Dashboard</h3>
        </a>
        <a href="coordinators">
            <span class="material-icons-sharp">
                person_outline
            </span>
            <h3>Coordinators</h3>
        </a>
        <a href="trainees">
            <span class="material-icons-sharp">
                support_agent
            </span>
            <h3>Trainees</h3>
        </a>
        <a href="universities">
            <span class="material-icons-sharp">
                school
            </span>
            <h3>Universities</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp">
                settings
            </span>
            <h3>Admins</h3>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="material-icons-sharp">
                logout
            </span>
            <h3> {{ __('Logout') }}</h3>
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
    </div>
</aside>
<script src="<?php echo asset('js/admin/admin.js')?>"></script>
