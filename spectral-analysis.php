<? 
	include('publicheader.php');
	include('sidebar.php');

newstop();

newsbox('Spectral Analysis', '<strong>Spectral analysis</strong> is a visual way to display the data in a music file. Every music note has a specific <strong>frequency</strong>: lower notes have lower frequencies and higher notes have higher frequencies. All of the frequencies are displayed on a <strong>spectral diagram</strong> (&#8220;<strong>spectral</strong>&#8221; for short), which is a graph of all the frequencies vs. time in a music file. Frequencies are measured in hertz (Hz) and kilohertz (1,000 Hz). Humans have a hearing range from about 20 Hz &#8212; 20kHz (20,000 Hz).
<br /><br />
Since spectrals show all the data in a file, they are helpful tools to use when you&#8217;re trying to decide whether or not a song has been transcoded. Every file has a relatively standard frequency cut-off.
<br /><br />

Some tools exist to automatically determine whether or not something is legitimate lossless. Two such tools are Audio Identifier and auCDtect. <strong>They are useless. Discard all of them. Do not speak of them. Most importantly, do not trust them.</strong> They are not reliable indicators of quality and are wrong extremely often.
<br /><br />

<h3>Lossless Audio</h3>
Lossless files, to put it simply, contain all the audio data of the release. They lack the artifacts that lossy encoders create and, in many cases, have audio data that extends for the most to all of the CD format frequency range. <strong>There are no rough, blocky cutoffs; if there is a cutoff, it is clean and sometimes more of a rolling off of audio data than a sharp cutoff.</strong>
<br /><br />

Despite representing all the available audio data, lossless files can still have cutoffs. Luckily, mastering decisions to cut off the audio at certain frequencies do not create lossy artifacts, so even if the "loud" part of the spectral (red/orange/pink colors in SoX) ends early and segues into the "quiet" part of the spectral (purple/blue in SoX) before cutoff points below 21 kHz, it does not necessarily mean the file is a transcode. Due to cutoffs being applied by both mastering engineers and lossy encoders, the attributes of the cutoff are more telling than its location. When those lower frequency fade-outs are smooth, and blue/purple audio data can still be spotted above it without any lossy artifacting, you can safely assume a lossy encoder has not been run over the file.
<br /><br />

However, you will sometimes see a few lossy artifacts inside a file that is mostly lossless. When we refer to "lossy samples," we refer to this. The file is overwhelmingly lossless, and the authenticity of the file cannot be doubted, but a few artifacts are present. Usually, this will be a few block artifacts coincide with a lot of lossless data. There are no artifacts that affect the entire track; only a section or certain sample.
<br /><br />
<strong>Click on any of the spectrals below to view it in a higher resolution.</strong>
<h4>21.5 kHz cutoff (Lossless)</h4>
<div class="gallery">
<p style="float:left; width: 100%;"><a href="215-kHz-cutoff.png"><img class="aligncenter" title="21.5 kHz cutoff(lossless)" src="215-kHz-cutoff.png" height="220" style="width: 100%;" /></a></p>
</div>
<br /><br />
<h4>Early fade out <19 kHz (Lossless)</h4>
<div class="gallery">
<p style="float:left; width: 100%;"><a href="early-fadeout-less-19khz.png"><img class="aligncenter" title="Early fade out <19 kHz (Lossless)" src="early-fadeout-less-19khz.png" height="220" style="width: 100%;" /></a></p>
</div>
<br /><br />
<h4>Lossless with noise shaping (Lossless)</h4>
<div class="gallery">
<p style="float:left; width: 100%;"><a href="lossless-with-noise-shaping.png"><img class="aligncenter" title="Lossless with noise shaping (Lossless)" src="lossless-with-noise-shaping.png" height="220" style="width: 100%;" /></a></p>
</div>
<br /><br />
<h4>Data + Noise (Lossless)</h4>
<div class="gallery">
<p style="float:left; width: 100%;"><a href="data-noise.png"><img class="aligncenter" title="Data + Noise (Lossless)" src="data-noise.png" height="220" style="width: 100%;" /></a></p>
</div>
<br /><br />

<h4>Quiet tracks</h4>
Some genres, such as Classical and Jazz, often have very quiet recordings. When examining the spectrals for quiet albums, most of the data will be blue and it can be very hard to spot data in the double-digit frequency ranges. That does not mean that a file is lossy--the unassuming nature of spectrals of quiet tracks does not equate to a degradation in quality.

<p style="width: 100%;"><a href="Guide-FLAC-Classical.jpg"><img class="aligncenter" title="Spectral (FLAC � Classical)" src="Guide-FLAC-Classical.jpg" height="220" style="width: 100%;"/></a></p>

It looks much different, right? But it&#8217;s still a lossless spectral! Notice how &#8220;white noise&#8221; (the light purple) still extends to 22 kHz, even though those frequencies aren&#8217;t used.<br /><br />
<h3>MP3 / Lossy Files</h3>
Lossy files are used to lower file sizes at the cost of bits. With the assistance of magic complicated algorithms, they can greatly reduce the size of an audio file while keeping it transparent. A transparent encode means that a human listener cannot tell the difference between the lossy file and its lossless source. Transcodes from lossless to lossy are good. Transcodes from lossy are bad. Some of these algorithms leave visible traces in a spectral, which we can use to determine some information about a track.
<br /><br />
By definition, a lossy file cannot be reconstructed into its lossless source. Bits necessary for doing so have been removed from the file, and other bits manipulated to create a sound that sounds equivalent to the original, at least to humans. Out of all the mainstream encoders used by consumers of music, ' . $SITENAME . ' allows MP3 and AAC (trumpable by MP3).
<br /><br />
Different types of MP3s have different frequency cut-offs. MP3s also tend to have a &#8220;shelf&#8221; at 16 kHz (you&#8217;ll see it in the spectrals).
<p style="text-align: center;">MP3 320kbps (CBR) has a frequency cut-off at 20.5 kHz.</p>
<p style="text-align: center;"><a href="Guide-MP3-320-CBR.jpg" rel="lightbox[35]"><img class="aligncenter  wp-image-139" title="Spectral (MP3 320)" src="Guide-MP3-320-CBR.jpg" alt="" width="580" height="220" /></a></p>
<p style="text-align: center;">MP3 256kbps (CBR) has a frequency cut-off at 20 kHz.</p>
<p style="text-align: center;"><a href="Guide-MP3-256-CBR.jpg" rel="lightbox[35]"><img class="aligncenter  wp-image-138" title="Spectral (MP3 256)" src="Guide-MP3-256-CBR.jpg" alt="" width="580" height="220" /></a></p>
<p style="text-align: center;">MP3 V0 has a frequency cut-off at 19.5 kHz.</p>
<p style="text-align: center;"><a href="Guide-MP3-V0.jpg" rel="lightbox[35]"><img class="aligncenter  wp-image-140" title="Spectral (MP3 V0)" src="Guide-MP3-V0.jpg" alt="" width="580" height="220" /></a></p>
<p style="text-align: center;">MP3 192kbps (CBR) has a frequency cut-off at 19 kHz.</p>
<p style="text-align: center;"><a href="Guide-MP3-192-CBR.jpg" rel="lightbox[35]"><img class="aligncenter  wp-image-136" title="Spectral (MP3 192)" src="Guide-MP3-192-CBR.jpg" alt="" width="580" height="220" /></a></p>
<p style="text-align: center;">MP3 V2 has a frequency cut-off at 18.5 kHz.</p>
<p style="text-align: center;"><a href="Guide-MP3-V2.jpg" rel="lightbox[35]"><img class="aligncenter  wp-image-141" title="Spectral (MP3 V2)" src="Guide-MP3-V2.jpg" alt="" width="580" height="220" /></a></p>
<p style="text-align: center;">MP3 128kbps (CBR) has a frequency cut-off at 16 kHz.</p>
<p style="text-align: center;"><a href="Guide-MP3-128-CBR.jpg" rel="lightbox[35]"><img class="aligncenter  wp-image-135" title="Spectral (MP3 128)" src="Guide-MP3-128-CBR.jpg" alt="" width="580" height="220" /></a></p>
<h3>Transcodes</h3>
How are spectrals helpful when trying to detect transcodes? Say you download a song in FLAC from a blog. The only way to verify that this song is truly a lossless file and not a transcoded file is by looking at its spectral. (Programs like AudioIdentifier are not reliable at detecting transcodes.)
<br /><br />
For example, the spectral below is of a FLAC file: the file extension is .flac, it is 21.8 MB, and it sounds okay.
<p style="text-align: center;"><a href="Guide-MP3-192-to-FLAC.jpg" rel="lightbox[35]"><img class="aligncenter  wp-image-137" title="Spectral (MP3 192 to FLAC)" src="Guide-MP3-192-to-FLAC.jpg" alt="" width="580" height="220" /></a></p>
But whoa, does that look anything like what a regular FLAC spectral should look like? No! This file was transcoded from MP3 192kbps (CBR) to FLAC. It&#8217;s a lossy to lossless transcode, which is bad.
<h3>Programs</h3>
For spectral analysis, we recommend using either <a title="Adobe Audition" href="http://www.adobe.com/products/audition.html" target="_blank"><strong>Adobe Audition</strong></a> (Windows or Mac OS), <a title="Audacity" href="http://audacity.sourceforge.net/" target="_blank"><strong>Audacity</strong></a> (Windows, Mac OS, Linux), and <a title="SoX" href="http://sox.sourceforge.net/" target="_blank">SoX</a> (Windows, Mac OS, Linux &mdash; command line only). All of the spectrals that appear in this guide were viewed in Adobe Audition CS 6.
Although you should use spectral analysis to determine whether a file is a transcode or not, you will need to use another program to first determine what bitrate or encoding preset the file claims to be. For this purpose, we recommend using <a title="AudioIdentifier" href="http://download.cnet.com/Audio-Identifier/3000-2141_4-10703771.html" target="_blank"><strong>Audio Identifier</strong></a> or <a title="dbPowerAmp" href="http://www.dbpoweramp.com/" target="_blank"><strong>dbPowerAmp</strong></a> on Windows and <a title="dnuos" href="https://bitheap.org/dnuos/" target="_blank"><strong>dnuos</strong></a> or <a title="MediaInfo" href="http://mediainfo.sourceforge.net/en" target="_blank"><strong>MediaInfo</strong></a> on Mac OS.

<h3>Final note</h3>
What you have learned here is only the basic recognition of the most egregious transcodes, and that is what we will be going over in our interview. There is much more involved in determining whether a file is lossless, lossy, or a lossy master, but that is outside the scope of this interview. You can learn more about it in our more in-depth guide on ' . $SITENAME . '.
');

newsbot();

	include('publicfooter.php'); 
?>