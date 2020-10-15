# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: SnackShack awards
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>A friend of mine owns a snackbar and is entered in a competition to win an award.
It seems he is not going to win because he has a low amount of votes :(
Do you think you can boost his votes? adding 5000 votes should do the trick!
His snackbar is called Cafetaria 't pleintje
timesink.be/snackshackaward/ 


&nbsp;
##### The solution:
&nbsp;
If you look at the website you see that you can select up to 5 points per snackbar to vote, we could vote 1000 times (but that wouldn't work in this case since I never programmed that in ;)) OR we could just change the ammounts of votes we can send.
How do we do this? In firefox first press F12 to open the inspector, then select the icon on the far left to toggle inspect elements mode.
Click on the dropdown list for the desired snackbar and uncollapse the element. It should look like this:
><select name="score_tpleintje">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>				
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			
Right click on the option value=5 option and choose edit as HTML, now change the numbers 5 to 5000 and click out of the edit box.
If you look at the dropdown menu now it shows 1,2,3,4 and 5000, choose 5000 and submit your votes.
***Well done! The flag is brixelCTF{bakpau}***

**accepted flags = brixelCTF{bakpau}**