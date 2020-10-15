# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: s̸͖̾̀͊͠h̸̜̒ï̷̧̲͙̭̤͛͒̋t̷̢̲͚͖̑͜ 
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>A messenger droid was caught during the intergalactic war
Upon investigating his memory banks, we found this message:
MDExMTAxMDAgMDExMDEwMDAgMDExMDAxMDEgMDAxMDAwMDAgMDExMDAxMTAgMDExMDExMDAgMDExMDAwMDEgMDExMDAxMTEgMDAxMDAwMDAgMDExMDEwMDEgMDExMTAwMTEgMDAxMDAwMDAgMDExMDAwMTAgMDExMTAwMTAgMDExMDEwMDEgMDExMTEwMDAgMDExMDAxMDEgMDExMDExMDAgMDEwMDAwMTEgMDEwMTAxMDAgMDEwMDAxMTAgMDExMTEwMTEgMDExMTAwMTAgMDExMDExMTEgMDExMDAwMTAgMDExMDExMTEgMDExMDAwMTEgMDExMDExMTEgMDExMTAwMDAgMDExMTExMDE=
We are lucky we found him, he was only 64 parsecs from his base


&nbsp;
##### The solution:
&nbsp;
A glance at the message should suggest it being BASE64, if not, the '64 parsecs from his ***base***' should have been a dead giveaway ;)
When run trough an online decoder like https://www.base64decode.org/ it returns a bunch of binary.
You can translate the binary to text using an online tool like https://www.rapidtables.com/convert/number/binary-to-ascii.html.
The result: ***the flag is brixelCTF{robocop}***

**accepted flags = brixelCTF{robocop}**