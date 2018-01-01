<style>


#logs{border:1px solid}
#logFile{border:1px solid;}
#logContent{border:1px solid}
#log{border:1px solid}


#left{
float:left;
overflow: scroll;
/*
//position: absolute;
//top: 0;
//bottom: 0;
//left: 0;
//width: 200px;
height: 100%;
//background: navy;
//color: white;
*/
/*/hidden; /*Disable scrollbars. Set to "scroll" to enable*/

}

#right{
float:right;
overflow: scroll;

/*
//position: fixed;
//position: absolute;
//top: 0;
//left: 200px;
//right: 0;
//bottom: 0;
//overflow: auto;
//background: #fff;
*/
}

/*#log { width:50px; height:70px; float:left; margin:5px; background:rgb(255,140,0); cursor:pointer; }*/

#log{cursor:pointer;}
</style>


<table>
<tr>
	<td valign="top">
		<div id="list">
			<?php

			exec('sudo find /var/log -type f', $logs);

			sort($logs);

			foreach($logs as $log)
			{
				echo '<div id="logFile">' . $log . "</div>\n";
			}
			?>
		</div>
	</td>
	<?php //width:1000px; ?>
	<td valign="top"><div id="log" style="height:450px;overflow:auto;font-size:.8em; font-family: arial;">Logs...</div></td>
</tr>

</table>


<div>

	<div id="left">
	<?php

	exec('sudo find /var/log -type f', $logs);

	sort($logs);

	foreach($logs as $log)
	{
		echo '<div id="logFile">' . $log . "</div>\n";
	}
	?>
	</div>

	<div id="right">content</div>

</div>



<div id="log">sfdsdf</div>



<script>

//var something = document.getElementById('something');

//something.style.cursor = 'pointer';
//something.onclick = function() {
    // do something...
//};



//$('#logs').height(30)
//console.log('JS WINDOW | height: '+$(window).height()+' | width: '+$(window).width());

</script>