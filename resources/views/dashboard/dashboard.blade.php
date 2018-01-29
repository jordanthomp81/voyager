@extends('layouts.app')

@section('content')
  @include('dashboard/dash-header')
  <div class="dashboard-content-container">

    <div class="dashboard-content-inner-container">

      <div class="dashboard-content-inner-split-container">
        @include('dashboard/dash-side-nav')
      </div>

      <div class="dashboard-content-inner-split-container">

        <div class="dashboard-content-heading-container">

          <h1 class="dashboard-content-title">Projects</h1>

          <img class="dashboard-content-add-new-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjA1OSAzMS4wNTkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjA1OSAzMS4wNTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTUuNTI5LDMxLjA1OUM2Ljk2NiwzMS4wNTksMCwyNC4wOTIsMCwxNS41MjlDMCw2Ljk2Niw2Ljk2NiwwLDE1LjUyOSwwICAgIGM4LjU2MywwLDE1LjUyOSw2Ljk2NiwxNS41MjksMTUuNTI5QzMxLjA1OSwyNC4wOTIsMjQuMDkyLDMxLjA1OSwxNS41MjksMzEuMDU5eiBNMTUuNTI5LDEuNzc0ICAgIGMtNy41ODUsMC0xMy43NTUsNi4xNzEtMTMuNzU1LDEzLjc1NXM2LjE3LDEzLjc1NCwxMy43NTUsMTMuNzU0YzcuNTg0LDAsMTMuNzU0LTYuMTcsMTMuNzU0LTEzLjc1NFMyMy4xMTMsMS43NzQsMTUuNTI5LDEuNzc0eiIgZmlsbD0iIzM5YzFmMCIvPgoJPC9nPgoJPGc+CgkJPHBhdGggZD0iTTIxLjY1MiwxNi40MTZIOS40MDZjLTAuNDksMC0wLjg4OC0wLjM5Ni0wLjg4OC0wLjg4N2MwLTAuNDksMC4zOTctMC44ODgsMC44ODgtMC44ODhoMTIuMjQ2ICAgIGMwLjQ5LDAsMC44ODcsMC4zOTgsMC44ODcsMC44ODhDMjIuNTM5LDE2LjAyLDIyLjE0MywxNi40MTYsMjEuNjUyLDE2LjQxNnoiIGZpbGw9IiMzOWMxZjAiLz4KCTwvZz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNS41MjksMjIuNTM5Yy0wLjQ5LDAtMC44ODgtMC4zOTctMC44ODgtMC44ODdWOS40MDZjMC0wLjQ5LDAuMzk4LTAuODg4LDAuODg4LTAuODg4ICAgIGMwLjQ5LDAsMC44ODcsMC4zOTgsMC44ODcsMC44ODh2MTIuMjQ2QzE2LjQxNiwyMi4xNDMsMTYuMDIsMjIuNTM5LDE1LjUyOSwyMi41Mzl6IiBmaWxsPSIjMzljMWYwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />

        </div> <br />

        <div class="dashboard-content-project-container">

          <div class="dashboard-content-project">

            <p class="dashboard-content-project-deadline">Deadline: 4/16/17</p>

            <p class="dashboard-content-project-subtasks">4 Subtasks</p>

            <h2>Website Build</h2>

            <p class="dashboard-content-project-description">Post-ironic literally prism street art cred glossier. Freegan selfies vinyl crucifix.</p>

            <div class="dashboard-content-project-controls-container">

              <img class="dashboard-content-project-controls-edit" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDUyOC44OTkgNTI4Ljg5OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTI4Ljg5OSA1MjguODk5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTMyOC44ODMsODkuMTI1bDEwNy41OSwxMDcuNTg5bC0yNzIuMzQsMjcyLjM0TDU2LjYwNCwzNjEuNDY1TDMyOC44ODMsODkuMTI1eiBNNTE4LjExMyw2My4xNzdsLTQ3Ljk4MS00Ny45ODEgICBjLTE4LjU0My0xOC41NDMtNDguNjUzLTE4LjU0My02Ny4yNTksMGwtNDUuOTYxLDQ1Ljk2MWwxMDcuNTksMTA3LjU5bDUzLjYxMS01My42MTEgICBDNTMyLjQ5NSwxMDAuNzUzLDUzMi40OTUsNzcuNTU5LDUxOC4xMTMsNjMuMTc3eiBNMC4zLDUxMi42OWMtMS45NTgsOC44MTIsNS45OTgsMTYuNzA4LDE0LjgxMSwxNC41NjVsMTE5Ljg5MS0yOS4wNjkgICBMMjcuNDczLDM5MC41OTdMMC4zLDUxMi42OXoiIGZpbGw9IiM2YTZhNmIiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />

              <img class="dashboard-content-project-controls-trash" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI2OC40NzYgMjY4LjQ3NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjY4LjQ3NiAyNjguNDc2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnIGlkPSJEZWxldGVfX3gyRl9fVHJhc2giPgoJPHBhdGggc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkOyIgZD0iTTYzLjExOSwyNTAuMjU0YzAsMCwzLjk5OSwxOC4yMjIsMjQuNTgzLDE4LjIyMmg5My4wNzIgICBjMjAuNTgzLDAsMjQuNTgyLTE4LjIyMiwyNC41ODItMTguMjIybDE4LjM3NC0xNzguNjZINDQuNzQ2TDYzLjExOSwyNTAuMjU0eiBNMTcwLjAzNSw5OC40NDJjMC00Ljk0Myw0LjAwNi04Ljk0OSw4Ljk0OS04Ljk0OSAgIGM0Ljk0MywwLDguOTUsNC4wMDYsOC45NSw4Ljk0OWwtOC45NSwxMzQuMjM4YzAsNC45NDMtNC4wMDcsOC45NDktOC45NDksOC45NDljLTQuOTQyLDAtOC45NDktNC4wMDctOC45NDktOC45NDlMMTcwLjAzNSw5OC40NDJ6ICAgIE0xMjUuMjg5LDk4LjQ0MmMwLTQuOTQzLDQuMDA3LTguOTQ5LDguOTQ5LTguOTQ5YzQuOTQzLDAsOC45NDksNC4wMDYsOC45NDksOC45NDl2MTM0LjIzOGMwLDQuOTQzLTQuMDA2LDguOTQ5LTguOTQ5LDguOTQ5ICAgYy00Ljk0MywwLTguOTQ5LTQuMDA3LTguOTQ5LTguOTQ5Vjk4LjQ0MnogTTg5LjQ5Miw4OS40OTJjNC45NDMsMCw4Ljk0OSw0LjAwNiw4Ljk0OSw4Ljk0OWw4Ljk1LDEzNC4yMzggICBjMCw0Ljk0My00LjAwNyw4Ljk0OS04Ljk1LDguOTQ5Yy00Ljk0MiwwLTguOTQ5LTQuMDA3LTguOTQ5LTguOTQ5TDgwLjU0Myw5OC40NDJDODAuNTQzLDkzLjQ5OSw4NC41NSw4OS40OTIsODkuNDkyLDg5LjQ5MnogICAgTTIxOC4zNiwzNS44MTFoLTM5LjM3NlYxNy44OTlDMTc4Ljk4NCw0LjMyMiwxNzQuNTkzLDAsMTYxLjA4NiwwTDEwNy4zOSwwQzk1LjAwMSwwLDg5LjQ5Miw2LjAwMSw4OS40OTIsMTcuODk5djE3LjkxM0g1MC4xMTYgICBjLTcuOTE0LDAtMTQuMzE5LDYuMDA3LTE0LjMxOSwxMy40M2MwLDcuNDI0LDYuNDA1LDEzLjQzMSwxNC4zMTksMTMuNDMxSDIxOC4zNmM3LjkxNCwwLDE0LjMxOS02LjAwNywxNC4zMTktMTMuNDMxICAgQzIzMi42NzksNDEuODE5LDIyNi4yNzQsMzUuODExLDIxOC4zNiwzNS44MTF6IE0xNjEuMDg2LDM1LjgxMWgtNTMuNjk1bDAuMDAxLTE3LjkxM2g1My42OTVWMzUuODExeiIgZmlsbD0iIzZhNmE2YiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />

              <p class="dashboard-content-project-controls-members">2 Members</p>

            </div>

          </div>

          <div class="dashboard-content-project">

            <p class="dashboard-content-project-deadline">Deadline: 4/16/17</p>

            <p class="dashboard-content-project-subtasks">4 Subtasks</p>

            <h2>Website Build</h2>

            <p class="dashboard-content-project-description">Post-ironic literally prism street art cred glossier. Freegan selfies vinyl crucifix.</p>

            <div class="dashboard-content-project-controls-container">

              <img class="dashboard-content-project-controls-edit" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDUyOC44OTkgNTI4Ljg5OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTI4Ljg5OSA1MjguODk5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTMyOC44ODMsODkuMTI1bDEwNy41OSwxMDcuNTg5bC0yNzIuMzQsMjcyLjM0TDU2LjYwNCwzNjEuNDY1TDMyOC44ODMsODkuMTI1eiBNNTE4LjExMyw2My4xNzdsLTQ3Ljk4MS00Ny45ODEgICBjLTE4LjU0My0xOC41NDMtNDguNjUzLTE4LjU0My02Ny4yNTksMGwtNDUuOTYxLDQ1Ljk2MWwxMDcuNTksMTA3LjU5bDUzLjYxMS01My42MTEgICBDNTMyLjQ5NSwxMDAuNzUzLDUzMi40OTUsNzcuNTU5LDUxOC4xMTMsNjMuMTc3eiBNMC4zLDUxMi42OWMtMS45NTgsOC44MTIsNS45OTgsMTYuNzA4LDE0LjgxMSwxNC41NjVsMTE5Ljg5MS0yOS4wNjkgICBMMjcuNDczLDM5MC41OTdMMC4zLDUxMi42OXoiIGZpbGw9IiM2YTZhNmIiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />

              <img class="dashboard-content-project-controls-trash" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI2OC40NzYgMjY4LjQ3NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjY4LjQ3NiAyNjguNDc2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnIGlkPSJEZWxldGVfX3gyRl9fVHJhc2giPgoJPHBhdGggc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkOyIgZD0iTTYzLjExOSwyNTAuMjU0YzAsMCwzLjk5OSwxOC4yMjIsMjQuNTgzLDE4LjIyMmg5My4wNzIgICBjMjAuNTgzLDAsMjQuNTgyLTE4LjIyMiwyNC41ODItMTguMjIybDE4LjM3NC0xNzguNjZINDQuNzQ2TDYzLjExOSwyNTAuMjU0eiBNMTcwLjAzNSw5OC40NDJjMC00Ljk0Myw0LjAwNi04Ljk0OSw4Ljk0OS04Ljk0OSAgIGM0Ljk0MywwLDguOTUsNC4wMDYsOC45NSw4Ljk0OWwtOC45NSwxMzQuMjM4YzAsNC45NDMtNC4wMDcsOC45NDktOC45NDksOC45NDljLTQuOTQyLDAtOC45NDktNC4wMDctOC45NDktOC45NDlMMTcwLjAzNSw5OC40NDJ6ICAgIE0xMjUuMjg5LDk4LjQ0MmMwLTQuOTQzLDQuMDA3LTguOTQ5LDguOTQ5LTguOTQ5YzQuOTQzLDAsOC45NDksNC4wMDYsOC45NDksOC45NDl2MTM0LjIzOGMwLDQuOTQzLTQuMDA2LDguOTQ5LTguOTQ5LDguOTQ5ICAgYy00Ljk0MywwLTguOTQ5LTQuMDA3LTguOTQ5LTguOTQ5Vjk4LjQ0MnogTTg5LjQ5Miw4OS40OTJjNC45NDMsMCw4Ljk0OSw0LjAwNiw4Ljk0OSw4Ljk0OWw4Ljk1LDEzNC4yMzggICBjMCw0Ljk0My00LjAwNyw4Ljk0OS04Ljk1LDguOTQ5Yy00Ljk0MiwwLTguOTQ5LTQuMDA3LTguOTQ5LTguOTQ5TDgwLjU0Myw5OC40NDJDODAuNTQzLDkzLjQ5OSw4NC41NSw4OS40OTIsODkuNDkyLDg5LjQ5MnogICAgTTIxOC4zNiwzNS44MTFoLTM5LjM3NlYxNy44OTlDMTc4Ljk4NCw0LjMyMiwxNzQuNTkzLDAsMTYxLjA4NiwwTDEwNy4zOSwwQzk1LjAwMSwwLDg5LjQ5Miw2LjAwMSw4OS40OTIsMTcuODk5djE3LjkxM0g1MC4xMTYgICBjLTcuOTE0LDAtMTQuMzE5LDYuMDA3LTE0LjMxOSwxMy40M2MwLDcuNDI0LDYuNDA1LDEzLjQzMSwxNC4zMTksMTMuNDMxSDIxOC4zNmM3LjkxNCwwLDE0LjMxOS02LjAwNywxNC4zMTktMTMuNDMxICAgQzIzMi42NzksNDEuODE5LDIyNi4yNzQsMzUuODExLDIxOC4zNiwzNS44MTF6IE0xNjEuMDg2LDM1LjgxMWgtNTMuNjk1bDAuMDAxLTE3LjkxM2g1My42OTVWMzUuODExeiIgZmlsbD0iIzZhNmE2YiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />

              <p class="dashboard-content-project-controls-members">2 Members</p>

            </div>

          </div>

          <div class="dashboard-content-project">

            <p class="dashboard-content-project-deadline">Deadline: 4/16/17</p>

            <p class="dashboard-content-project-subtasks">4 Subtasks</p>

            <h2>Website Build</h2>

            <p class="dashboard-content-project-description">Post-ironic literally prism street art cred glossier. Freegan selfies vinyl crucifix.</p>

            <div class="dashboard-content-project-controls-container">

              <img class="dashboard-content-project-controls-edit" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDUyOC44OTkgNTI4Ljg5OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTI4Ljg5OSA1MjguODk5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTMyOC44ODMsODkuMTI1bDEwNy41OSwxMDcuNTg5bC0yNzIuMzQsMjcyLjM0TDU2LjYwNCwzNjEuNDY1TDMyOC44ODMsODkuMTI1eiBNNTE4LjExMyw2My4xNzdsLTQ3Ljk4MS00Ny45ODEgICBjLTE4LjU0My0xOC41NDMtNDguNjUzLTE4LjU0My02Ny4yNTksMGwtNDUuOTYxLDQ1Ljk2MWwxMDcuNTksMTA3LjU5bDUzLjYxMS01My42MTEgICBDNTMyLjQ5NSwxMDAuNzUzLDUzMi40OTUsNzcuNTU5LDUxOC4xMTMsNjMuMTc3eiBNMC4zLDUxMi42OWMtMS45NTgsOC44MTIsNS45OTgsMTYuNzA4LDE0LjgxMSwxNC41NjVsMTE5Ljg5MS0yOS4wNjkgICBMMjcuNDczLDM5MC41OTdMMC4zLDUxMi42OXoiIGZpbGw9IiM2YTZhNmIiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />

              <img class="dashboard-content-project-controls-trash" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI2OC40NzYgMjY4LjQ3NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjY4LjQ3NiAyNjguNDc2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnIGlkPSJEZWxldGVfX3gyRl9fVHJhc2giPgoJPHBhdGggc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkOyIgZD0iTTYzLjExOSwyNTAuMjU0YzAsMCwzLjk5OSwxOC4yMjIsMjQuNTgzLDE4LjIyMmg5My4wNzIgICBjMjAuNTgzLDAsMjQuNTgyLTE4LjIyMiwyNC41ODItMTguMjIybDE4LjM3NC0xNzguNjZINDQuNzQ2TDYzLjExOSwyNTAuMjU0eiBNMTcwLjAzNSw5OC40NDJjMC00Ljk0Myw0LjAwNi04Ljk0OSw4Ljk0OS04Ljk0OSAgIGM0Ljk0MywwLDguOTUsNC4wMDYsOC45NSw4Ljk0OWwtOC45NSwxMzQuMjM4YzAsNC45NDMtNC4wMDcsOC45NDktOC45NDksOC45NDljLTQuOTQyLDAtOC45NDktNC4wMDctOC45NDktOC45NDlMMTcwLjAzNSw5OC40NDJ6ICAgIE0xMjUuMjg5LDk4LjQ0MmMwLTQuOTQzLDQuMDA3LTguOTQ5LDguOTQ5LTguOTQ5YzQuOTQzLDAsOC45NDksNC4wMDYsOC45NDksOC45NDl2MTM0LjIzOGMwLDQuOTQzLTQuMDA2LDguOTQ5LTguOTQ5LDguOTQ5ICAgYy00Ljk0MywwLTguOTQ5LTQuMDA3LTguOTQ5LTguOTQ5Vjk4LjQ0MnogTTg5LjQ5Miw4OS40OTJjNC45NDMsMCw4Ljk0OSw0LjAwNiw4Ljk0OSw4Ljk0OWw4Ljk1LDEzNC4yMzggICBjMCw0Ljk0My00LjAwNyw4Ljk0OS04Ljk1LDguOTQ5Yy00Ljk0MiwwLTguOTQ5LTQuMDA3LTguOTQ5LTguOTQ5TDgwLjU0Myw5OC40NDJDODAuNTQzLDkzLjQ5OSw4NC41NSw4OS40OTIsODkuNDkyLDg5LjQ5MnogICAgTTIxOC4zNiwzNS44MTFoLTM5LjM3NlYxNy44OTlDMTc4Ljk4NCw0LjMyMiwxNzQuNTkzLDAsMTYxLjA4NiwwTDEwNy4zOSwwQzk1LjAwMSwwLDg5LjQ5Miw2LjAwMSw4OS40OTIsMTcuODk5djE3LjkxM0g1MC4xMTYgICBjLTcuOTE0LDAtMTQuMzE5LDYuMDA3LTE0LjMxOSwxMy40M2MwLDcuNDI0LDYuNDA1LDEzLjQzMSwxNC4zMTksMTMuNDMxSDIxOC4zNmM3LjkxNCwwLDE0LjMxOS02LjAwNywxNC4zMTktMTMuNDMxICAgQzIzMi42NzksNDEuODE5LDIyNi4yNzQsMzUuODExLDIxOC4zNiwzNS44MTF6IE0xNjEuMDg2LDM1LjgxMWgtNTMuNjk1bDAuMDAxLTE3LjkxM2g1My42OTVWMzUuODExeiIgZmlsbD0iIzZhNmE2YiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />

              <p class="dashboard-content-project-controls-members">2 Members</p>

            </div>

          </div>

          <div class="dashboard-content-project">

            <p class="dashboard-content-project-deadline">Deadline: 4/16/17</p>

            <p class="dashboard-content-project-subtasks">4 Subtasks</p>

            <h2>Website Build</h2>

            <p class="dashboard-content-project-description">Post-ironic literally prism street art cred glossier. Freegan selfies vinyl crucifix.</p>

            <div class="dashboard-content-project-controls-container">

              <img class="dashboard-content-project-controls-edit" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDUyOC44OTkgNTI4Ljg5OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTI4Ljg5OSA1MjguODk5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTMyOC44ODMsODkuMTI1bDEwNy41OSwxMDcuNTg5bC0yNzIuMzQsMjcyLjM0TDU2LjYwNCwzNjEuNDY1TDMyOC44ODMsODkuMTI1eiBNNTE4LjExMyw2My4xNzdsLTQ3Ljk4MS00Ny45ODEgICBjLTE4LjU0My0xOC41NDMtNDguNjUzLTE4LjU0My02Ny4yNTksMGwtNDUuOTYxLDQ1Ljk2MWwxMDcuNTksMTA3LjU5bDUzLjYxMS01My42MTEgICBDNTMyLjQ5NSwxMDAuNzUzLDUzMi40OTUsNzcuNTU5LDUxOC4xMTMsNjMuMTc3eiBNMC4zLDUxMi42OWMtMS45NTgsOC44MTIsNS45OTgsMTYuNzA4LDE0LjgxMSwxNC41NjVsMTE5Ljg5MS0yOS4wNjkgICBMMjcuNDczLDM5MC41OTdMMC4zLDUxMi42OXoiIGZpbGw9IiM2YTZhNmIiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />

              <img class="dashboard-content-project-controls-trash" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI2OC40NzYgMjY4LjQ3NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjY4LjQ3NiAyNjguNDc2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnIGlkPSJEZWxldGVfX3gyRl9fVHJhc2giPgoJPHBhdGggc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkOyIgZD0iTTYzLjExOSwyNTAuMjU0YzAsMCwzLjk5OSwxOC4yMjIsMjQuNTgzLDE4LjIyMmg5My4wNzIgICBjMjAuNTgzLDAsMjQuNTgyLTE4LjIyMiwyNC41ODItMTguMjIybDE4LjM3NC0xNzguNjZINDQuNzQ2TDYzLjExOSwyNTAuMjU0eiBNMTcwLjAzNSw5OC40NDJjMC00Ljk0Myw0LjAwNi04Ljk0OSw4Ljk0OS04Ljk0OSAgIGM0Ljk0MywwLDguOTUsNC4wMDYsOC45NSw4Ljk0OWwtOC45NSwxMzQuMjM4YzAsNC45NDMtNC4wMDcsOC45NDktOC45NDksOC45NDljLTQuOTQyLDAtOC45NDktNC4wMDctOC45NDktOC45NDlMMTcwLjAzNSw5OC40NDJ6ICAgIE0xMjUuMjg5LDk4LjQ0MmMwLTQuOTQzLDQuMDA3LTguOTQ5LDguOTQ5LTguOTQ5YzQuOTQzLDAsOC45NDksNC4wMDYsOC45NDksOC45NDl2MTM0LjIzOGMwLDQuOTQzLTQuMDA2LDguOTQ5LTguOTQ5LDguOTQ5ICAgYy00Ljk0MywwLTguOTQ5LTQuMDA3LTguOTQ5LTguOTQ5Vjk4LjQ0MnogTTg5LjQ5Miw4OS40OTJjNC45NDMsMCw4Ljk0OSw0LjAwNiw4Ljk0OSw4Ljk0OWw4Ljk1LDEzNC4yMzggICBjMCw0Ljk0My00LjAwNyw4Ljk0OS04Ljk1LDguOTQ5Yy00Ljk0MiwwLTguOTQ5LTQuMDA3LTguOTQ5LTguOTQ5TDgwLjU0Myw5OC40NDJDODAuNTQzLDkzLjQ5OSw4NC41NSw4OS40OTIsODkuNDkyLDg5LjQ5MnogICAgTTIxOC4zNiwzNS44MTFoLTM5LjM3NlYxNy44OTlDMTc4Ljk4NCw0LjMyMiwxNzQuNTkzLDAsMTYxLjA4NiwwTDEwNy4zOSwwQzk1LjAwMSwwLDg5LjQ5Miw2LjAwMSw4OS40OTIsMTcuODk5djE3LjkxM0g1MC4xMTYgICBjLTcuOTE0LDAtMTQuMzE5LDYuMDA3LTE0LjMxOSwxMy40M2MwLDcuNDI0LDYuNDA1LDEzLjQzMSwxNC4zMTksMTMuNDMxSDIxOC4zNmM3LjkxNCwwLDE0LjMxOS02LjAwNywxNC4zMTktMTMuNDMxICAgQzIzMi42NzksNDEuODE5LDIyNi4yNzQsMzUuODExLDIxOC4zNiwzNS44MTF6IE0xNjEuMDg2LDM1LjgxMWgtNTMuNjk1bDAuMDAxLTE3LjkxM2g1My42OTVWMzUuODExeiIgZmlsbD0iIzZhNmE2YiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />

              <p class="dashboard-content-project-controls-members">2 Members</p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>
@endsection