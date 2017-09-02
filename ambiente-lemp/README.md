## LEMP

### Para iniciar o ambiente

`docker-compose up -d`

Talvez seja necessário fazer o rebuild do projeto com:

`docker-compose build` ou `docker-compose up --build`.

> -d de detached. Para rodar em segundo plano      
> Se o docker-compose não estiver instalado use `sudo apt install docker-compose`.

### Para verificar os serviços rodando

* `docker-compose ps` ou `docker ps`.

### Para parar os serviços use

`docker-compose stop` ou `docker-compose down`

### Executar comandos dentro do container do mariadb

`docker exec -it nome_do_container mysql -u usuario_mariadb bd_mariadb -pminha_senha`

