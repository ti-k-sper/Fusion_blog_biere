# Fusion site bière et le blog MVC  

## Cheminement de la fusion: 

### Etape 1 :  

- Récupération des fichiers et dossiers de blog_MVC


### Etape 2 :  

- Récupération du fichier "adminer.php" et le mettre dans www/public
- Modifier le fichier ".env", "start.sh", "created.sql" et "docker-compose.yml"


### Etape 3 :  

- Récupération requète sql création des tables du site bière et les rajouter au fichier "createsql.php"
- Lancer les containers avec "start.sh"
- Vérifier les nouvelles tables dans "adminer"


### Etape 4 :  

- Création URL pour atteindre accueil de la boutique (et la mettre par défaut)
- Création des fichiers twig en lien à l'accueil, avec un fichier defaultBeerShop.twig (pour avoir par défaut un header et un footer), ainsi qu'un fichier home.twig (pour le content)
- Création class BeerController avec la méthode home()


### Etape 5 :  

- Création URL pour atteindre la page de tous les articles de la boutique
- Création du fichier twig articles.twig (pour le content)
- Création dans class BeerController, la méthode all()


### Etape 6 :  

- Création URL pour atteindre la page de connexion et d'inscription de la boutique
- Création du fichier twig signin.twig, signup.twig (pour le content)
- Création dans class UsersController, la méthode signin() et signup()
- Dans signup(), utilisation méthode verifMail() et userCreate() provenant UserTable
- Installation swiftmailer
- Création MailController et methode sendMail() pour utiliser swiftmailer
- Dans signup(), utilisation de sendmail()
- Dans signin(), utilisation de confirmMail() et updateVerifyMail
- Dans signin(), dans le render ajoue variable $message et ajoue dans le signin.twig, message sous condition pour le faire appaitre ou pas
- dans signin(), utilisation methode userConnect()
- Création URL pour deconnection, méthode disconnect()


### Etape 7 :  

- Création URL pour atteindre la page bon de commande de la boutique
- Création du fichier twig purchaseOrder.twig
- Création dans class OrdersController, la méthode purchaseOder()
- Dans purchaseOrder.twig, action="/confirm_order
- Création URL pour confirm_order, méthode confirmOrder()
- Création du fichier twig confirmOrder.twig
- 