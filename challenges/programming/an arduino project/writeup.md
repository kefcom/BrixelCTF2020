# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: An arduino project
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>I once made this arduino program but forgot what it does.
Unfortunately I lost the schematic that comes with it.
Maybe you can get it running?
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format


&nbsp;
##### The solution:
&nbsp;
For this challenge you need to get some arduino code running, and find out what hardware it connects to. The hints are in the comments where you see pins 2 to 9 assigned for A,B,C,D,E,F,G and DP, which are references used to identify a 7-segment display.
To solve this you could either figure out the code by hand by taking the msg array, splitting it by the '0' character that is used as a delimiter, and then map the individual blocks to this image of a 7-segment display:https://www.circuitbasics.com/wp-content/uploads/2017/05/Arduino-7-Segment-Display-Tutorial-Segment-Layout-Diagram-237x300.png .
Or you could wire an arduino to a 7-segment display and run the code. For this challenge I used the tinkercad circuits designer, which can simulate an arduino and a 7-segment display. You can play around with the design via this link: https://www.tinkercad.com/things/gfE2IjN4bV3-stunning-elzing-blad/editel?sharecode=NA9pHtsUk09oQcf-v6ZWssZ4Lz-2VCBSfLnQZKOLh7g .
The schematic is as follows:
ARDUINO PIN : 7-SEGMENT PIN
2 : A
3 : B
4 : C
5 : D
6 : E
7 : F
8 : G
9 : DP
COMMON : 5V (with a 1K resistor)

When you run the program, the 7-segment display will show you a message: ". . . . HELLO . FLAG . IS . 406798190332"
**accepted flags = 406798190332 / brixelCTF{406798190332}**
