# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Cookieee!
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>This stupid cookie clicker game...
Legend has it there is a reward when you reach 10000000 or more clicks
Can you think of a way to get that many clicks?

&nbsp;
##### The solution:
&nbsp;
There might be a few ways to get the required result, but I went with editing the memory values of the game using artmoney (free download [here](http://artmoney.ru/)).
First run the game and make a few clicks to get a base score to find.
Then run artmoney, select the process and do a search for the ammount of clicks you made. It should take a few and show a lot of results.
Make some more clicks to change the click counter, and press filter in artmoney. change the value to the new ammount of clicks and let it filter...
repeat the process until only 1 value remains, then press the red button to move it to the right column. 
Here you can edit the value by double clicking it. Set it to 10000000 and make another click. You should get the flag now :)




**accepted flags = brixelCTF{m3m0ry}**