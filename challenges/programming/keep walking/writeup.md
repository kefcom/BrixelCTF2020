# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Keep walking
Challenge creator: kefcom
Writeup by: kefcom & Berend

##### The problem:
&nbsp;
>This is a challenge to test your basic programming skills.
Pseudo code:
Set X = 1
Set Y = 1
Set previous answer = 1
answer = X * Y + previous answer + 3
After that => X + 1 and Y + 1 ('answer' becomes 'previous answer') and repeat this till you have X = 525.
The final answer is the value of 'answer' when X = 525. Fill it in below.
Example:
5 = 1 * 1 + 1 + 3
12 = 2 * 2 + 5 + 3
24 = 3 * 3 + 12 + 3
........................
........................
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format

&nbsp;
##### The solution:
&nbsp;
Write the pseudo code into any language you want, here's an example in Javascript by Berend:

```javascript
let x = 1;
let y = 1;
let previousAnswer = 1;
let answer = x * y + previousAnswer + 3;
while(x != 526){
    x++;
    y++;
    previousAnswer = answer;
    answer =  x * y + previousAnswer + 3;
    console.log(`x: ${x}, y: ${y}, answer: ${answer}`)
}
```

If done correctly you should have 48373851 as a result
**accepted flags = 48373851 / brixelCTF{48373851}**