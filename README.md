# Calculator API

You need to have Docker and Docker Compose installed on your server to proceed using this PHP environment.

## Running the environment

- Build the app image with the following command:

```bash
docker-compose build
```

- When the build is finished, you can run the environment in background mode with:

```bash
docker-compose up -d
```

- To shut down your Docker Compose environment and remove all of its containers, networks, and volumes, run:

```bash
docker-compose down
```

- To run tests

```bash
docker-compose run app bin/phpunit
```

- Documentation for the calculator api:
```bash
http://localhost:8000/api/doc
```