# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Manhunt #7
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Can you tell me where he lives? Then I can drop some kind words in his mailbox!
Format: brixelCTF{STREET_NUMBER_POSTALCODE_CITY} e.g brixelCTF{examplestreet_15_8500_kortrijk}
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format
This is part of a series, more challenges will be unlocked once you solve this one. While most challenges will be OSINT, some of them may not be.


&nbsp;
##### The solution:
&nbsp;
You should have found his website by now. There is no real contact information but there is a form you can fill out. Because Johnny is a bad developer the form doesn't work and you get a physical address to 'mail the form to':
Johnny Dorfmeister
Melkvoetstraat 48
3500 Hasselt
Using it in the correct format it will become: brixelCTF{melkvoetstraat_48_3500_hasselt} 
This challenge unlocks manhunt #8

**accepted flags = poetry / brixelCTF{melkvoetstraat_48_3500_hasselt}**
