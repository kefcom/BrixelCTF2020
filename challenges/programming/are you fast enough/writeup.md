# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Are you fast enough?
Challenge creator: kefcom
Writeup by: kefcom & Berend

##### The problem:
&nbsp;
>Can you program something that is fast enough to submit the solution before the time runs out?
http://timesink.be/speedy 

&nbsp;
##### The solution:
&nbsp;
You need to program something that loads the page, grabs the random string and posts it as fast as possible.
For this example we use a powershell script written by Berend:

```powershell
function convertFrom-MisinterpretedUtf8([string] $String) {
    [System.Text.Encoding]::UTF8.GetString(
       [System.Text.Encoding]::GetEncoding(28591).GetBytes($String)
    )
  }
$url = "http://timesink.be/speedy/index.php"
$page = Invoke-WebRequest -Uri $url -Method GET -WebSession $sess
$answer = $page.ParsedHtml.getElementById('rndstring').innerHTML
Write-Host $answer
$body = @{inputfield = $answer; submit='inputfield'}
$page = Invoke-WebRequest -Uri $url -Method Post -WebSession $sess -Body $body
Write-Host $page
```

If done fast enough you will get the flag
**accepted flags = brixelCTF{sp33d_d3m0n}**