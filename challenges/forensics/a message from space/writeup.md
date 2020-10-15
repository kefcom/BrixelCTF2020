# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: A message from space
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>I received a message from space
Beam me up scottie1!

&nbsp;
##### The solution:
&nbsp;
This is a slow scan tv (SSTV) transmission commonly used to send images from space to earth.
We can decode this using software like [rx-sstv](http://users.belgacom.net/hamradio/rxsstv.htm) or [mmsstv](https://hamsoft.ca/pages/mmsstv.php) both freeware.
I used rx-sstv in this demonstration, the usage is simple: put the recording on your phone, open the software and play the recording into your microphone.
While it plays the image will become visible.
The flag is visible at the end of the image.

**accepted flags = brixelCTF{sp4c3l4b}**