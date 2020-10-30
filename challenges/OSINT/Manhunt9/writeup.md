# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Manhunt #9
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Auth. You're on your own for this :)
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format
This is part of a series, more challenges will be unlocked once you solve this one. While most challenges will be OSINT, some of them may not be.


&nbsp;
##### The solution:
&nbsp;
This is the final in the manhunt challenge and it's a chain of challenges in 1. First of all you should have noticed the small 'auth' at the bottom of his website, if you click it it will reject you with a message: "Eat shit and die...". In the source of this page you will see that he wrote the authentication himself, and uploaded it to github.
Looking at the auth.php file on github we see that he removed the password for security reasons, however there is a history of this file, the first version shows 'letmein' as the password. You can't go directly to flag.php.
You need to build a HTML form that POSTs the data to this auth.php file, here is an example:

```HTML
<html>
<form method="POST" action="http://authentication.howitshould.be/auth.php" target="_SELF">
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="submit" name="submit" value="submit">
</form>
</html>
```
Save the file as *.html somewhere and open it in your browser, fill in the username as johnny and the password as letmein and press submit.
You will get the flag: g1ttern00b


**accepted flags = g1ttern00b / brixelCTF{g1ttern00b}**
