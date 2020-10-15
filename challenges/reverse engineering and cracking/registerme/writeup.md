# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Registerme
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>This program needs to be activated
Can you figure out how to do it?



&nbsp;
##### The solution:
&nbsp;
There is a tool that helps you monitor what a process is doing, it's called procmon and it's free to download here: https://docs.microsoft.com/en-us/sysinternals/downloads/procmon
Run the registerme program, and then run procmon.
Drag the 'target' icon next to the big A on the toolbar to the registerme.exe window.
Here you can see what calls the program is making to the OS, one of those calls is 'QueryDirectory' for a file called activation.key which returned NO SUCH FILE.
so? create an empty file called activation.key in the same folder as the registerme app, that should register it :)







**accepted flags = brixelCTF{f1l34cc3ss}**
