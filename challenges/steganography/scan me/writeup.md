# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Scan me
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Can you solve this scan puzzle?
It could be handy to hide messages



&nbsp;
##### The solution:
&nbsp;
Here we see a qr code, if we scan the complete block it reads brixelCTF over and over again.
However there is a little qr code inside the qr code, just look at the top right corner where there are more identifier marks.
If we scan that we get a URL: http://timesink.be/qrcode/flag.html
Once opened we are greeted with a barcode, this is the standard code-128
if scanned it reads: code-128-easy, enter it on the website.
The next one is a ean13 barcode, reading: 5449000133335, enter it on the website.
The next one is a Pdf417 type barcode: reading: congratulations_this_is_the_last_barcode
if you enter this on the site you get the flag: 

**accepted flags = brixelCTF{m4st3r_0f_sc4n5}**