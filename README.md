## Fingilisher

## Up and Running
You can use docker to run the project:
```bash
docker compose up -d
```

## Example
Request:
```bash
curl -XPOST --location 'http://localhost:8080/api/v1/slugify' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--data '{
    "message": "سلام چطوری؟"
}'
```
Response:
```json
{
    "slugified_message": "slam-chtory"
}
```
