# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: browsercheck
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>I found this weird website, but it will only allow 'ask jeeves crawler' to enter?
Can you get me in?
http://timesink.be/browsercheck/ 

&nbsp;
##### The solution:
&nbsp;
On this website challenge we need to trick the server into thinking we are the ask jeeves crawler.
Every browser uses a 'user-agent' to identify itself to the server, you can change this in most modern browsers. I'm going to be using firefox.
A quick google search reveals that the ask jeeves crawler (it's an old search engine by the way) uses this user-agent: ***Mozilla/2.0 (compatible; Ask Jeeves/Teoma)***
So we go to the website and press F12 to open the inspector. In the far right corner of the inspector there is an icon that looks like 2 phones, this enabled the responsive design mode.
When pressed there is a drop down menu at the top of your screen, click it and select edit list.
Here you can select different kinds of devices, each one has their own user-agent variant to identify itself to the server.
To create a custom one, we select add custom device. Give it a name, and in the user-agent field enter Mozilla/2.0 (compatible; Ask Jeeves/Teoma)
Save the profile and refresh the page, it should now accept you as being an official ask jeeves crawler and greet you with the message: ***the flag is 'brixelCTF{askwho?}'***


**accepted flags = brixelCTF{askwho?}**