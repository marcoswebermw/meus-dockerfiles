FROM php:7.1.8-apache

# É Recomendado criar um diretório config e adicionar um php.ini
# com suas próprias configurações.
# COPY config/php.ini /usr/local/etc/php/

# Configurando o usuário www-data como dono do diretório /var/www/html
RUN chown www-data:www-data /var/www/html


#ADD src/index.php /var/www/html/

# Instalando a extensão mysqli.
#RUN docker-php-ext-install mysqli
