<nav>
	<div class="nav-wrapper">
		<a href="" class="brand-logo right">Logo</a>
		<a href="" data-activates="slide-out" class="btn_menu brand-logo left" style="padding-left: 10px;"><i class="material-icons">menu</i></a>
	</div>
	<ul id="slide-out" class="side-nav">
		<li><div class="user-view">
			<div class="background">
				<img src="http://materializecss.com/images/office.jpg">
			</div>
			<a href=""><img class="circle"src="http://materializecss.com/images/yuna.jpg"></a>
			<a href=""><span class="white-text name">Micaela Duarte<span></a>
			<a href=""><span class="white-text email">micaeladuarte1990@gmail.com<span></a>
		</div>
		</li>
		<li><div class="divider"></div></li>
		<li><a class="subheader">Subheader</a></li>
		<li><a href=""><i class="material-icons">cloud</i>First Link With Icon </a></li>
	</ul>
	<script>
		$(document).ready(function(){
			$(".btn_menu").sideNav();
			});
	</script>
</nav>