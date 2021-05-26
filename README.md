## Global Protetion Code Challenge

## To Setup Project

-   download project
-   run cp .env.example ,env
-   run migration
-   add an api key to the .env file

## Key Points to Note

-   Controllers: APIController, PostController
-   Routing is taken care of in api.php

## API Spec

The preferred JSON object to be returned by the API should be structured as follows:

### Generate a Person

`POST /api/person/generate/{api-token}`

```source-json
{
    "message": "Person Data Generated Successfully",
    "data": {
        "age": 38,
        "blood": "B-",
        "born": null,
        "born_place": "Yerevan",
        "cellphone": "+3749350863",
        "city": "Ararat",
        "country": "Germany",
        "eye_color": "Gray",
        "father_name": "Vanda",
        "gender": "Female",
        "height": "1.47",
        "last_name": "Moody",
        "name": "Billy",
        "national_code": "5813375791",
        "religion": "Muslim",
        "system_id": "20d76327-5940-473f-8a91-0698a63b3737",
        "weight": 79
    }
}
```
