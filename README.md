# GroupPulse
## Lancer le projet

Pour lancer le projet, utilisez la commande suivante, qui construira et démarrera les services définis dans le fichier `docker-compose.yml` :

```bash
docker-compose up --build

## pour lancer le script utiliser 
docker exec -it groupupdb_php php /var/www/html/script.php /var/www/html/data.csv