<style>
#box
{
	width:500px;
	height:500px;
	//padding:15px;
	margin:0px auto;
	padding:0px;
	background-color:#666363;
	//overflow:hidden;
}
.box-kecil
{
	width:120px;
	float:left;
	height:120px;
	background-color:white;
	margin:10px;
}
</style>
	<div id="box">
		<?php
			for($i=0;$i<10;$i++)
			{
				echo "<div class='box-kecil'></div>";
			}
		?>
	</div>
