# Finglish Parrot 🦜

## Introduction
Just a fun project to integrate with kenar-divar APIs.  
**Finglish Parrot** just translates your Persian messages into the [Finglish mode](https://fa.wikipedia.org/wiki/%D9%84%D8%A7%D8%AA%DB%8C%D9%86%E2%80%8C%D9%86%D9%88%DB%8C%D8%B3%DB%8C_%D9%81%D8%A7%D8%B1%D8%B3%DB%8C).  
Don't expect much from it ¯\_(ツ)_/¯.

## Up and Running
You can use docker to run the project:
```bash
docker compose up -d
```

## Example
##### Request:
```bash
curl -XPOST --location 'http://localhost:8080/api/v1/slugify' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--data '{
    "message": "سلام چطوری؟"
}'
```
##### Response:
```json
{
    "slugified_message": "slam-chtory"
}
```
