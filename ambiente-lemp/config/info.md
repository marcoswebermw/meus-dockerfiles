## Informações adicionais


### Backup do banco de dados:

```sql
mysqldump -u usuario -p bd_mariadb > backup_bd.sql
```


### Restore do banco de dados:

```sql
mysql -u usuario -p bd_mariadb < backup_bd.sql
```
