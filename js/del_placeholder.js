jQuery(document).ready(function () {
  jQuery('input,textarea').focus(function(){
     jQuery(this).removeAttr('placeholder');
  });
});
