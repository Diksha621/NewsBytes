## Requirements

- utm_params urls are generally bigger so we need to shorten them
- on clicking shorten urls must redirect to the same link
- short url must have some expiration time
- everytime hash should generate a different url

## what I did

- user must enter a valid url and to generate shorten url I need to store it somewhere so, I used mysql database once url get stored then system will generate a short link for the same with some expiration time right now it is 5 minutes but we can modify it according to need

- I mapped short url to the actual url but this process is on the fly when used click on short url it will be redireced to original url

- If url got expired then it will be redirected to error page which displays url expired