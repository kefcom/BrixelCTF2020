# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: no PEEKing!
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Hidden inside this exe file is a flag
Up to you to find it


&nbsp;
##### The solution:
&nbsp;
There is this program called dotPEEK by jetbrains, it's basicly a .net decompiler.
You can use it to convert .exe files (written in .net of course) back to a semi-readable source code.
You can download it here: https://www.jetbrains.com/decompiler/
Install the program, open it and select file open. Point it to the nopeeking.exe file.
Uncollapse the project in the left column and uncollapse the code part called noPEEKing, double click on Form1.
It will now decompile and you should find the flag.






**accepted flags = brixelCTF{d0tP33K}**
