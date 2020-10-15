# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Pathfinders #2
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>It seems they updated their security. can you get the password for their admin section on their new site?
http://timesink.be/pathfinder2/
oh yeah, let's assume they are running a php version below 5.3.4 here...

&nbsp;
##### The solution:
&nbsp;
This challenge is only visible after you solve pathfinders #1. If you look at the site now, it reads: 
***Due to a recent hacker intrusion, we upgraded our security to only allow for php files to be included.***
This means we can't use the trick of just including the .htpasswd file anymore, or can we?
This exploit is fixed since php 5.3.4 but you can actually trick the code into not reading parts of your query from the URL.
It's by adding a '%00' in the URL. We could request a page called index.php?page=admin/.htpasswd%00.php so the script checks and sees .php at the end, but the include will drop that part and show the .htpasswd file.

***Great work! the flag is brixelCTF{outdated_php}***

**accepted flags = brixelCTF{outdated_php}**