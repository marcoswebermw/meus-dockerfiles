# Ambientes Haskell

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


## Usando o Haskell

Subindo o processo com o docker-compose diretamente:  

`docker-compose run haskell`

