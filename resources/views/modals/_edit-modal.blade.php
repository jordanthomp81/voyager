<div class="edit-modal-bg"></div>

<div class="animated fadeIn edit-modal-container">

  @if(Request::is('projects/*'))
    <h1 class="edit-modal-title">Edit Project</h1>
  @elseif(Request::is('tasks/*'))
    <h1 class="edit-modal-title">Edit Task</h1>
  @endif

  <a href="#!"><img class="edit-modal-close-btn" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDIxMi45ODIgMjEyLjk4MiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjEyLjk4MiAyMTIuOTgyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnIGlkPSJDbG9zZSI+Cgk8cGF0aCBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7IiBkPSJNMTMxLjgwNCwxMDYuNDkxbDc1LjkzNi03NS45MzZjNi45OS02Ljk5LDYuOTktMTguMzIzLDAtMjUuMzEyICAgYy02Ljk5LTYuOTktMTguMzIyLTYuOTktMjUuMzEyLDBsLTc1LjkzNyw3NS45MzdMMzAuNTU0LDUuMjQyYy02Ljk5LTYuOTktMTguMzIyLTYuOTktMjUuMzEyLDBjLTYuOTg5LDYuOTktNi45ODksMTguMzIzLDAsMjUuMzEyICAgbDc1LjkzNyw3NS45MzZMNS4yNDIsMTgyLjQyN2MtNi45ODksNi45OS02Ljk4OSwxOC4zMjMsMCwyNS4zMTJjNi45OSw2Ljk5LDE4LjMyMiw2Ljk5LDI1LjMxMiwwbDc1LjkzNy03NS45MzdsNzUuOTM3LDc1LjkzNyAgIGM2Ljk4OSw2Ljk5LDE4LjMyMiw2Ljk5LDI1LjMxMiwwYzYuOTktNi45OSw2Ljk5LTE4LjMyMiwwLTI1LjMxMkwxMzEuODA0LDEwNi40OTF6IiBmaWxsPSIjNGQ0YzRkIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a>

  <div class="clear"></div>

    @if(Request::is('projects/*'))
      @if(isset($project))
        <p class="edit-modal-link"><a href="{{ route('projects.index') }}">Projects</a> >> <a href="{{ route('projects.show', ['id' => $project->id]) }}">{{ $project->name }}</a></p>
      @endif
    @elseif(Request::is('tasks/*'))
      @foreach ($tasks as $task)
        <p class="edit-modal-link"><a href="{{ route('tasks.index') }}">Tasks</a> >> <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a></p>
      @endforeach
    @endif

    @if(Request::is('projects/*'))
      @if(isset($project))
        <form class="" action="{{ route('projects.update', ['id' => $project->id]) }}" method="POST">
      @endif
    @elseif(Request::is('tasks/*'))
      @foreach ($tasks as $task)
        <form class="" action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST">
      @endforeach
    @endif

    {{ method_field('PUT') }}

    {{ csrf_field() }}

    <h2 class="edit-modal-sub-title">Title</h2>

    @if(Request::is('projects/*'))
      @if(isset($project))
        <input class="edit-modal-input" type="text" name="name" value="{{ $project->name }}"><br>
      @endif
    @elseif(Request::is('tasks/*'))
      @foreach ($tasks as $task)
        <input class="edit-modal-input" type="text" name="name" value="{{ $task->title }}"><br>
      @endforeach
    @endif

    <h2 class="edit-modal-sub-title">Description</h2>

    @if(Request::is('projects/*'))
      @if(isset($project))
        <textarea class="edit-modal-textarea" name="description" value="{{ $project->description }}">{{ $project->description }}</textarea><br>
      @endif
    @elseif(Request::is('tasks/*'))
      @foreach ($tasks as $task)
        <textarea class="edit-modal-textarea" name="description" value="{{ $task->description }}">{{ $task->description }}</textarea><br>
      @endforeach
    @endif

    <h2 class="edit-modal-sub-title">Deadline</h2>

    @if(Request::is('projects/*'))
      @if(isset($project))
        <input class="edit-modal-deadline" type="text" id="datepicker" value="{{ $project->deadline }}" name="deadline">
      @endif
    @elseif(Request::is('tasks/*'))
      @foreach ($tasks as $task)
        <input class="edit-modal-deadline" type="text" id="datepicker" value="{{ $task->deadline }}" name="deadline">
      @endforeach
    @endif

    <div class="clear"></div>

    <h2 class="edit-modal-sub-title">Assign to Project</h2>

    @if(isset($modalProjects))

      <div class="edit-modal-project-container">

        <select class="edit-modal-project" name="project">

          @foreach ($modalProjects as $modalProject)

            @if($projects != $modalProject->name)
              <option value="{{ $modalProject->name }}">{{ $modalProject->name }}</option>
            @else
              <option selected value="{{ $modalProject->name }}">{{ $modalProject->name }}</option>
            @endif

          @endforeach

        </select>

        <div class="select_arrow">
        </div>

      </div>

    @endif

    <div class="clear"></div><br>

    <input class="edit-modal-submit" type="submit" name="submit" value="Update">

  </form>

</div>
