## Global Protetion Code Challenge

## To Setup Project

-   download project
-   run cp .env.example ,env
-   run migration
-   add an api key to the .env file

## Key Points to Note

-   Controllers: APIController,
-   Routing is taken care of in api.php

## API Spec

The preferred JSON object to be returned by the API should be structured as follows:

### Generate a Person

`GET /api/person/generate/{api-token}`

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

### Get a Single Person

`GET api/person/{id}/{api-token}`

```source-json
{
    "message": "Person data retrieved!",
    "data": {
        "id": 1,
        "age": 28,
        "blood": "A-",
        "born": "",
        "born_place": "San Diego",
        "cellphone": "+17035719",
        "city": "Ararat",
        "country": "France",
        "eye_color": "Brown",
        "father_name": "Maryl",
        "gender": "Male",
        "height": "1.35",
        "last_name": "Gould",
        "name": "Alyss",
        "national_code": "5043637668",
        "religion": "Christian",
        "system_id": "bdc4e199-2fc4-4674-b7df-b36b9338abcf",
        "weight": 150,
        "meta": {
            "age": 28,
            "born": null,
            "city": "Ararat",
            "name": "Alyss",
            "blood": "A-",
            "gender": "Male",
            "height": "1.35",
            "weight": 150,
            "country": "France",
            "religion": "Christian",
            "cellphone": "+17035719",
            "eye_color": "Brown",
            "last_name": "Gould",
            "system_id": "bdc4e199-2fc4-4674-b7df-b36b9338abcf",
            "born_place": "San Diego",
            "father_name": "Maryl",
            "national_code": "5043637668"
        },
        "created_at": "2021-05-25T02:26:15.000000Z",
        "updated_at": "2021-05-25T02:26:15.000000Z"
    }
}
```

### Get an avatar for a single user

`GET api/person/avatar/{id}/{api-token}`

```source-json
{
    "message": "Person Avatar Generated Successfully",
    "data": "/robohash.org/f4c7db1d-0d9d-4110-a019-1a57a4346127.png"
}
```

### Get Recently added users

`GET api/person/latest/{api-token}`

```source-json
{
    "data": [
        {
            "id": 21,
            "age": 24,
            "blood": "B-",
            "born": "",
            "born_place": "Miami",
            "cellphone": "+3741793880",
            "city": "Yerevan",
            "country": "Belarus",
            "eye_color": "Hazel",
            "father_name": "Elyssa",
            "gender": "Male",
            "height": "1.86",
            "last_name": "Rodgers",
            "name": "Jocelyn",
            "national_code": "8252410065",
            "religion": "Hindu",
            "system_id": "78a26741-e31a-4975-8c4a-407ee801a6e6",
            "weight": 73,
            "meta": {
                "age": 24,
                "born": null,
                "city": "Yerevan",
                "name": "Jocelyn",
                "blood": "B-",
                "gender": "Male",
                "height": "1.86",
                "weight": 73,
                "country": "Belarus",
                "religion": "Hindu",
                "cellphone": "+3741793880",
                "eye_color": "Hazel",
                "last_name": "Rodgers",
                "system_id": "78a26741-e31a-4975-8c4a-407ee801a6e6",
                "born_place": "Miami",
                "father_name": "Elyssa",
                "national_code": "8252410065"
            },
            "created_at": "2021-05-26T02:01:49.000000Z",
            "updated_at": "2021-05-26T02:01:49.000000Z",
            "avatar": null
        },
        ...
    ]
}
```

### Get Platform Statistics

`GET api/person/stats/{api-token}`

```source-json
{
    "message": "Available Platform Statistics",
    "data": {
        "total persons": 21,
        "Gender Statistics": {
            "Total Male": 10,
            "Total Female": 11
        },
        "Average Age": 39.523809523809526,
        "Countries (Non Unique)": [
            "France",
            "Germany",
            "USA",
            "China",
            "Armenia",
            "Germany",
            "Iran",
            "France",
            "Italy",
            "France",
            "Germany",
            "France",
            "Armenia",
            "China",
            "France",
            "Armenia",
            "Armenia",
            "Iran",
            "France",
            "Italy",
            "Belarus"
        ],
        "Countries (Unique)": [
            "France",
            "Germany",
            "USA",
            "China",
            "Armenia",
            "Iran",
            "Italy",
            "Belarus"
        ]
    }
}

```
