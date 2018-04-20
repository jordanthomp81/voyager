<div class="dashboard-header-container">

  <div class="dashboard-header-inner-container">

    <div class="dashboard-header-split-container">

      <a href="{{ route('dashboard') }}"><img class="dashboard-header-main-logo" src="https://image.ibb.co/d3Jt3b/voyager_logo_2x.png" width="130px" height="auto" alt="" /></a>

    </div>

    <div class="dashboard-header-split-container">

      <div class="dashboard-header-profile-container">

        <img class="dashboard-header-profile-img" height="35px" width="35px" src="https://randomuser.me/api/portraits/men/1.jpg" alt="" />

        <img class="dashboard-header-profile-arrow-img" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI1NiAyNTYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI1NiAyNTY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cG9seWdvbiBwb2ludHM9IjIyNS44MTMsNDguOTA3IDEyOCwxNDYuNzIgMzAuMTg3LDQ4LjkwNyAwLDc5LjA5MyAxMjgsMjA3LjA5MyAyNTYsNzkuMDkzICAgIiBmaWxsPSIjN2M3ZDdkIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />

        <div class="animated fadeIn dashboard-header-profile-sub-menu">

          <a href="{{ route('settings') }}" class="dashboard-header-profile-sub-menu-title">Settings</a>

          <a href="{{ route('logout') }}" class="dashboard-header-profile-sub-menu-title" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

        </div>

      </div>

      <img class="dashboard-header-notifications-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDUxMCA1MTAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMCA1MTA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8ZyBpZD0ibm90aWZpY2F0aW9ucyI+CgkJPHBhdGggZD0iTTI1NSw1MTBjMjguMDUsMCw1MS0yMi45NSw1MS01MUgyMDRDMjA0LDQ4Ny4wNSwyMjYuOTUsNTEwLDI1NSw1MTB6IE00MjAuNzUsMzU3VjIxNi43NSAgICBjMC03OS4wNS01My41NS0xNDIuOC0xMjcuNS0xNjAuNjVWMzguMjVDMjkzLjI1LDE3Ljg1LDI3NS40LDAsMjU1LDBjLTIwLjQsMC0zOC4yNSwxNy44NS0zOC4yNSwzOC4yNVY1Ni4xICAgIGMtNzMuOTUsMTcuODUtMTI3LjUsODEuNi0xMjcuNSwxNjAuNjVWMzU3bC01MSw1MXYyNS41aDQzMy41VjQwOEw0MjAuNzUsMzU3eiIgZmlsbD0iIzdjN2Q3ZCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />

      <a href="{{ route('projects.create') }}"><img class="dashboard-header-new-project-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjA1OSAzMS4wNTkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjA1OSAzMS4wNTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTUuNTI5LDMxLjA1OUM2Ljk2NiwzMS4wNTksMCwyNC4wOTIsMCwxNS41MjlDMCw2Ljk2Niw2Ljk2NiwwLDE1LjUyOSwwICAgIGM4LjU2MywwLDE1LjUyOSw2Ljk2NiwxNS41MjksMTUuNTI5QzMxLjA1OSwyNC4wOTIsMjQuMDkyLDMxLjA1OSwxNS41MjksMzEuMDU5eiBNMTUuNTI5LDEuNzc0ICAgIGMtNy41ODUsMC0xMy43NTUsNi4xNzEtMTMuNzU1LDEzLjc1NXM2LjE3LDEzLjc1NCwxMy43NTUsMTMuNzU0YzcuNTg0LDAsMTMuNzU0LTYuMTcsMTMuNzU0LTEzLjc1NFMyMy4xMTMsMS43NzQsMTUuNTI5LDEuNzc0eiIgZmlsbD0iIzM5YzFmMCIvPgoJPC9nPgoJPGc+CgkJPHBhdGggZD0iTTIxLjY1MiwxNi40MTZIOS40MDZjLTAuNDksMC0wLjg4OC0wLjM5Ni0wLjg4OC0wLjg4N2MwLTAuNDksMC4zOTctMC44ODgsMC44ODgtMC44ODhoMTIuMjQ2ICAgIGMwLjQ5LDAsMC44ODcsMC4zOTgsMC44ODcsMC44ODhDMjIuNTM5LDE2LjAyLDIyLjE0MywxNi40MTYsMjEuNjUyLDE2LjQxNnoiIGZpbGw9IiMzOWMxZjAiLz4KCTwvZz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNS41MjksMjIuNTM5Yy0wLjQ5LDAtMC44ODgtMC4zOTctMC44ODgtMC44ODdWOS40MDZjMC0wLjQ5LDAuMzk4LTAuODg4LDAuODg4LTAuODg4ICAgIGMwLjQ5LDAsMC44ODcsMC4zOTgsMC44ODcsMC44ODh2MTIuMjQ2QzE2LjQxNiwyMi4xNDMsMTYuMDIsMjIuNTM5LDE1LjUyOSwyMi41Mzl6IiBmaWxsPSIjMzljMWYwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a>

    </div>

  </div>

</div>
