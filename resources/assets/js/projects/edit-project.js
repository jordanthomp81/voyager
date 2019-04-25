// spit out the list to the browser
function produceItem(tempObj) {
  for (i = 0; i < tempObj.length; i++) {
    var template = $('<a href="#!" class="content-project"><p class="content-project-deadline"></p><p class="content-project-subtasks"></p><h2></h2><p class="content-project-description"></p><div class="content-project-controls-container"><img class="content-project-controls-edit" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDUyOC44OTkgNTI4Ljg5OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTI4Ljg5OSA1MjguODk5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTMyOC44ODMsODkuMTI1bDEwNy41OSwxMDcuNTg5bC0yNzIuMzQsMjcyLjM0TDU2LjYwNCwzNjEuNDY1TDMyOC44ODMsODkuMTI1eiBNNTE4LjExMyw2My4xNzdsLTQ3Ljk4MS00Ny45ODEgICBjLTE4LjU0My0xOC41NDMtNDguNjUzLTE4LjU0My02Ny4yNTksMGwtNDUuOTYxLDQ1Ljk2MWwxMDcuNTksMTA3LjU5bDUzLjYxMS01My42MTEgICBDNTMyLjQ5NSwxMDAuNzUzLDUzMi40OTUsNzcuNTU5LDUxOC4xMTMsNjMuMTc3eiBNMC4zLDUxMi42OWMtMS45NTgsOC44MTIsNS45OTgsMTYuNzA4LDE0LjgxMSwxNC41NjVsMTE5Ljg5MS0yOS4wNjkgICBMMjcuNDczLDM5MC41OTdMMC4zLDUxMi42OXoiIGZpbGw9IiM2YTZhNmIiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /><p class="content-project-controls-members"></p></div></a>');
    template.find('.content-project-deadline').html(tempObj[i].date);
    if(tempObj[i].tasks <= 1) {
      template.find('.content-project-subtasks').html(tempObj[i].tasks + " Task");
    }else {
      template.find('.content-project-subtasks').html(tempObj[i].tasks + " Tasks");
    }
    template.find('.content-project-description').html(tempObj[i].description);
    template.find('h2').html(tempObj[i].title);
    if(tempObj[i].members <= 1) {
      template.find('.content-project-controls-members').html(tempObj[i].members + " Member");
    }else {
      template.find('.content-project-controls-members').html(tempObj[i].members + " Members");
    }
    template.attr('href', tempObj[i].link);
    $('.content-project-container').append(template);
  }
}

// date sort params
function compareDate(a, b) {
  // debugger;
  if(a.date == 'No Deadline') {
    // return false;
  }else {
    return new Date(b.date) - new Date(a.date);
  }
  // var amyDate = a.date.split("/");
  // if(amyDate[0][0] == '0') {
  //   var aNewDate = new Date(amyDate[0][1]+","+amyDate[1]+","+amyDate[2]).getTime();
  // }else {
  //   var aNewDate = new Date(amyDate[0]+","+amyDate[1]+","+amyDate[2]).getTime();
  // }
  // var bmyDate = b.date.split("/");
  // if(bmyDate[0][0] == '0') {
  //   var bNewDate = new Date(bmyDate[0][1]+","+bmyDate[1]+","+bmyDate[2]).getTime();
  // }else {
  //   var bNewDate = new Date(bmyDate[0]+","+bmyDate[1]+","+bmyDate[2]).getTime();
  // }
  // return ((aNewDate < bNewDate) ? -1 : ((aNewDate > bNewDate) ? 1 : 0));
}

// member sort params
function compareMember(a, b) {
  var valueA = a.members;
  var valueB = b.members;

  if (valueA > valueB) return -1;
  if (valueA < valueB) return 1;
  return 0;
}

// task sort params
function compareTask(a, b) {
  var valueA = a.tasks;
  var valueB = b.tasks;

  if (valueA > valueB) return -1;
  if (valueA < valueB) return 1;
  return 0;
}

// title sort params
function compareTitle(a, b) {
  return a.title.localeCompare(b.title);
}

function sortCardDate() {
  // grab obj list
  // debugger;
  var tempObj = elementToObj();
  var tempNoDeadlineObj = [];
  var tempDeadlineObj = [];
  for (var x = 0; x < tempObj.length; x++) {
    if(tempObj[x].date == 'No Deadline') {
      tempNoDeadlineObj.push(tempObj[x]);
    }else {
      tempDeadlineObj.push(tempObj[x]);
    }
  }
  // debugger;
  // sort the list
  tempDeadlineObj.sort(compareDate);
  finalObj = tempDeadlineObj.concat(tempNoDeadlineObj);
  // Empty the items currently in the list
  $('.content-project-container').empty();
  // spit out the list to the browser
  produceItem(finalObj)
}

function sortCardMembers() {
  // grab obj list
  var tempObj = elementToObj();
  // sort the list
  tempObj.sort(compareMember);
  // Empty the items currently in the list
  $('.content-project-container').empty();
  // spit out the list to the browser
  produceItem(tempObj);
}

function sortCardTasks() {
  // grab obj list
  var tempObj = elementToObj();
  // sort the list
  tempObj.sort(compareTask);
  // Empty the items currently in the list
  $('.content-project-container').empty();
  // spit out the list to the browser
  produceItem(tempObj);
}

function sortCardTitle() {
  // grab obj list
  var tempObj = elementToObj();
  // sort the list
  tempObj.sort(compareTitle);
  // Empty the items currently in the list
  $('.content-project-container').empty();
  // spit out the list to the browser
  produceItem(tempObj);
}

function elementToObj() {
  // convert the element data into an object array
  var tempObjArr = [];
  $('.content-project').each(function() {
    tempObjArr.push({
      link: $(this).attr('href'),
      description: $(this).find('.content-project-description').html(),
      date: $(this).find('.content-project-deadline').html().trim(' '),
      tasks: parseInt($(this).find('.content-project-subtasks').html().split(' ')[0]),
      title: $(this).find('h2').html(),
      members: parseInt($(this).find('.content-project-controls-members').html().trim(' ').split(' ')[0])
    });
  });
  return tempObjArr;
}

function sortCardRouter() {
  // debugger;
  var args = [];
  for (var i = 0; i < arguments.length; ++i) args[i] = arguments[i];
  for (var i = 0; i < arguments.length; ++i) {
    switch(args[i]) {
      case 'date':
        sortCardDate();
        break;
      case 'members':
        sortCardMembers();
        break;
      case 'tasks':
        sortCardTasks();
        break;
      case 'title':
        sortCardTitle();
        break;
    }
  }
}

var tempProjects;
$(document).ready(function() {
  $('#datepicker').datepicker();
  tempProjects = $('.content-project');

  var tempItemStorage = $('.content-project');
  var tempCurrTask = '';
  $('.content-task .pretty').click(function() {
    tempCurrTask = $(this).parent();
    tempCurrTask.addClass('animated fadeOutRight');
    setTimeout(function(){
      tempCurrTask.addClass('de-active');
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      var tempCurrId = parseInt(tempCurrTask.find('.content-task-project-container').attr('href').split('/')[1]);
      var tempUrl = 'http://127.0.0.1:8000/tasks/complete/' + tempCurrId;
      axios.get(tempUrl, {
        headers: {
          _token: CSRF_TOKEN,
          'Content-Type': 'application/json'
        }
      })
      .then(function(response) {
        // debugger;
      })
      .catch(function(error) {
        // debugger;
        console.log(error);
      });
    }, 700);
  });

  $('.individual-task-item-container .pretty').click(function() {
    tempCurrTask = $(this).parent();
    tempCurrTask.addClass('animated fadeOutRight');
    setTimeout(function(){
      debugger;
      tempCurrTask.addClass('de-active');
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      var tempCurrId = parseInt(tempCurrTask.find('.individual-task-item-title').attr('href').split('/')[1]);
      var tempUrl = 'http://127.0.0.1:8000/tasks/complete/' + tempCurrId;
      axios.get(tempUrl, {
        headers: {
          _token: CSRF_TOKEN,
          'Content-Type': 'application/json'
        }
      })
      .then(function(response) {
        // debugger;
      })
      .catch(function(error) {
        // debugger;
        console.log(error);
      });
    }, 700);
  });

  $('.filter-deadline').click(function() {
    if($(this).hasClass('active')) {
      // return original data
      $('.content-project-container').empty();
      for (i = 0; i < tempItemStorage.length; i++) {
        $('.content-project-container').append(tempItemStorage[i]);
      }
      $('.content-project-container').removeClass('active');
      $('.sub-menu-title').removeClass('active');
    }else {
      // sort data
      sortCardRouter('date');
      $('.sub-menu-title').removeClass('active');
      $(this).addClass('active');
      $('.content-project-container').addClass('active');
    }
  });

  $('.filter-title').click(function() {
    if($(this).hasClass('active')) {
      // return original data
      $('.content-project-container').empty();
      for (i = 0; i < tempItemStorage.length; i++) {
        $('.content-project-container').append(tempItemStorage[i]);
      }
      $('.content-project-container').removeClass('active');
      $('.sub-menu-title').removeClass('active');
    }else {
      // sort data
      sortCardRouter('title');
      $('.sub-menu-title').removeClass('active');
      $(this).addClass('active');
      $('.content-project-container').addClass('active');
    }
  });

  $('.filter-tasks').click(function() {
    if($(this).hasClass('active')) {
      // return original data
      $('.content-project-container').empty();
      for (i = 0; i < tempItemStorage.length; i++) {
        $('.content-project-container').append(tempItemStorage[i]);
      }
      $('.content-project-container').removeClass('active');
      $('.sub-menu-title').removeClass('active');
    }else {
      // sort data
      sortCardRouter('tasks');
      $('.sub-menu-title').removeClass('active');
      $(this).addClass('active');
      $('.content-project-container').addClass('active');
    }
  });

  $('.filter-members').click(function() {
    if($(this).hasClass('active')) {
      // return original data
      $('.content-project-container').empty();
      for (i = 0; i < tempItemStorage.length; i++) {
        $('.content-project-container').append(tempItemStorage[i]);
      }
      $('.content-project-container').removeClass('active');
      $('.sub-menu-title').removeClass('active');
    }else {
      // sort data
      sortCardRouter('members');
      $('.sub-menu-title').removeClass('active');
      $(this).addClass('active');
      $('.content-project-container').addClass('active');
    }
  });

  $('.content-filter-container').click(function() {
    $(this).find('.sub-menu').toggleClass('active');
    $(this).toggleClass('active');
  })

  // search projects
  $('.content-search-input').on('input', function() {
    var searchTerm = $('.content-search-input').val();
    var tempProjectsCopy = tempProjects;
    var tempProjectLength = $('.content-project').length;
    if(searchTerm.length > 0) {
      if(tempProjectLength > 0) {
        tempProjectsCopy.each(function(){
          var tempDeadline = $(this).find('.content-project-deadline').html().toLowerCase().indexOf(searchTerm.toLowerCase()) > -1;
          var tempTitle = $(this).find('h2').html().toLowerCase().indexOf(searchTerm.toLowerCase()) > -1;
          var tempDescription = $(this).find('.content-project-description').html().toLowerCase().indexOf(searchTerm.toLowerCase()) > -1;
          if(tempDeadline || tempTitle || tempDescription) {
            // do nothing
          }else {
            debugger;
            // remove
            $(this).remove();
          }
        });
      }
    }else {
      for (var x = 0; x <= tempProjects.length; x++) {
        $('.content-project-container').append(tempProjects[x]);
      }
    }
  });

  // toggle showing the project edit modal
  $('.individual-more-options-sub-menu-title.edit-btn').click(function() {
    if($(this).html() != '') {
      $('.edit-modal-bg').addClass('active');
      $('.edit-modal-container').addClass('active');
    }
  });

  $('.individual-more-options-sub-menu-title.delete-btn').click(function() {
    if($(this).html() != '') {
      $('.delete-modal-bg').addClass('active');
      $('.delete-modal-container').addClass('active');
    }
  });

  // toggle showing the create project modal
  $('.content-title-add-new-icon').click(function() {
    $('.create-modal-title').html('Create New Project');
    $('.create-modal-container form').attr('action', '/projects');
    $('.create-modal-bg').addClass('active');
    $('.create-modal-container').addClass('active');
  });

  // toggle showing the create project modal
  $('.individual-task-add-icon').click(function() {
    $('.create-modal-title').html('Create New Task');
    $('.create-modal-container form').attr('action', '/tasks');
    $('.create-modal-bg').addClass('active');
    $('.create-modal-container').addClass('active');
  });

  // toggle showing the create project modal
  $('.dashboard-header-new-project-icon').click(function() {
    $('.create-modal-bg').addClass('active');
    $('.create-modal-container').addClass('active');
  });

  // toggle hiding the project edit modal
  $('.edit-modal-close-btn').click(function() {
    $('.edit-modal-bg').removeClass('active');
    $('.edit-modal-container').removeClass('active');
  });

  $('.delete-modal-close-btn').click(function() {
    $('.delete-modal-bg').removeClass('active');
    $('.delete-modal-container').removeClass('active');
  });

  // toggle hiding the project edit modal
  $('.create-modal-close-btn').click(function() {
    $('.create-modal-bg').removeClass('active');
    $('.create-modal-container').removeClass('active');
  });
});
