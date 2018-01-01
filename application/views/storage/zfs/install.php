
<input type="button" value="install prerequisites" onclick="sh('apt-get','-y install build-essential gawk alien fakeroot linux-headers-$(uname -r) zlib1g-dev uuid-dev libblkid-dev libselinux-dev parted lsscsi')" />

<input type="button" value="download spl" onclick="sh('wget','')" />


<div id="sh"></div>
<div id="status"></div>

