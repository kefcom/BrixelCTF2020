# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Flat eath
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>These idiots... I heard there is a rally of flat earth believers tomorrow
We should access their admin panel and stop that rally from happening!
http://timesink.be/flatearth/ 

&nbsp;
##### The solution:
&nbsp;
If we go to the website we see some information about the next rally, but nothing special. If we check the source we might notice that there is also a link to admin.php that has the same color as the background.
On the admin page we see a login screen where we can try if it's vulnerable for SQL injection by entering a single quote (') as the username. The website will return an SQL error.
We can assume that the admin account was the first account created, so if we use username **' OR 1=1;--** it will change the query from something like **SELECT * FROM users WHERE username = <username> AND password = <password>** to **SELECT * FROM users WHERE username = '' OR 1=1;--** meaning it will search for an empty username OR check if 1=1 (which is always true), and then comment out the rest of the query so it will no longer check for passwords.

If you enter that username you will get ***That should do the trick, the flag is brixelCTF{aroundtheglobe}***


**accepted flags = brixelCTF{aroundtheglobe}**