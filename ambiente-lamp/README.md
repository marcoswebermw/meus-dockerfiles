## LAMP

* Para verificar o local do volume onde estão guardados os arquivos do mapeamento do mysql use:

`docker inspect` para localizar onde foi mapeado o diretório `/var/lib/mysql`.


### Para iniciar o ambiente

`docker-compose up -d`

> -d de daemon. Para rodar em segundo plano
> Se o docker-compose não estiver instalado use `sudo apt install docker-compose`.
> Para verificar os serviços rodando use: `docker ps`.
> Para parar os serviços use: `docker-compose stop`.


### Executar comandos dentro do container do mysql

`docker exec -it nome_do_container mysql -u usuario_mysql bd_mysql -pminha_senha`


