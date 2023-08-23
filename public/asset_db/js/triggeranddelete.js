function triggerNextLink(element ) {
  var nextLink = $(element).closest('.media-cell').find('.media-cell-desc a');
  if (nextLink.length > 0) {
    $(nextLink)[0].click();
  }
}


//ITS DELETE IMPATH

function detection(e) {
  $('#activate_detect').show();
  $('#activate_classificate').hide();
  $(e).addClass("boldd")
  $('#xy').removeClass("boldd")
}

function classification(e) {
  $('#activate_detect').hide();
  $('#activate_classificate').show();

  $(e).addClass("boldd")
  $('#mn').removeClass("boldd")
}

$('.refresh').click(function() {
  location.reload(true);
});
