# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: login4
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Whow, another one! You're good! So I told my buddy how you managed to get the password last time, and he fixed it. Could you check again please?
http://timesink.be/login4/index.html 

&nbsp;
##### The solution:
&nbsp;
This is the same as login3, but the username and password are now base64 encoded. Should be simple to decode using an online tool.


**accepted flags = brixelCTF{even_base64_wont_make_you_secure}**