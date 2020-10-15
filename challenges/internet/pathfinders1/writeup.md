# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Pathfinders #1 
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>These f*cking religious sects!
These guys brainwashed my niece into their demeted world of i-readings and other such nonsense.
The feds recently closed their churches, but it seems they are preparing for a new online platform to continue their malicious activities.
can you gain access to their admin panel to shut them down?
Their website is: http://timesink.be/pathfinder/

&nbsp;
##### The solution:
&nbsp;
If we look at the website we see that they link to their admin section, however it's password protected using a .htaccess and .htpasswd file (you know because of the login prompt).
We can also see that the homepage is an index page that loads in another page (index.php?page=home.php) so the code reads and executes code from another file, in this case home.php.
We can leverage this to access the .htpasswd file that sits in the admin/ folder by altering the url to page=admin/.htpasswd in a normal scenario you would have to brute force it, but I'm giving the flag away here :)
***#normally you would brute force this, but that is not in scope of this challenge. The flag is: brixelCTF{unsafe_include}***

**accepted flags = brixelCTF{unsafe_include}**