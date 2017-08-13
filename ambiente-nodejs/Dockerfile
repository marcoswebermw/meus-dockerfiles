FROM node:latest

# Definindo diretório de trabalho padrão.
WORKDIR /usr/src/app

# Instalando dependências e fazendo algumas configurações.
RUN apt update && apt install -y \
    vim \
    git \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Expor a porta 8888.
EXPOSE 8888

# Executar como usuário node. Esse usuário já vem com a imagem do node.
USER node

# Executando o bash.
CMD [ "bash" ]
