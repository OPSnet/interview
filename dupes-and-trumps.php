<?
include('publicheader.php');
include('sidebar.php');

newstop();

newsbox(' Dupes & Trumps','
<h3>Dupes, Releases, and Editions</h3>
<h4>Releases</h4>
Most albums have been pressed multiple times in slightly different ways. Any difference at all between two versions of the same album counts as a different release. You can find examples on sites like Discogs, where you\'ll typically find many different releases listed for a particular album. <br /><br />

This of course applies to more than just albums, and extends in the same way to different pressings of singles, EP\'s, anthologies, etc. <br /><br />

Not every unique release is allowed on ' . $SITENAME . '. Many releases are classified as dupes because while they have some differences, there are <strong>no meaningful differences in the audio content</strong>.  Only those releases which have meaningfully different audio content are allowed to co-exist on ' . $SITENAME . ', and we call them <strong>editions</strong>. <br /><br />

<h4>Editions</h4>

A different edition is where the audio content is <strong>significantly and meaningfully different</strong>.<br /><br />

<strong>The determination of distinct editions for a CD goes beyond just catalog information</strong>. It relies on various factors such as rip log information, which includes the table of contents, peak levels, and pre-gaps. These details, along with the tracklist and running order, play a crucial role in differentiating one edition from another.<br /><br />

<strong>While differences in catalog numbers, years of release, labels, countries of origin, or CD packaging may exist between CDs, they alone do not warrant the creation of a new and distinct edition</strong>.<br /><br />

<h4>Dupes</h4>

A dupe is when a new torrent is the same edition and same quality as an existing torrent. ' . $SITENAME . ' allows many different pressings of the same CD to coexist, as long the the CDs are distinct editions, meaning they have meaningfully different audio content.
<br /><br />
Torrents that have the same bitrates, formats, and comparable or identical sampling rates for the same edition are duplicates. If a torrent is already present on the site in the format and bitrate you wanted to upload, you are not allowed to upload it.
<br /><br />
For example, International Versions (especially Japanese releases) often have bonus tracks that are not present in the original release or the US release. Uploading a release with bonus tracks when the original release has already been uploaded is not considered a dupe because there is different content on both CDs.

<ul>
<li>Scene and non-scene torrents for the same release, in the same bitrate and format, are dupes.</li>
<li>Torrents that have been inactive (not seeded) for two weeks may be trumped by the identical torrent (reseeded) or by a brand new rip or encode of the album. If you have the original torrent files for the inactive torrent, you should reseed those original files instead of uploading a new torrent.</li>
</ul>
<h3>Trumps</h3>
The process of replacing a torrent that does not follow the rules with a torrent that does follow the rules is called <strong>trumping</strong>.<br />The most common trumps are format trumps, tag trumps, and folder trumps.

<h3>Format Trumps</h3>
The following chart shows the hierarchy of format trumps.
<p style="text-align: center;"><a href="trumpchart.png" rel="lightbox[39]"><img title="Trump Chart" alt="" src="trumpchart.png" width="500" height="250" /></a></p>
At the top of each column in a green box are formats that can never be trumped. We recommend that you only upload in these formats in order to prevent your torrents from being trumped by other users.<br />
<strong>Lossy Format Trump Rules</strong>
<ul>
<li>If there is no existing torrent of the album in the allowed format you&#8217;ve chosen, you may upload it in any bitrate that averages at least 192 kbps.</li>
<li>You may always upload MP3 V0 , MP3 V2, or MP3 320kbps (CBR) as long as another rip with the same bitrate and format doesn&#8217;t already exist.</li>
<li>Higher bitrate CBR (Constant Bitrate) and ABR (Average Bitrate) torrents replace lower ones. Once a CBR rip has been uploaded, no CBR rips of that bitrate or lower can be uploaded. In the same manner, once an ABR rip has been uploaded, no ABR rips of that bitrate or lower can be uploaded.</li>
<li>AAC encodes can be trumped by any allowed MP3 format of the same edition and media. (This does not apply to AAC torrents with files bought from the iTunes Store that contain iTunes Exclusive tracks.)</li>
<li>Lossy format torrents with .log files, .cue files, .m3u files, and album artwork do not replace equivalent existing torrents.</li>
</ul>
<strong>Lossless Format Trump Rules</strong>
<ul>
<li>Rips must be taken from commercially pressed or official (artist- or label-approved) CD sources. They may not come from CD-R copies of the same pressed CDs (unless the release was only distributed on CD-R by the artist or label).</li>
<li>A FLAC torrent without a log (or with a log from a non-EAC or non-XLD ripping tool like dBpoweramp or Rubyripper) may be trumped by a FLAC torrent with a log from an approved ripping tool with any score.</li>
<li>A FLAC upload with an EAC or XLD log that scores 100% on the log checker replaces one with a lower score. However, no log scoring less than 100% can trump an already existing one that scores under 100% (for example, a rip with a 99% log cannot replace a rip with an 80% log).</li>
<li>A 100% log rip without a cue sheet can be replaced by a 100% log rip with a noncompliant cue sheet ONLY when the included cue sheet is materially different from &#8220;a cue generated from the ripping log.&#8221; Examples of a material difference include additional or correct indices, properly detected pre-gap lengths, and pre-emphasis flags.</li>
</ul>
<h3>Tag Trumps</h3>
<strong>Tag trumps</strong> happen when the original torrent either doesn&#8217;t have the required tag fields or the information in one of the tag fields is completely wrong or misspelled. In the case of misspelled words, the spelling must be entirely off in order for the tag trump to be considered (for example, missing prepositions like &#8220;the&#8221; or &#8220;a&#8221;, or a couple letters being in the wrong order like &#8220;lvoe&#8221; instead of &#8220;love&#8221; is not enough for a tag trump).
<ul>
<li>The required tag fields are: title, album, artist, track number.</li>
<li>Torrent album titles must accurately reflect the actual album titles. Use proper capitalization when naming your albums. Typing the album titles in all lowercase letters or all capital letters is unacceptable and makes the torrent trumpable.</li>
<li>Newly re-tagged torrents trumping badly tagged torrents must reflect a substantial improvement over the previous tags. Small changes that include replacing ASCII characters with proper foreign language characters with diacritical marks (<em>&#225;, &#233;, &#237;, &#243;, &#250;</em>, etc.), fixing slight misspellings, or missing an alternate spelling of an artist (excluding &#8220;The&#8221; before a band name) are not enough for replacing other torrents.</li>
</ul>
<h3>Folder Trumps</h3>
<strong>Folder trumps</strong> happen when the original torrent&#8217;s folder is not named like it should be. Folders should at the very least include the album name, but should hopefully also include the year released and music format. Nested folders are also not allowed.
<ul>
<li>Music releases must be in a directory that contains the music. This includes single track releases, which must be enclosed in a torrent folder even if there is only one file in the torrent. No music may be compressed in an archive (.rar, .zip, .tar, .iso).</li>
<li>Name your directories with meaningful titles, such as &#8220;Artist &#8211; Album (Year) &#8211; Format.&#8221; The minimum acceptable is &#8220;Album&#8221; although you should include more information.</li>
<li>Avoid creating unnecessary nested folders (such as an extra folder for the actual album) inside your properly named directory.</li>
<li>File names must accurately reflect the song titles. You may not have file names like 01track.mp3, 02track.mp3, etc. Torrents containing files that are named with incorrect song titles can be trumped by properly labeled torrents.</li>
<li>Multiple-disc torrents cannot have tracks with the same numbers in one directory. You may place all the tracks for Disc One in one directory and all the tracks for Disc Two in another directory.</li>
</ul>
');

newsbot();
include('publicfooter.php');

