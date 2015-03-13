<style type="text/css"></style>
<?php

if($ob_user->user_id == $conf_generic_user_id) {
	?>
	
<h5>Who we are</h5>
<p style="parragraph">ERS Global is an international project finance and energy consulting company, specialising in the delivery of engineering projects, energy resources consulting, procurement of project financing and government liaison to effect projects.  </p>
<p class="parragraph">ERS Global applies robust risk management and observes high standards of corporate governance principles in all its assignments.</p>
<h5>How we work</h5>
<p class="parragraph">ERS Global places great importance in possessing local knowledge and experience in the assignments it undertakes.  To achieve this, ERS Global assigns teams of consultants with relevant local knowledge and experience.  ERS Global also partners with local organisations, government agencies, and other reputable consultants to efficiently transfer knowledge as well as apply local content. </p>
<h5>ERS Global principals</h5>
<p class="parragraph">ERS Global principals are experienced technical professionals and corporate executives on average with over 25 years of relevant experience. </p>
<p class="parragraph"><strong>Personal Attributes</strong> &#8211 ERS Global principals are technical and commercial executives of high integrity and self-motivated with exceptionally good communication and leadership skills.  </p>
<p class="parragraph"><strong>Project Management & Large Team Management</strong> &#8211 ERS Global principals have managed senior management teams across countries and multiple sites in Africa, Europe, Asia and Australia.  Examples include in Nigeria, India, Pakistan, Ethiopia, Spain, Italy and Romania. </p>
<!--
<form action="<?= $conf_main_page; ?>?action=login" method="post" name="login_form">
  <table border="0" style="margin-top:40px; margin-left:355px;" width="200">
    <tr>
      <td><div class="small_text">e-mail</div>
        <input name="user" type="text" class="input_normal" id="user" maxlength="60" autofocus="autofocus" tabindex="1" style="width: 250px;" /></td>
    </tr>
    <tr>
      <td style="padding-top:15px;"><div class="small_text">
          <?= password; ?>
        </div>
        <input name="pass" type="password" class="input_normal" id="pass" maxlength="30" tabindex="2" style="width: 250px;" /></td>
    </tr>
    <tr>
      <td align="right" class="small_text"><a href="#">
        <?= forgot_password_q; ?>
        </a></td>
    </tr>
    <tr>
      <td align="right" style="padding-top:15px;"><input name="Submit" type="submit"  onClick="JavaScript:submit_login_form()" class="button" value="   <?= strtoupper(login); ?>   " tabindex="3" style="width:140px;" /></td>
    </tr>
    <tr>
      <td align="right"><p> <a href="<?= $conf_main_page; ?>?mod=home&view=new_user">
          <?= ucfirst(new_user); ?>
          </a></p></td>
    </tr>
  </table>
</form>
<table border="0" style="margin-top:20px; margin-left:280px;" width="400">
  <tr>
    <td><p><?= pb_main_intro_1; ?>.</p>
    <p><?= pb_main_free_1; ?>.</p></td>
  </tr>
</table>
</div>
-->
<?php
}
else {
	jump_to($conf_main_page);
}
?>