<style type="text/css">
	.sidenav{top: 0;left: 0;background-color: black;width: 0;position: fixed;height: 100%;transition: 0.5s;overflow-x:hidden; z-index: 1 }
	.sidenav .clsbtn{top: 5;right: 10;margin-left: 60;position: absolute;}
	.sidenav a{color: grey;font-size: 30px;margin-left: 10px;display: block;text-decoration: none; transition: 0.3s;padding: 8px;}
	.sidenav a:hover{color: white;}
	#main{transition:margin-left 0.3s;padding:18;position: relative;}
</style>


<div class="sidenav" id="mysidenav">
<a href="#"onclick="closenav()" class="clsbtn">&times;</a>
	<a href="#">About us</a>
	<a href="#">Home</a>
	<a href="#">contact</a>
	<a href="#">services</a>
</div>
<div id="main"><p>Hi there! i am Pradyumna kumar dalai.This is my first code in github. And I wish it will encourage me.</p> <span onclick="opennav()" style="cursor: pointer;">&#9776;open</span></div>
<script type="text/javascript">
	function opennav() {
	document.getElementById("mysidenav").style.width="250px";
	
		

	}
	function closenav()
	{
	
	document.getElementById("mysidenav").style.width="0";
	}
	</script>