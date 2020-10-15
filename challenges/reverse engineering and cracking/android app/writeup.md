# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Android app
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>This little android app requires a password, can you find it?
the flag is the password

&nbsp;
##### The solution:
&nbsp;
First we need to extract the APK file and decompile the javascript, we can use an online tool for that: http://www.javadecompilers.com/apk
this spits out a zipfile containing the android package, in these files there is a folder under sources called appinventor, if you go down that folder there are 4 java files. A quick search of "brixelCTF{" will find the flag quickly in screen1.java




**accepted flags = brixelCTF{th3_4ndr0ids_y0u_4r3_l00k1ng_f0r}**