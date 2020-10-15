# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Rufus the vampire cat 
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>This is a picture of Rufus the vampire cat
Despite being cute, Rufus hides a secret, up to you to find it
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format


&nbsp;
##### The solution:
&nbsp;
This is a classic stegano in an image challenge. A common way used to hide something in an image is by using steghide, you could download the software or just use an online tool like: http://www.futureboy.us/stegano/decinput.html.
If you decode it there you will find this text: 
***You thought this was a cute cat picture? NOPE! Chuck Testa! (the flag is:chucktesta)***


**accepted flags = chucktesta / brixelCTF{chucktesta}**