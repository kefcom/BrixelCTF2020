# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: login2
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Cool, you found the first password! He secured it more, could you try again?
http://timesink.be/login2/index.html




&nbsp;
##### The solution:
&nbsp;
The javascript now checks for part of the password, split by 6 characters, and does so in a random order.
"if (password.substring(0, split)" checks the password from 0 to 'split' which is 6, "if (password.substring(split*6, split*7)" checks the password from split * 6 (6 * 6) to split * 7 (6 * 7). You need to copy/paste the values in the right order (0-split, split - split * 2, split * 2 - split * 3, etc...)

**accepted flags = brixelCTF{st1ll_b4d_j4v45cr1pt_h3r3.18079054270}**
