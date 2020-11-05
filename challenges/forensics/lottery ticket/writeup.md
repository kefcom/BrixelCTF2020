# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Lottery ticket
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Someone is trying to sell this lottery ticket online, it has the winning numbers but I suspect foul play
Can you tell me which the new numbers are that are photoshopped?
Add them all up, the resulting number is the flag
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format



&nbsp;
##### The solution:
&nbsp;
In this challenge you get an image of a lottery ticket. It's up to you to find out which numbers are altered to the winning numbers.
To accomplish this you need to do an error level analysis. The website http://fotoforensics.com is a great way to check if and where an image as photoshopped.
When you do an ELA you will see some numbers light up: 88-25-48-42, if you add them all up you get the flag: 203

**accepted flags = 203 / brixelCTF{203}**