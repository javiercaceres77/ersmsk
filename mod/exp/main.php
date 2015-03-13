<style type="text/css"></style>
<?php

if($ob_user->user_id == $conf_generic_user_id) {
	?>
	
<h5>International experience</h5>
<p class="parragraph">The principals of ERS Global have worked in Africa in Kenya, Tanzania, Uganda, Zimbabwe, Nigeria, Ethiopia, Burundi, in over 15 countries in Europe and Asia in India, Pakistan, Hong Kong & China, Australia, the UK, Gibraltar, Switzerland, France, Germany, Spain, Italy, Netherlands, Denmark, Romania, Estonia and Czech Republic.</p>
<h5>Industry Experience </h5>
<p class="parragraph">Oil & Gas, Wind Energy, Financial Institutions, Agricultural, NGO, FMCG , Mobile Telecoms, Multi-Media. </p>
<h5>Our track record </h5>
<p class="parragraph"><strong>Engineering Assignment</strong> &#8211 project management of medium sized to large size engineering and energy generation projects. </p>
<p class="parragraph"><strong>Risk Management</strong> &#8211 managed risk assignments and functions for large corporations, designed robust risk mitigation actions, build risk registers, risk prioritisation, performing corporate risk assessments, and help focus risk owners on the most critical project risks and top corporate risks. </p>
<p class="parragraph"><strong>Finance Sourcing</strong> &#8211 over 20 years experience in working with investment bankers and private equity financing from Europe and Asia for large and medium sized projects.  </p>
<p class="parragraph"><strong>Project Finance Management</strong> - able to identify opportunities that maximise competing stakeholders’ objectives and deliver on finance and non-finance qualitative organisational objectives.  </p>
<p class="parragraph"><strong>Corporate Governance and Internal Controls</strong> - managed Corporate Governance compliance implementations in Europe, Africa and Asia. </p>
<p class="parragraph"><strong>Strategic Planning and Budgeting</strong> &#8211 ERS Global principals sit on board advisory positions with specific mandates to manage strategic planning and corporate budgeting processes. </p>
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