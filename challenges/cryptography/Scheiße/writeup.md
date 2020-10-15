# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: *Scheiße*
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>A german messenger was caught during WW2
He was carrying a piece of paper that read: qbhbh zrmua gfbld ocqbv
He was nice enough to give us all we wanted, except the decoded message, he needs a special machine for that, and we don't have it.
He DID give us the settings for the machine.
The settings for this machine are:
Model: G-312
Reflector: UKW 11/26
Rotor 1: 2/12/6
Rotor 2: 1/17/16
Rotor 3: 3/12/1
The flag is ONE word, no spaces.
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format

&nbsp;
##### The solution:
&nbsp;
There are quite a few hints given in the description here:
* It's encryption (since it's in the crypto category)
* It's german from origin
* It was used during the second world war
* We received 'settings for the machine' from the captured messenger, so we know it's a machine

A machine that was used to encrypt/decrypt messages during the second world war? that must be an enigma machine!
There are some websites online that can simulate one of those badboys, and for this demonstration I used https://cryptii.com/pipes/enigma-machine
If we enter the information given (encryped text, model, reflector and rotors) we get this result: **derfl agist sauer kraut** 
When correctly formatted it reads: *Der flag ist sauerkraut* meaning the flag is sauerkraut.

**accepted flags = sauerkraut / brixelCTF{sauerkraut}**