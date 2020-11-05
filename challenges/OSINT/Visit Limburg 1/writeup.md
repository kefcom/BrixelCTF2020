# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Visit Limburg #1
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Welcome to Limburg! This beatiful province of Belgium offers so much to see and do!
Let's say you want to take a nice bike ride from one side to the other, but don't want to drive too much on roads where there is a lot of cars on the road.
For this purpose we have a bike network! It tries to guide you as much as possible over smaller roads and bike paths where cars are not allowed to drive.
Let's start here: Google maps link and end here: Google maps link.
The flag is the sum of all the nodes you pass on your trip (including the start and end nodes!)
Happy cycling!
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format
Knowing a little dutch or having a good translator might come in handy with this challenge!

&nbsp;
##### The solution:
&nbsp;
This one is pretty easy actually, you google "bike network belgium" and go to the first website (fietsroute.org)
Use their planner to get a route from node 557 (the start location) to node 341 (the end location) and add up all the nodes.
You should get 7405 as a total.

**accepted flags = 7405 / brixelCTF{7405}**
