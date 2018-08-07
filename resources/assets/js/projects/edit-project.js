var tempProjects;
$(document).ready(function() {
  $('#datepicker').datepicker();
  tempProjects = $('.content-project');

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
