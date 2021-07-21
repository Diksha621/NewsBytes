## Assumptions

- First I assume that there is no parallel processing 

- I used RDBMS which means storage required would be limited (original url -> 3kb, short url -> 20 bytes, created_at -> 10 bytes, updated_at -> 10 bytes) as of now

- I could have used md5 hash and use first 6 or 7 characters as unique id in short url but for larger urls sometime we get same first 6 characters that may cause duplication so every time I need to apply a check if this id already present or not 

- For now I used random function to generate random id one can also use base_64 

- For tracker I displayed only client's IP Address
