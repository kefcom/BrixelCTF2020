# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: *merde*
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>A french messenger was caught during the war
He was carrying a piece of paper that read: Vvr ktdk vl jvtzsyHBI{fnzcievs}
Upon torturing the messenger for an explaination, he only shouted 'confidentiel'!!!
Too bad he died, I bet something good was in that message :(

&nbsp;
##### The solution:
&nbsp;
There are quite a few hints given in the description here:
* It's encryption (since it's in the crypto category)
* It's french from origin
* We have the encrypted text bearing the distinct 'brixelCTF{}' format near the end
* We know the messenger shouted 'confidentiel' over and over again

When we search for encryption methods that are french in origin, we find the 'vinegère cipher'.
This type of cipher is actually a series of interwoven ceasar ciphers using a [tabula recta](https://en.wikipedia.org/wiki/Tabula_recta).
It all boils down to this: you need a 'password' that can be used to decrypt te message. hmm... what was that word he shouted?
To decrypt this message I used https://www.dcode.fr/vigenere-cipher .
Enter the encrypted text, select the 'Knowing the Key/Password' option and use 'confidentiel' as the key. Press the decrypt button.
On the left you will find the result: **The flag is brixelCTF{baguette}**

**accepted flags = brixelCTF{baguette}**