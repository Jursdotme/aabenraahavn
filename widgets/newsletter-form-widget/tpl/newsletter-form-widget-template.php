<?php ?>

<!--START Scripts : this is the script part you can add to the header of your theme-->
<script type="text/javascript" src="http://aabenraaport.dk.linux16.curanetserver.dk/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-da.js?ver=2.6.16"></script>
<script type="text/javascript" src="http://aabenraaport.dk.linux16.curanetserver.dk/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.6.16"></script>
<script type="text/javascript" src="http://aabenraaport.dk.linux16.curanetserver.dk/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.16"></script>
<script type="text/javascript">
  /* <![CDATA[ */
  	var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://aabenraaport.dk.linux16.curanetserver.dk/wp-admin/admin-ajax.php","loadingTrans":"Loader..."};
  /* ]]> */
</script>
<script type="text/javascript" src="http://aabenraaport.dk.linux16.curanetserver.dk/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.16"></script>
<!--END Scripts-->

<div class="widget_wysija_cont html_wysija">
	<div id="msg-form-wysija-html55e02cb4c77a0-1" class="wysija-msg ajax"></div>
	<form id="form-wysija-html55e02cb4c77a0-1" method="post" action="#wysija" class="widget_wysija html_wysija">
		<div class="wysija-paragraph name">
	    <input placeholder="Navn*" type="text" name="wysija[user][firstname]" class="wysija-input " title="Navn"  value="" />
	    <span class="abs-req">
	        <input type="text" name="wysija[user][abs][firstname]" class="wysija-input validated[abs][firstname]" value="" />
	    </span>
		</div>
		<div class="wysija-paragraph email">

    	<input placeholder="E-mail*" type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="E-mail"  value="" />
	    <span class="abs-req">
        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
	    </span>
		</div>
		<div class="wysija-button-container">
		  <input class="wysija-submit wysija-submit-field" type="submit" value="Tilmeld!" />
		</div>

    <input type="hidden" name="form_id" value="1" />
    <input type="hidden" name="action" value="save" />
    <input type="hidden" name="controller" value="subscribers" />
    <input type="hidden" value="1" name="wysija-page" />
		<input type="hidden" name="wysija[user_list][list_ids]" value="1" />
 	</form>
</div>
