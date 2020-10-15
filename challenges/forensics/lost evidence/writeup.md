# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Lost evidence
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>A buddy of mine is in serious trouble. He works for the feds and accidentally deleted a pendrive containing crucial evidence
Can you get it back and tell us what the evidence is?
The flag is brixelCTF{name_of_product_bought}

&nbsp;
##### The solution:
&nbsp;
In this scenario we get a disk image from a deleted pendrive, in order to retreive the 'evidence' that was once on there we need to be able to access it.
To achieve this I used a tool called OSFMount, a free tool from passmark you can download here: https://www.osforensics.com/tools/mount-disk-images.html.
After installation you select mount new, and point it to the .img file that is provided in the description. No further settings need to be made.
Once that is done there will be a new visible in your explorer, called 'evidence', but it is empty (we know, since our buddy deleted the files).
&nbsp;
So now we have to retrieve the hidden files, for this I used a free tool called recuva by pirisoft (now owned by ccleaner). You can download it here:https://www.ccleaner.com/recuva/download.
On startup this tool will show a wizard asking what kinds of files we want to recover, since we don't know: all files
Location? In a specific location, being the new disk we mounted. **if 'not sure' option is selected it will scan ALL disks and it takes a LONG time!**
Best to enable deep scan (if not it will not find any files and suggest it being enabled anyway).
After a quick scan it will reveil 2 files, They are identical and I can't really explain why there's two of them. So recover one of those files.
&nbsp;
If we listen to the recording, it appears to be a phone tap of one mr. dorfmeister that is calling his bank to transfer some money.
At the end he adds a 'personal message' to the transfer, we can 'decode' those tones as they are DTMF signals. First we need to extract only the message from the recording.
To do this I used audacity, a free audio editing tool you can download here: https://www.audacityteam.org/
After it's isolated we can let an online tool like http://dialabc.com/sound/detect/index.html analyze the dtmf signals to give us the keys pressed.
This results in: 8449903336667770844330222666222244466330227778844
&nbsp;
Now we need to translate that number into letters, if we look at a telephone keypad [like this one](https://parentsof10.files.wordpress.com/2013/03/phone-keypad-picture-application.png) we can see that there are letters associated with certain numbers.
For example the number 2 has ABC assigned to it, meaning one press = A, two presses = B and 3 presses = C. Zero is commonly used for spaces.
If we translate the number to these keypad letters, we get: ***Thx_for_the_cocaine_bruh***
&nbsp;
Now we know what mr. Dorfmeister bought: **cocaine**!


**accepted flags = brixelCTF{cocaine}**