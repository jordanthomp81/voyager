<div class="create-modal-bg"></div>

<div class="animated fadeIn create-modal-container">

  @if(Request::is('projects/*'))
    <h1 class="create-modal-title">Create New Project</h1>
  @elseif(Request::is('tasks/*'))
    <h1 class="create-modal-title">Create New Task</h1>
  @endif

  <a href="#!"><img class="create-modal-close-btn" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDIxMi45ODIgMjEyLjk4MiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjEyLjk4MiAyMTIuOTgyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnIGlkPSJDbG9zZSI+Cgk8cGF0aCBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7IiBkPSJNMTMxLjgwNCwxMDYuNDkxbDc1LjkzNi03NS45MzZjNi45OS02Ljk5LDYuOTktMTguMzIzLDAtMjUuMzEyICAgYy02Ljk5LTYuOTktMTguMzIyLTYuOTktMjUuMzEyLDBsLTc1LjkzNyw3NS45MzdMMzAuNTU0LDUuMjQyYy02Ljk5LTYuOTktMTguMzIyLTYuOTktMjUuMzEyLDBjLTYuOTg5LDYuOTktNi45ODksMTguMzIzLDAsMjUuMzEyICAgbDc1LjkzNyw3NS45MzZMNS4yNDIsMTgyLjQyN2MtNi45ODksNi45OS02Ljk4OSwxOC4zMjMsMCwyNS4zMTJjNi45OSw2Ljk5LDE4LjMyMiw2Ljk5LDI1LjMxMiwwbDc1LjkzNy03NS45MzdsNzUuOTM3LDc1LjkzNyAgIGM2Ljk4OSw2Ljk5LDE4LjMyMiw2Ljk5LDI1LjMxMiwwYzYuOTktNi45OSw2Ljk5LTE4LjMyMiwwLTI1LjMxMkwxMzEuODA0LDEwNi40OTF6IiBmaWxsPSIjNGQ0YzRkIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a>

  <div class="clear"></div>

  <form class="" action="{{ route('projects.store') }}" method="POST">

    {{ method_field('POST') }}

    {{ csrf_field() }}

    <h2 class="create-modal-sub-title">Title</h2>

    <input class="create-modal-input" placeholder="Title" type="text" name="name"><br>

    <h2 class="create-modal-sub-title">Description</h2>

    <textarea class="create-modal-textarea" placeholder="Description" name="description"></textarea><br>

    <h2 class="create-modal-sub-title">Deadline</h2>

    <input class="create-modal-deadline" placeholder="Deadline" type="text" id="datepicker" name="deadline">

    <div class="clear"></div>

    <h2 class="create-modal-sub-title">Assign to Project</h2>

    @if(isset($modalProjects))

      <div class="create-modal-project-container">

        <select class="create-modal-project" name="project">

          @foreach ($modalProjects as $modalProject)

            <option>{{ $modalProject->name }}</option>

          @endforeach

        </select>

        <div class="select_arrow">
        </div>

      </div>

    @endif

    <div class="clear"></div><br>

    <input class="create-modal-submit" type="submit" name="submit" value="Create">

  </form>

</div>
