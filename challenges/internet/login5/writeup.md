# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: login5
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Ok, THIS time it should be fine! if you find this one he is going to quit trying.
http://timesink.be/login5/index.html

&nbsp;
##### The solution:
&nbsp;
Here the author used a obfuscation tool to mask the javascript function that does the processing, which is nice, but he forgot you can edit the javascript since it's running in your own browser. By looking at the code, we can see somewhere near the end that it checks if password==newpassword, so we need to get the variable called newpassword. You can do that by using the console tool in your browser.
first open your inspector (F12 in firefox), and go to the console. Then press the login button on the site and while the 'invalid password' alert is shown, type "alert(newpassword);" into the debugger and press enter. When you press ok on the alert another one will appear with the right password.

**accepted flags = brixelctf{0bfuscati0n}**
