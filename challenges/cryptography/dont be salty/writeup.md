# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: *Don't be salty*
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Our l33t hackers hacked a bulletin board and gained access to the database. We need to find the admin password.
The user's database info is:
Username:admin
Passwordhash:2bafea54caf6f8d718be0f234793a9be
Salt:04532@#!!
We know from the source code that the salt is put AFTER the password, then hashed. We also know the user likes to use lowercase passwords of only 5 characters long.
The flag is the plaintext password.
**This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format**

&nbsp;
##### The solution:
&nbsp;
From the details we can gather that this is a salted MD5 password, hashed as <password>+<salt> and that it is lowercase, 5 characters long.
Unlike the 'flawed' challenge we need to brute force this one. For this demonstration I'm using passwordspro, a free brute force password cracker.
You can download it from https://passwordspro.en.softonic.com/ 
&nbsp;
Once unzipped and started, press on the 'add new user with known hash to the list' button.
Fill in the information given in the challenge description and select hash type MD5($pass.$salt).
Select the 'brute force attack' attack type from the attack type dropdown in the toolbar.
Now go to the settings and under the brute force tab, make sure to select only the lowercase characters, and set the minimal and maximal length to 5. 
Press start on the toolbar and within a (few?) second(s) it should have found 'brute' as the password.
**accepted flags = brute / brixelCTF{brute}**
