@extends('layouts.app')

@section('content')
  @include('dashboard/dash-header')
  <div class="content-container">

    <div class="content-inner-container">

      <div class="content-inner-split-container">
        @include('dashboard/dash-side-nav')
      </div>

      <div class="content-inner-split-container">

        <div class="content-heading-container">

          <h1 class="content-title-large">Projects</h1>

          <img class="content-title-add-new-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjA1OSAzMS4wNTkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjA1OSAzMS4wNTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTUuNTI5LDMxLjA1OUM2Ljk2NiwzMS4wNTksMCwyNC4wOTIsMCwxNS41MjlDMCw2Ljk2Niw2Ljk2NiwwLDE1LjUyOSwwICAgIGM4LjU2MywwLDE1LjUyOSw2Ljk2NiwxNS41MjksMTUuNTI5QzMxLjA1OSwyNC4wOTIsMjQuMDkyLDMxLjA1OSwxNS41MjksMzEuMDU5eiBNMTUuNTI5LDEuNzc0ICAgIGMtNy41ODUsMC0xMy43NTUsNi4xNzEtMTMuNzU1LDEzLjc1NXM2LjE3LDEzLjc1NCwxMy43NTUsMTMuNzU0YzcuNTg0LDAsMTMuNzU0LTYuMTcsMTMuNzU0LTEzLjc1NFMyMy4xMTMsMS43NzQsMTUuNTI5LDEuNzc0eiIgZmlsbD0iIzM5YzFmMCIvPgoJPC9nPgoJPGc+CgkJPHBhdGggZD0iTTIxLjY1MiwxNi40MTZIOS40MDZjLTAuNDksMC0wLjg4OC0wLjM5Ni0wLjg4OC0wLjg4N2MwLTAuNDksMC4zOTctMC44ODgsMC44ODgtMC44ODhoMTIuMjQ2ICAgIGMwLjQ5LDAsMC44ODcsMC4zOTgsMC44ODcsMC44ODhDMjIuNTM5LDE2LjAyLDIyLjE0MywxNi40MTYsMjEuNjUyLDE2LjQxNnoiIGZpbGw9IiMzOWMxZjAiLz4KCTwvZz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNS41MjksMjIuNTM5Yy0wLjQ5LDAtMC44ODgtMC4zOTctMC44ODgtMC44ODdWOS40MDZjMC0wLjQ5LDAuMzk4LTAuODg4LDAuODg4LTAuODg4ICAgIGMwLjQ5LDAsMC44ODcsMC4zOTgsMC44ODcsMC44ODh2MTIuMjQ2QzE2LjQxNiwyMi4xNDMsMTYuMDIsMjIuNTM5LDE1LjUyOSwyMi41Mzl6IiBmaWxsPSIjMzljMWYwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />

        </div> <br />

        <div class="content-project-container">

          @include('projects/project-card')

        </div>

      </div>

    </div>

  </div>

  @include('modals/modals')

@endsection
