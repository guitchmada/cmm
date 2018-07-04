Drupal.behaviors.user = {
  attach: function (context, settings) {
   
	// le username doit être l'email:
    jQuery("#edit-account #edit-mail").blur(function () {
      jQuery("#edit-account #edit-name").val(jQuery("#edit-account #edit-mail").val());
    });
    //donc pas besoin d'encoder le username :
    jQuery("#edit-account .form-item-name").hide();
	    
  }
};

function exportCSV() {
	//Export CSV dans toutes les views avec un seul export
	window.open(jQuery(".feed-icon").attr('href'));
}