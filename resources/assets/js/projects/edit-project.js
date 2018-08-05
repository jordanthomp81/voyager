$(document).ready(function() {
  $('#datepicker').datepicker();

  // toggle showing the project edit modal
  $('.individual-more-options-sub-menu-title').click(function() {
    debugger;
    if($(this).html() != '') {
      $('.individual-project-edit-modal-bg').addClass('active');
      $('.individual-project-edit-modal-container').addClass('active');
    }
  });

  // toggle showing the create project modal
  $('.content-title-add-new-icon').click(function() {
    $('.individual-project-create-modal-title').html('Create New Project');
    $('.individual-project-create-modal-container form').attr('action', '/projects');
    $('.individual-project-create-modal-bg').addClass('active');
    $('.individual-project-create-modal-container').addClass('active');
  });

  // toggle showing the create project modal
  $('.individual-task-add-icon').click(function() {
    $('.individual-project-create-modal-title').html('Create New Task');
    $('.individual-project-create-modal-container form').attr('action', '/tasks');
    $('.individual-project-create-modal-bg').addClass('active');
    $('.individual-project-create-modal-container').addClass('active');
  });

  // toggle showing the create project modal
  $('.dashboard-header-new-project-icon').click(function() {
    $('.individual-project-create-modal-bg').addClass('active');
    $('.individual-project-create-modal-container').addClass('active');
  });

  // toggle hiding the project edit modal
  $('.individual-project-edit-modal-close-btn').click(function() {
    $('.individual-project-edit-modal-bg').removeClass('active');
    $('.individual-project-edit-modal-container').removeClass('active');
  });

  // toggle hiding the project edit modal
  $('.individual-project-create-modal-close-btn').click(function() {
    $('.individual-project-create-modal-bg').removeClass('active');
    $('.individual-project-create-modal-container').removeClass('active');
  });
});
