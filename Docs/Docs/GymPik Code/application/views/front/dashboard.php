<div class="clear topPad40">&nbsp;</div>
<h3>Fitness Dashboard</h3>
<div id="tabs">
<div id="LeftMenu">
	<ul id="menu_user">
	<li><a href="#tabs-1">Daily workout</a></li>
	<li><a href="#tabs-2">Food intakes</a></li>
	<li><a href="#tabs-3">Measurements</a></li>
	<li><a href="#tabs-4">Progress</a></li>
	<li><a href="#tabs-5">Recommendation</a></li>
	</ul>
</div>
<div id="txtContainer">
	<div id="tabs-1" class="gympik_text">
	<h3>Daily workout</h3>
	<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
	</div>
	<div id="tabs-2" class="gympik_text">
	<h3>Food intakes</h3>
	<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
	</div>
	<div id="tabs-3" class="gympik_text">
	<h3>Measurements</h3>
	<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
	</div>
	<div id="tabs-4" class="gympik_text">
	<h3>Progress</h3>
	<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
	</div>
	<div id="tabs-5" class="gympik_text">
	<h3>Recommendation</h3>
	<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
	</div>
</div>	
</div>
<!-- Execution only if user have not completed his/her profile -->
<?php $userID = $this->site_santry->get_auth_data()->id;
	  if($this->commonmodel->profile_staus($userID)== 0 ){?>
			<a href="<?php echo base_url()?>user/incomplete_profile" class="ajax"></a>
			<script>
			$(document).ready(function(){
				$(".ajax").colorbox();
				$("a.ajax").colorbox({open:true,escKey:false,overlayClose:false});
			});
			</script>
<?php }?>
<!-- ends here -->

<script>
$(function() {
$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
});
</script>
