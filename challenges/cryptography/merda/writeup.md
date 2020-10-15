# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: *merda*
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>An Italian messenger was caught during the war
He was carrying a piece of paper that read: ymj kqfl nx gwncjqHYK{uneefsfutqn}
Upon torturing the messenger for an explaination, he gestured a V with his fingers. The english guard took it as an insult and killed him right on the spot.
Maybe he just wanted some peace?

&nbsp;
##### The solution:
&nbsp;
There are quite a few hints given in the description here:
* It's encryption (since it's in the crypto category)
* It's italian from origin
* We have the encrypted text bearing the distinct 'brixelCTF{}' format near the end
* We know the messenger gestured a V, which is an english insult, the 'peace' symbol, but also the roman numeral 5

When we search for encryption methods used by the romans, we quickly find the 'ceasar cipher'.
It's a technique used by Julius Ceasar's army to encrypt and decrypt messages so when a messenger got captured the enemy would not be able to read the message.
It uses a rotation method to compare 2 alphabets, so if we take the normal alphabet (abcdefg...) and add a rotation of 1, it will become (bcdefgh...), if we add 2, it becomes (cdefghi...).
So we know (from the V symbol) this text was rotated by 5, and could manually add letters to decode it, or use an online tool for that.
In this demonstration I used https://www.dcode.fr/caesar-cipher .
Enter the encrypted text, the known shift of 5 and press the decrypt button.
On the left it will output: the flag is brixelCTF{pizzanapoli}

**accepted flags = brixelCTF{pizzanapoli}**