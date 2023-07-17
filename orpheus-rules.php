<? 
	include('publicheader.php');
	include('sidebar.php');

newstop();

newsbox('Golden rules of ' . $SITENAME,'<p>The Golden Rules encompass all of ' . $SITENAME . ' and our IRC Network. These rules are paramount non-compliance will jeopardize your account. </p>
<ul style="list-style: none; padding-left: 0;"><li><p>1.1</p></li>
<li><strong>One account per person, per lifetime.</strong></li>
<li>Users are allowed one account per lifetime. If your account is disabled, contact staff in #disabled on IRC. Never make another account, you will be disabled without question.</li>
<li><p>1.2</p></li>
<li><strong>Do not trade, sell, give away, or offer accounts.</strong></li>
<li>If you no longer wish to use your account, send a Staff PM and request that your account be disabled.</li>
<li><p>1.3</p></li>
<li><strong>Do not share accounts.</strong></li>
<li>Accounts are for personal use only. Granting access to your account in any way (e.g., shared login details, external programs) is prohibited. Invite friends or direct them to the interview channel (#recruitment).</li>
<li><p>1.4</p></li>
<li><strong>Do not let your account become inactive.</strong></li>
<li>You agree to log into the site regularly in order to keep your account in good standing. Failure to do so will result in your account being disabled. See Account Inactivity for more information.</li>
<li><p>2.1</p></li>
<li><strong>Do not invite bad users.</strong></li>
<li>You are responsible for your invitees. You will not be punished if your invitees fail to maintain required share ratios, but invitees who break golden rules will place your invite privileges and account at risk.</li>
<li><p>2.2</p></li>
<li><strong>Do not trade, sell, publicly give away, or publicly offer invites.</strong></li>
<li>Only invite people you know and trust. Do not offer invites via other trackers, forums, social media, or other public locations. Responding to public invite requests is prohibited. Exception: Staff-designated recruiters may offer invites in approved locations.</li>
<li><p>2.3</p></li>
<li><strong>Do not request invites or accounts.</strong></li>
<li>Requesting invites to—or accounts on—Orpheus or other trackers is prohibited. Invites may be offered, but not requested, in the Invites forum (restricted to the Elite class and above). You may request invites by messaging users only when they have offered them in the Invites Forum. Unsolicited invite </li>requests, even by private message, are prohibited.
<li><p>3.1</p></li>
<li><strong>Do not engage in ratio manipulation.</strong></li>
<li>Transferring buffer—or increasing your buffer—through unintended uses of the BitTorrent protocol or site features (e.g., request abuse) constitutes ratio manipulation. When in doubt, send a Staff PM asking for more information.</li>
<li><p>3.2</p></li>
<li><strong>Do not report incorrect data to the tracker (i.e., cheating).</strong></li>
<li>Reporting incorrect data to the tracker constitutes cheating, whether it is accomplished through the use of a modified "cheat client" or through manipulation of an approved client.</li>
<li><p>3.3</p></li>
<li><strong>Do not use unapproved clients.</strong></li>
<li>Your client must be listed on the Client Whitelist. You must not use clients that have been modified in any way. Developers interested in clients that have been modified in any way. Do not use a client you do not have direct and exclusive access to. Developers interested in testing unstable clients must receive staff approval prior to testing.</li>
<li><p>3.4</p></li>
<li><strong>Do not modify Orpheus .torrent files.</strong></li>
<li>Embedding non-Orpheus announce URLs in Orpheus .torrents is prohibited. Doing so causes false data to be reported and will be interpreted as cheating. This applies to standalone .torrent files and .torrent files that have been loaded into a client.</li>
<li><p>3.5</p></li>
<li><strong>Do not share .torrent files or your passkey.</strong></li>
<li>Embedded in each Orpheus .torrent file is an announce URL containing your personal passkey. Passkeys enable users to report stats to the tracker.</li>
<li><p>4.1</p></li>
<li><strong>Do not blackmail, threaten, or expose fellow users or staff.</strong></li>
<li>Exposing or threatening to expose private information about users for any reason is prohibited. Private information includes, but is not limited to, personally identifying information (e.g., names, records, biographical details, photos). Information that has not been openly volunteered by a user should not </li>be discussed or shared without permission. This includes private information collected via investigations into openly volunteered information (e.g., Google search results).
<li><p>4.2</p></li>
<li><strong>Do not scam or defraud.</strong></li>
<li>Scams (e.g., phishing) of any kind are prohibited.</li>
<li><p>4.3</p></li>
<li><strong>Do not disrespect staff decisions.</strong></li>
<li>Disagreements must be discussed privately with the deciding moderator. If the moderator has retired or is unavailable, you may send a Staff PM. Do not contact multiple moderators hoping to find one amenable to your cause; however, you may contact a site administrator if you require a second opinion. Options </li>for contacting staff include private message, Staff PM, and #help on IRC.
<li><p>4.4</p></li>
<li><strong>Do not impersonate staff.</strong></li>
<li>Impersonating staff or official service accounts (e.g., Hermes) on-site, off-site, or on IRC is prohibited. Deceptively misrepresenting staff decisions is also prohibited.</li>
<li><p>4.5</p></li>
<li><strong>Do not backseat moderate.</strong></li>
<li>"Backseat moderation" occurs when users police other users. Confronting, provoking, or chastising users suspected of violating rules—or users suspected of submitting reports—is prohibited. Submit a report if you see a rule violation.</li>
<li><p>4.6</p></li>
<li><strong>Do not request special events.</strong></li>
<li>Special events (e.g., freeleech, neutral leech, picks) are launched at the discretion of the staff. They do not adhere to a fixed schedule, and may not be requested by users.</li>
<li><p>4.7</p></li>
<li><strong>Do not harvest user-identifying information.</strong></li>
<li>It is prohibited to use Orpheus\'s services to harvest user-identifying information of any kind (e.g., IP addresses, personal links) through the use of scripts, exploits, or other techniques.</li>
<li><p>4.8</p></li>
<li><strong>Do not use Orpheus\'s services (including the tracker, website, and IRC network) for commercial gain.</strong></li>
<li>Commercializing services provided by or code maintained by Orpheus (e.g., Gazelle, Ocelot) is prohibited. Commercializing content provided by Orpheus users via the aforementioned services (e.g., user torrent data) is prohibited. Referral schemes, financial solicitations, and money offers are also prohibited.</li>
<li><p>5.1</p></li>
<li><strong>Do not browse Orpheus using any free proxy or VPN service.</strong></li>
<li>You may browse the site through a VPN/proxy only if you have paid for this service. This includes (for example) self-hosted VPNs or proxies, services like NordVPN and VPNs or proxies that come with a seedbox. When in doubt, please send a Staff PM. The use of Tor for browsing the site is not allowed.</li>
<li><p>5.2</p></li>
<li><strong>Do not abuse automated site access.</strong></li>
<li>All automated site access must be done through the API. API use is limited to 5 requests within any 10-second window. Scripts and other automated processes must not scrape the site\'s HTML pages. When in doubt, seek advice from staff.</li>
<li><p>5.3</p></li>
<li><strong>Do not autosnatch freeleech torrents.</strong></li>
<li>The automatic snatching of freeleech torrents using any method involving little or no user-input (e.g., API-based scripts, log or site scraping, etc.) is prohibited. See Orpheus\'s Freeleech Autosnatching Policy article for more information.</li>
<li><p>6.1</p></li>
<li><strong>Do not seek or exploit live bugs for any reason.</strong></li>
<li>Seeking or exploiting bugs in the live site (as opposed to a local development environment) is prohibited. If you discover a critical bug or security vulnerability, immediately report it in accordance with Orpheus\'s Responsible Disclosure Policy. Non-critical bugs can be reported in the Bugs Forum.</li>
<li><p>6.2</p></li>
<li><strong>Do not publish exploits.</strong></li>
<li>The publication, organization, dissemination, sharing, technical discussion, or technical facilitation of exploits is prohibited at staff discretion. Exploits are defined as unanticipated or unaccepted uses of internal, external, non-profit, or for-profit services. Exploits are subject to reclassification </li>at any time.
<li><p>7.0</p></li>
<li><strong>Be respectful to all staff members.</strong></li>
<li>Staff on Orpheus are volunteers who dedicate their time in order to keep the site running, while receiving no compensation. Being disrespectful to them is prohibited, and might result in a warning or a ban.</li>
<li><p>7.1</p></li>
<li><strong>Staff have the final word on rule interpretations.</strong></li>
<li>All rules on Orpheus may be subject to different interpretations. Since the staff wrote these rules, their interpretation is final. If you need clarification on a rule, or if you think a rule should be restated, please send a Staff PM.</li></ul>
');

newsbot();

	include('publicfooter.php'); 
?>