# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Visit Limburg #3
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>While hiking on the BE-MINE hill on 18 december 2020 I noticed a big cargo plane with 4 props flying over, it looked like it had militairy markings.
I tried to find out what plane it was but failed. Can you help me out? I bet it came from one of the military airbases nearby.
I need the registration number, model, and month & year of registration.
Syntax: brixelCTF{registrationnumber+model+month(MM)+year(YY)}


&nbsp;
##### The solution:
&nbsp;
This is a tricky one, first you need to find the location described. When googling for 'BE-MINE Limburg' you will find it located in the city of Beringen. It has an old mine tailing (hill) left over from the coal mining that happened there. From here you need to locate military airbases nearby, so you click 'search nearby' in google, and search for military airbase. Among the results you will find 'kleine brogel airbase', kind of infamous in Belgium as it alledgedly houses nuclear missiles.
Now you need to find a list of airplanes that left there on the 18th of december, not easy as websites like flightradar24 do not keep track of military aircraft. However, all military aircraft should send out an ADS-B signal, which can be picked up by aviation enthousiasts all over the world. One website that keeps track of these sightings is ADS-B.nl. Go there and click on 'movements', 'Bases', 'Europe', 'Belgium' and select 'Kleine brogel'. From here you can filter by date. On the 18th there were 7 flights. Only 2 of them were made by a cargo plane (C130), and when you look at the flightpath, only 1 flew over the BE-MINE tailing: registration number CH-09, callsign BAF677, ICAO 44F429.
So now we know which plane it was, but need to figure out the registration date. When googling for the plane's registration number "CH-09" and the ICAO "44F429" we get a result at planefinder.net, this website has all kinds of data on airplanes, including first fligt, registration date, and much more. On this website we learn that this plane was registered on 02-73. Now we can construct the flag: registrationnumber(CH-09)+model(C-130)+month(02)+year(73).

**accepted flags = brixelctf{CH-09+C130+02+73}**
