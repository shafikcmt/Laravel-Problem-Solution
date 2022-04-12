<section id="main-section">
    <div class="left-sidebar">
            <div class="wrapper">
                <div class="sidebar">
                    <ul>
                        @if(Session::has('loginId'))
                        <li><a href="/dashboard"><i class="fas fa-home"></i>Dashboard</a></li>
                        <li class="notification1"><a href="/student_personal"><i class="fa-solid fa-clipboard"></i>&nbsp;&nbsp;Details Hub</a></li>
                        <li class="notification2"><a href="/technical-work"><i class="fa-solid fa-network-wired"></i>&nbsp;&nbsp;Technical Work</a></li>
                        <li class="notification3"><a href="/assessment-work"><i class="fas fa-users"></i>Assessments Work</a></li>
                        <li class="notification3"><a href="#"><i class="fas fa-users"></i>Placements Work</a></li>
                        <li class="notification3"><a href="#"><i class="fas fa-users"></i>Drive Skill</a></li>
                        </li>
                        <li><a href="#"><i class="fas fa-signal"></i>Reports</a></li>
                        @else
                        <li><a href="/admin-dashboard"><i class="fas fa-home"></i>Dashboard</a></li>
                        <li><a href="#"><i class="fas fa-users"></i>Team</a></li>
                        <li class="notification1"><a href="#"><i class="fas fa-calendar-week"></i>Calender</a></li>
                        <li class="notification2"><a href="#"><i class="far fa-envelope"></i>Documents</a></li>
                        <li class="notification3"><a href="/add-admin"><i class="fas fa-users"></i>Add Admin</a></li>
                        </li>
                        <li><a href="#"><i class="fas fa-signal"></i>Reports</a></li>
                        @endif
                    </ul>
                
                
                </div>
        </div>
    </div>