# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: *flawed*
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Our l33t hackers hacked a bulletin board and gained access to the database. We need to find the admin password.
The user's database info is:
Username:admin
Passwordhash:d269ce15f9c44bc3992a5f4e5f273e06
The flag is the plaintext password
**This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format**

&nbsp;
##### The solution:
&nbsp;
From the hash look and description (or by running it against a hash analyzer like https://www.tunnelsup.com/hash-analyzer/ ) we might guess it's an MD5 hashed password.
Because no information is given we could start brute forcing right away and a quick dictionary attack would give us the solution.
However for this demo I'm going to run it against an online md5 lookup website. These websites have huge databases of plaintext words and their md5 hashed counterparts.
I used https://www.md5online.org/md5-decrypt.html for this demonstration.
Enter the hash on the website and it should return with ***Found : notsecure***

**accepted flags = notsecure / brixelCTF{notsecure}**