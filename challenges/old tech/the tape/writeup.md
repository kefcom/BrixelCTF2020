# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: The tape
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>I found this cassette tape from the '80s. I bet it has some cool games on it or something.
Better start looking for someone who grew up in that era... :)
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format

&nbsp;
##### The solution:
&nbsp;
You can tell by the sound that it's a machine signal that has been recorded, in the description they speak of games and the 80's so that narrows it down quite a bit.
The commodore64 was commonly used with cassette tapes to store/load programs on it, so that's what we are going to try.
You could either record the sound to a real cassette and play it on a real C64, but for this demonstration let's use emulators.
First we need to change the sound to a TAP file (a tape file for the emulator) We do this by using audioTAP (download [here](https://sourceforge.net/projects/wav-prg/files/audiotap/2.2.1/audiotap-2.2.1-win32.zip/download))
When we have the TAP file we can get the PRG file from it using wavPRG (download [here](http://sourceforge.net/projects/wav-prg/files/wav-prg/4.2.1/wavprg-4.2.1-win32.zip/download))
Now we need an emulator to run the PRG file, I use C64 forever (download [here](https://www.c64forever.com/))
Install it and then double click the prg file it should run the program on the emulator.
It reads: 
***CONGRATULATIONS!***
***THE FLAG IS***
***BASIC***

**accepted flags = BASIC / brixelCTF{BASIC}**