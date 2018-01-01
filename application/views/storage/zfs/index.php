<?php
echo $data;
?>
<hr />
<input type="button" value="zpool list" onclick="sh('sudo zpool','list')" />
<input type="button" value="zpool status" onclick="sh('sudo zpool','status')" />

<input type="button" value="create" onclick="ax('/storage/index/hardware','hardware')" />

<input type="button" value="zpool create mirror" onclick="sh('zpool','create mirror')" />

<div id="hardware"></div>

<input type="button" value="install" onclick="shhh('/storage/zfs/install')" />
<input type="button" value="shtest" onclick="shhh('/system/test/sh')" />

<input type="button" value="test" onclick="shhh('/storage/zfs/test')" />
