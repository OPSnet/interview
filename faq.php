<?
include('publicheader.php');
include('sidebar.php');

newstop();

newsbox('FAQ', '
<ul style="list-style: none; padding-left: 0;"><li><strong>Q: How do I queue for an interview?</strong></li>
<li>A: In #recruitment type: <strong>"/msg hermes !queue https://www.speedtest.net/result/123456789.png"</strong>.</li>
<br>
<li><strong>Q: When will interview open and how long does one interview take?</strong></li>
<li>A: Interviews are open from saturday 00:00 UTC to sunday 23:59 UTC and it takes around 80 minutes.</li>
<br>
<li><strong>Q: How do I leave the queue? Is there any penalty for leaving before my interview starts?</strong></li>
<li>A: You can remove yourself from the queue by leaving the #recruitment channel or typing  <strong>"/msg hermes !cancel" </strong>. There is no penalty for leaving the queue at any time. </li>
<br>
<li><strong>Q: Do I lose my position in the queue when I leave #recruitment? / I was disconnected while in the queue. Do I have to queue again?</strong></li>
<li>A: Yes. Please requeue using a fresh speedtest.</li>
<br>
<li><strong>Q: Can I hang out in #recruitment without queuing?</strong></li>
<li>A: No. This channel is only for people that wish to interview. </li>
<br>
<li><strong>Q: What kinds of questions are asked during the interview?</strong></li>
<li>A: Everything mentioned on our site <a href="https://interview.orpheus.network/" target="_blank">https://interview.orpheus.network/</a>.</li>
<br>
<li><strong>Q: How many questions can I get wrong? Do I have to get 100%?</strong></li>
<li>A: You do not have to get every question right. It depends on which questions you miss, as some topics are more important than others.</li>
<br>
<li><strong>Q: Can I refer to the interview prep website during the interview? What about my own notes?</strong></li>
<li>A: No. No notes or references of any kind are allowed during the interview.</li>
<br>
<li><strong>Q: What if my interview starts while I am away? </strong></li>
<li>A: You have 15 minutes to respond. Any longer is up to the discretion of your interviewer. </li>
<br>
<li><strong>Q: What if I need to step away for a little while during the interview?</strong></li>
<li>A: Let your interviewer know how long you need, and they will let you know if it\'s OK.</li>
<br>
<li><strong>Q: Can I use a VPN connection for the interview? Can I interview on my phone or other mobile device?</strong></li>
<li>A: No. You must physically be at home and on your home connection in order to be allowed to be interviewed.</li>
<br>
<li><strong>Q: Someone behind me in the queue just started the interview. Why was I skipped?</strong></li>
<li>A: You need to be connected on port <strong>7000</strong> to join the interview. Interviewers also cannot interview the same candidate more than once.</li></ul>
');

newsbot();
include('publicfooter.php');

