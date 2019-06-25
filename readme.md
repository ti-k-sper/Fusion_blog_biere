# Fusion site bière et le blog MVC  

## Cheminement de la fusion: 

### Etape 1 :  

- Récupération des fichiers et dossiers de blog_MVC


### Etape 2 :  

- Récupération du fichier "adminer.php" et le mettre dans www/public
- Modifier le fichier ".env", "start.sh", "created.sql" et "docker-compose.yml"


### Etape 3 :  

- Récupération requete sql création des tables du site bière et les rajouter au fichier "createsql.php"
- Lancer les containers avec "start.sh"
- Vérifier les nouvelles tables dans "adminer"


### Etape 4 :  

- Création URL pour atteindre acceuil de la boutique (et la mettre par default)
- Création des fichiers twig en lien à l'acceuil, avec un fichier defaultBeerShop.twig (pour avoir par défault un header et un footer), ainsi qu'un fichier home.twig (pour le content)
- Création class BeerController avec la méthode home()


### Etape 5 :  

- Création URL pour atteindre la page de tous les articles de la boutique
- Création du fichier twig articles.twig (pour le content)
- Création dans class BeerController, la méthode all()

