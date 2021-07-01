In order to test the security awareness level of users who exist inside, you can create a stimulating page to induce them not to click, or simply test whether users check the URL address by abusing the page that actually provides the service.

<img width="424" alt="20210701_142808" src="https://user-images.githubusercontent.com/78599757/124070345-a5f29000-da78-11eb-8bdc-9c26618a0759.png">

This method is not a simple test, but modifies the source (html) of the page that provides the actual service so that the input value can be passed to the attacker's server.

It's easy to run that test.
1. Acquire the source of the target page (ex: login.html)
2. Search for "action=" location passing ID/PWD
3.Change to action="post.php"
4.(Change Method) When using the post.php file, you must enter the name=id / name=pwd parameter of the user written in login.html
5.Upload the 3 files below using a free hosting server
- login.html
- post.php
- result.txt
6. If a user inadvertently enters an id and password, it will be delivered to the attacker's server.
