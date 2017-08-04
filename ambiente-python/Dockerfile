FROM python:3.5

# Definindo diretório de trabalho padrão.
WORKDIR /usr/src/app

# Instalando dependências e fazendo algumas configurações.
RUN apt update && apt install -y \
    vim \
    git \
    && pip install --upgrade pip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Copiando os arquivos do diretório atual do host para o diretório /install do container.
ADD ./ /install

# Instalando dependências.
RUN pip install --no-cache-dir -r /install/requirements.txt

# Executando o bash.
CMD [ "bash" ]
