# laravel_sanctum
 
https://www.twilio.com/blog/build-restful-api-php-laravel-sanctum


- http://demo-laravel-login.gzeinnumer.com/api/register
Request
```
{
    "name" : "gzeinnumer",
    "email" : "gzeinnumer@gmail.com",
    "password" : "12345678"
}
```
Response
```
{
    "access_token": "7|HrfTY2yMca5KpcPiBVoFhyI60fluQa6bnW5Jq9WY",
    "token_type": "Bearer"
}
```

- http://demo-laravel-login.gzeinnumer.com/api/login

Request
```
{
    "email" : "gzeinnumer@gmail.com",
    "password" : "12345678"
}
```

Response
```
{
    "access_token": "8|qSMFPYLLbHVy7gwB8nwVXwyxyAy8qcfEYPqPlVKA",
    "token_type": "Bearer"
}
```

- http://demo-laravel-login.gzeinnumer.com/api/me

![](/preview/preview_1.png)

---

```
Copyright 2022 M. Fadli Zein
```