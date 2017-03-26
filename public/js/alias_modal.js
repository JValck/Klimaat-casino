$(document).ready(function () {
  $('.modal').modal();
  appendSelectListener();
});
function appendSelectListener() {
  $('#alias-select').on('change', function(e) {
    var aliasId = parseInt($('#alias-select').val());
    $.ajax({
      type: "GET",
      url: '/ajax/alias/' + aliasId,
      success: function (data) {
        populateModal(data);
        openModal();
      },
    });
    return false;
  });
}
function populateModal(data) {
  $("#modal-header").text(data.name);
  $('#modal-text').text(data.description);
  $('#modal-image').attr('src', 'img/'+data.image);
}

function openModal() {
  $('#modal').modal('open');
}
