# laravel_sanctum
 
https://www.twilio.com/blog/build-restful-api-php-laravel-sanctum


- http://localhost:8000/api/register
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

- http://localhost:8000/api/login

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

- http://localhost:8000/api/me

![]('/preview/preview_1.png')