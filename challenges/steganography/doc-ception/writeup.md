# Brixel CTF winter edition 2020 Challenges writeup
### Challenge title: Doc-ception 
Challenge creator: kefcom
Writeup by: kefcom

##### The problem:
&nbsp;
>Need to hide something? why not a word document?
You need to dig deeper
This flag is not in the usual format, you can enter it with or without the brixelCTF{flag} format

&nbsp;
##### The solution:
&nbsp;
Did you know that docx files are containers? well now you do!
you can unzip them and reveal the contents, so we put a docx inside a docx ;)
extract loremipsum.docx from the first loremipsum.docx. Inside you will find flag.txt
It reads: ***flag = openxml***







**accepted flags = openxml / brixelCTF{openxml}**