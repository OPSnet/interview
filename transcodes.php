<? 
	include('publicheader.php');
	include('sidebar.php');

newstop();

newsbox('Transcodes', '
<strong>Transcoding (verb)</strong> a file means converting from one format to another. A <strong>transcode (noun)</strong> can mean any converted file, but is usually used in a negative context (as in a bad transcode).
<h3>Good Transcodes</h3>
A <strong>good transcode</strong> means that during the transcode process, the file has been converted to any other lossless format, or the file has either never been converted to lossy, or the file has only been converted to lossy once during the last step.
<br />

<h3>Bad Transcodes</h3>
A <strong>bad transcode</strong> means that during the transcode process, the file has either been converted to a lossy format more than once, or the file has been converted from lossy to lossless. <strong>Bad transcodes are prohibited on ' . $SITENAME . '.</strong>
<br />
<hr>
<li style="color: lime;">Transcodes from lossless to lossless are always OK.</li>
<li><span style="color: lime;">A transcode from lossless to lossy is OK</span><span  style="color: red;">, but any further transcode of the lossy file is bad.</span></li>
<li style="color: red;">Any transcode from a lossy source is a bad transcode, period. (lossy to lossy or lossy to lossless).</li>
</ul>');

newsbot();

	include('publicfooter.php'); 
?>