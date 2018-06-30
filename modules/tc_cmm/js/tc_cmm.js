Drupal.behaviors.user = {
  attach: function (context, settings) {
   
	// le username doit être l'email:
    jQuery("#edit-mail").blur(function () {
      jQuery("#edit-name").val(jQuery("#edit-mail").val());
    });
    //donc pas besoin d'encoder le username :
    jQuery(".form-item-name").hide();
	    
  }
};