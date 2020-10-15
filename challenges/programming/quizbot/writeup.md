# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Quizbot
Challenge creator: kefcom
Writeup by: kefcom & Berend

##### The problem:
&nbsp;
>Legend has it there's a flag at the end when you have a perfect score
http://timesink.be/quizbot

&nbsp;
##### The solution:
&nbsp;
If you check out the website, you will see that after a wrong answer the site will provide the correct one. It's up to you to grab all the correct answers, and then replay them all in the right order to get the perfect score.

Berend provides us with the following powershell script to do so:

```powershell
function convertFrom-MisinterpretedUtf8([string] $String) {
    [System.Text.Encoding]::UTF8.GetString(
       [System.Text.Encoding]::GetEncoding(28591).GetBytes($String)
    )
  }
$url = "http://timesink.be/quizbot/index.php"
$page0 = Invoke-WebRequest -Uri $url -SessionVariable sess
$i = 0 
$answers = [System.Collections.ArrayList]@()
while ($i -lt 1000) {
    $body = @{insert_answer = 'meh'; submit='answer'}
    $page = Invoke-WebRequest -Uri $url -Method Post -WebSession $sess -Body $body
    $answer = $page.ParsedHtml.getElementById('answer').innerHTML
    $answer = convertFrom-MisinterpretedUtf8($answer)
    $answers.Add($answer)
    Write-Host("Got  answer $($i) of 999: $($answer)")
    $i++
}
$page0 = Invoke-WebRequest -Uri $url -SessionVariable sess1
$i = 0
while ($i -lt 1000){
    $body = @{insert_answer = $answers[$i]; submit='answer'}
    $page = Invoke-WebRequest -Uri $url -Method Post -WebSession $sess1 -Body $body
    if($page.Content.Contains("Wrong Answer!")){
        Write-Error "Bad answer!"
    }
    Write-Host("Sending answer $($i) of 999")
    $i++
}
Write-Host $page
}
```

If done correctly you should have get the flag after the final correct answer
**accepted flags = brixelCTF{kn0wl3dg3}**