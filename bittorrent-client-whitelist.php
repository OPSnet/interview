<?
	include('publicheader.php');
	include('sidebar.php');

newstop();

// If you update the list, make sure to update the "Last updated" line at the bottom of this page!
newsbox('Bittorrent client whitelist', '
<p>The following BitTorrent clients are on the ' . $SITENAME . ' whitelist:</p>
<ul>
<li>aTorrent 2.x</li>
<li>aTorrent 3.x</li>
<li>BitTorrent 7.xx</li>
<li>Deluge 1.2.x</li>
<li>Deluge 1.3.x</li>
<li>Deluge 2.x</li>
<li>Flud 1.4.8</li>
<li>Flud 1.4.9</li>
<li>Halite 0.4.x</li>
<li>KTorrent 20.x</li>
<li>KTorrent 21.x</li>
<li>KTorrent 22.x</li>
<li>KTorrent 4.x</li>
<li>KTorrent 5.x</li>
<li>Libtorrent (Rasterbar)</li>
<li>libtorrent (rtorrent) 0.13.x</li>
<li>qBittorrent 2.x</li>
<li>qBittorrent 3.x</li>
<li>qBittorrent 4.0.x</li>
<li>qBittorrent 4.1.x</li>
<li>qBittorrent 4.2.x</li>
<li>qBittorrent 4.3.x</li>
<li>qBittorrent 4.4.x</li>
<li>qBittorrent 4.5.x</li>
<li>Transmission 2.x</li>
<li>Transmission 3.0.x</li>
<li>Transmission 4.0.1</li>
<li>Transmission 4.0.2</li>
<li>Transmission 4.0.3</li>
<li>Mainline</li>
</ul>

<strong>If there is an &#8220;x&#8221; behind a decimal, that means that any number can be substituted for the x. For example: qBittorrent 4.4.x means that qBittorrent 4.4.0, 4.4.1, 4.4.2, etc. are all on the whitelist.</strong><br /><br />
<em>Last updated: 13 July 2023</em>');

newsbot();

	include('publicfooter.php');
?>
