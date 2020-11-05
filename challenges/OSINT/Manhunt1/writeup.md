# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Manhunt #1
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>My dad is pissed off! He was told by my mother NOT to buy ice cream but he did anyway when she wasn't looking.
Someone posted this picture on the internet and my mother saw it, man he is in trouble!
I want to know WHO posted this picture, let's hunt this f*cker down!
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format, replace spaces with underscores ('_')
This is part of a series, more challenges will be unlocked once you solve this one. While most challenges will be OSINT, some of them may not be.


&nbsp;
##### The solution:
&nbsp;
To start us off we get an image of a guy buying some ice cream, it shouldn't be reversable and at first glance there is no indication of who took the picture. However if we look deeper in the exif data with a site like exif.tools we can see that the 'owner' field is populated. Here we find the name Johnny Dorfmeister. Replace spaces with underscores and we get the flag.
This challenge unlocks the manhunt #2 and manhunt #3 challenges.

**accepted flags = Johnny_Dorfmeister / brixelCTF{Johnny_Dorfmeister}**
