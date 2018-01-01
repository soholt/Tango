<script>
$("#logs").one('click', function () {
      //$(this).height(30)
             //.css({cursor:"auto", backgroundColor:"green"});
    });
//$('#logs').height(30)


</script>

	<?php



			exec('sudo find /var/log -type f', $allLogs);

			sort($allLogs);

			foreach($allLogs as $log)
			{
				//echo '<div id="logFile">' . $log . "</div>\n";
				$logs[] = str_replace('/var/log/', '', $log);
			}
//echo '<pre>';print_r($logs);exit;

	//TODO uri
	$uri = '/system/logs/log';

	//$logs = $data;

	$path = '/var/log/';

	$tree = '';

	foreach($logs as $log)
	{

		$tree .= '<li onclick="ax(\'' . $uri . '?q=' . $log . '\',\'log\')"><div id="logs">' . $path . $log . '</div></li>';
/*
		if($log != '')
		{

			if(strpos($log, $path) === FALSE)	//	IS A FILE
			{
				//echo '<li onclick="aajax("' . $uri . $log '?", "log")">' . $path . $log . '</li>';
				$tree .= '<li onclick="ax(\'' . $uri . '?q=' . $log . '\',\'log\')"><div id="logs">' . $path . $log . '</div></li>';
			}
			else	//	IS A DIR
			{
				$log = str_replace($path, '', $log);

				$log = substr($log, 0, -1);

				$tree .= '[+] ' . $log . '------<br>';
			}

			//echo $log . '<br>';
		}
*/
	}

	?>
	</ul>
</div>
<table>
<tr>
	<td valign="top"><div id="list"><?php echo $tree; ?></div></td>
	<?php //width:1000px; ?>
	<td valign="top"><div id="log" style="height:450px;overflow:auto;font-size:.8em; font-family: courier;">Logs...</div></td>
</tr>

</table>

<div id="list">
	<ul>

		<li><span class="toggle">testDir</span>
			<ul>
				<li><span class="toggle">323232</span>
					<ul>
						<li><a href="./testDir/323232/sgasdfgag.php">sgasdfgag.php</a></li>
					</ul>
				</li>
				<li><span class="toggle">empty</span>
					<ul></ul>
				</li>
				<li><a href="./testDir/555555.txt">555555.txt</a></li>

			</ul>
		</li>
		<li><a href="?index.php">index.php</a></li>
		<li><a href="./style.css">style.css</a></li>
		<li><a href="./script.js">script.js</a></li>
	</ul>

</div>

