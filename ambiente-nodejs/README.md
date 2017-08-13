### Repositório do projeto

O arquivo Dockerfile deste diretório irá gerar o ambiente de desenvolvimento da aplicação app genérica preparada para ambiente node.js em sua última versão.  
   
  
### Exemplo de comando para gerar a imagem

```sh
docker build -t mw/app .
```

### Exemplo de comando para iniciar um container

```sh
docker run --rm -it \
--name app \
-v /home/$USER/dev/app:/usr/src/app \  
-e "NODE_ENV=development" \
-m "300M" --memory-swap "1G" \
mw/app bash
```

### Executando script adicional

Caso necessite, use o git para clonar o repositório desejado.
