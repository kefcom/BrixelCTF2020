# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Dadjokes
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Darn! Some idiot scriptkiddy broke my favorite website full of dad jokes!
I can't seem to contact the owner to fix the site
Can you bring it back and remove the defaced page?
http://timesink.be/dadjokes/ 

&nbsp;
##### The solution:
&nbsp;
when we visit the website we can see that it has been hacked. Upon invesigation of the source we find that the hackers left the original index page.
the goal is to find out what exploit was used to deface the website, and use it to restore the original index.
When we visit the index_backup.html page, we find the site in all it's glory and workings where you can read and write dadjokes.
You can play about and submit some jokes, and then you will see that it navigates to submit.php?filename=<YOUR TITLE>.txt&title=<YOUR TITLE>&content=<YOUR CONTENT>
where your title and your content is what you provided when submitting of course.
&nbsp;
When we submit a joke it's not made public just yet, the owner wants to verify it first. But when we go to read some jokes we see that it navigates to jokes/read.php?file=<FILENAME>.txt so it's in the jokes folder, reading a file, so we know the jokes are stored in that folder.
We want to write to index.html in a folder that is one lever higher then the jokes folder, so if we take the source of the original index page, and set the title to **../index.html** where the ../ indicates we want to go up one level, we can try to submit this.
**HOWEVER**, just before submitting the joke the website asks for a verification if we are sure to submit. In the url we can see that the filename is set to filename=../index.html**.txt** as it takes the title and adds a '.txt' to it. We need to remove it from the url before we consent the submit.
If we submit correctly it will show us the flag: **Congratulations, the flag is brixelCTF{lamejoke}**


**accepted flags = brixelCTF{lamejoke}**