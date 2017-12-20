<style type="text/css">
	.bar1,.bar2,.bar3{width: 25px;height: 1px;padding: 1px;background-color: black; margin-top: 5px;margin-bottom: 5px;transition: .3s}
	.menuicon{display: inline-block;cursor: pointer;}
	.rotate .bar1{-webkit-transform:rotate(-45deg) translate(-9px,6px);}
	.rotate .bar2{opacity: 0}
	.rotate .bar3{-webkit-transform:rotate(45deg) translate(-4px,-4px);}
</style>

<div class="menuicon" onclick="animation(this)" id="menu">
	<div class="bar1"></div>
	<div class="bar2"></div>
	<div class="bar3"></div>
</div>
<script type="text/javascript">
	function animation(x)
	{
		x.classList.toggle("rotate");
	}
</script>