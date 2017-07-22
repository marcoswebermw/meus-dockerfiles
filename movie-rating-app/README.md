### Repositório do projeto

O arquivo Dockerfile deste diretório irá gerar o ambiente de desenvolvimento da aplicação movie-rating-app que pode ser encontrada em https://github.com/marcoswebermw/movie-rating-app.  
   
  
### Comando para gerar a imagem

```sh
docker build -t mw/movie-rating-app .
```

### Comando para iniciar um container

```sh
docker run --rm -it --name app -v /home/$USER/dev/movie-rating-app:/usr/src/movie-rating-app -e USER=$USER  mw/movie-rating-app bas
```
