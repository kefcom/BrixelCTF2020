# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Manhunt #5
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>What is he talking about with that deleted page on his twitter account? can you retrieve it somehow?
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format
This is part of a series, more challenges will be unlocked once you solve this one. While most challenges will be OSINT, some of them may not be.






&nbsp;
##### The solution:
&nbsp;
Because we solved manhunt #1 we have the name Johnny Dorfmeister, Via linkedin we can see his twitter profile. On twitter you find a message where he states he can't delete a page from his website, and later comments that he figured it out and removed it. Unlucky for him the waybackmachine crawled the site and made us a backup to see :) if you enter the url http://www.howitshould.be/test-page in the wayback magine (http://web.archive.org/) we see that on 15/01/2019 it made 1 snapshot of the page, if we look at it we see: Howdy! the flag is: w@yb@ck!

**accepted flags = w@yb@ck! / brixelCTF{w@yb@ck!}**
