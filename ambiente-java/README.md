# Ambientes Java

## Subindo todos os serviços:

Para iniciar os serviços use:

`docker-compose up -d`

Talvez seja necessário fazer o rebuild do projeto com:

`docker-compose build` ou `docker-compose up --build`.

> -d de detached. Para rodar em segundo plano      
> Se o docker-compose não estiver instalado use `sudo apt install docker-compose`.

### Para verificar os serviços rodando

* `docker-compose ps` ou `docker ps`.

### Para parar os serviços use

`docker-compose stop` ou `docker-compose down`


## Usando o OpenJdk8

Subindo o processo com o docker-compose:  

`docker-compose run openjdk8`

## Usando o OpenJdk9

Subindo o processo com o docker-compose:  

`docker-compose run openjdk9`  
  
Vai entrar no JShell o prompt novo do Java9.

Depois se for necessário rode comandos direto no container com:

`docker exec -it nome_do_container /bin/bash`

Ou rode diretamente dentro do container com o docker-compose:

`docker-compose run openjdk9 /bin/bash`
