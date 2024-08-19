# Email Generator

Email generator is a simple HTML email layout generator.
By choosing from layouts, key colors, and typography, and it returns you in HTML code to simply copy and paste.


[![nginx](https://img.shields.io/badge/nginx-1.27-brightgreen.svg)]()
[![php8.2](https://img.shields.io/badge/php-8.2-brightgreen.svg)]()

These instructions will running on your local machine a dockerized **nginx** + **PHP7.2** environment.

### Prerequisites
- [Install Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git).
- [Install Docker Compose](https://docs.docker.com/compose/install/).

---

### Install Email Generator

Clone the repository to your workspace folder.

---

### Run docker

Build and run docker environment using 

```
docker-compose up
``` 

### Connect to container environment
The `docker exec` command runs a new command in a running container.

```
docker exec -ti email_generator bash
```

### Connect to Web server

You can access to your test application via `http://mgda.test:8080`



 

