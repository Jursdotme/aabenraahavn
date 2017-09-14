$(document).ready(function(){

  var $iconList = $('.fa-list');

  if ($iconList.length) {

    $iconList.find('ul').addClass('fa-ul');

    var classList = $iconList.attr('class').split(/\s+/);

    for (var index = 0; index < classList.length; ++index) {
      if (classList[index].substring(0, 3) == 'fa-' && classList[index] != 'fa-list') {
          var iconName = classList[index];
          $iconList.find('li').prepend('<i class="fa-li fa '+iconName+'"></i>');
      }
    }

  }



  $('.panel-grid-cell')
    .filter(function() {
        return $.trim($(this).text()) === '' && $(this).children().length == 0
    })
    .addClass('hide-on-small')

});
