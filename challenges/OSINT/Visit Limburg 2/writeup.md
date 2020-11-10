# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Visit Limburg #2
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>I'm supposed to meet up with my buddy who supplies me with Twilight cd's but he's very cryptic about the meeting location.
He told me he will meet under a bridge that sits in the middle of a triangle of 3 locations.
The first two locations are the two mineshafts of the coalmines in the province that are the furthest appart from each other.
The third location is where the provided (hazy) picture was taken
Please provide the date that was written under the bridge (format #.##.## where # is a digit) in 2013
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format

&nbsp;
##### The solution:
&nbsp;
Ok, so first we need to draw a triangle on a map to figure out our working area. The first two points are coal mine shafts of the coal mines in the province (Limburg (BE)) that are the furthest away from each other. If you search the coal mines of Limburg belgium you get a list. The mine of Beringen and Eisden are furthest away from each other.
The third point is an image of a see-trough church of chapel, if you google 'see-trough church' you will quickly find the art piece called 'Reading Between The Lines' in the village of Borgloon.
Now draw a triangle over those three places and look at the middle, it should be the Albert Canal and the exact middle is between a bridge and a lock. The bridge is a special kind of bridge if you look at it from an arial view, it's a cable bridge connected to a big 4-lane road on one side, but ends in a single street on the other side.
You can take a look under the bridge with streetview, but for some reason you can't change the capture date while under the bridge so you need to go down the street a little bit to change the capture date and then navigate back under the bridge to see the graffity that was there in 2013. There is one date written on the wall: 7.05.09

**accepted flags = 7.05.09 / brixelCTF{7.05.09}**
