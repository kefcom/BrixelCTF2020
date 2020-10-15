# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Limewire audio
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>I downloaded this sweet tune from limewire, but there's something weird going on
can you find the hidden message?
The flag is the name of the character in english, no spaces!
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format


&nbsp;
##### The solution:
&nbsp;
Ah, remember the goold old days of downloading your prefectly legal copyright free music from limewire only to find out there's a big corrupted part in the middle?
Yeah, me neither. However in the last years of the platform it was common to find music that had a corrupted part, just like this sweet tune here.
What if we took a deeper look in that part?
I used audacity for this, you can download it for free here: https://www.audacityteam.org/
Open the file into audacity, you will see the waveform in stereo, if you press the menu button on the left of the waveform, you can change the view to a spectrogram.
Now you should be able to see a hello kitty figure in the middle.


**accepted flags = hellokitty / brixelCTF{hellokitty}**
