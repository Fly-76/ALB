# Projet AFPA - S12 : Application de gestion de comptes bancaires avec PHP

## Objectif : 
Migration de l'application Compte Bancaire vers le language PHP.

## Compétences mises en oeuvre : 
- Manipulation des types de données
- Stocker des données dans des variables ou des tableaux
- Utiliser les structures conditionnelles
- Utilisez des boucles pour parcourir des données
- Créer et utiliser des fonctions
- Utiliser des fonctions natives
- Traiter les données d’un formulaire en PHP
- Transmettre des données via l’url
- Gérer une session utilisateur simple
- Rediriger un utilisateur en PHP
- Créer un template simple en PHP
- Afficher des données

## Description : 
- Eclater le template en fichiers : header.php, nav.php, footer.php
- Les données pour afficher les comptes en banque sur la page d’accueil sont maintenant stockées dans un tableau (cf ficher externe joint), et 
- une boucle affiche tous les comptes. Ceux-ci ne sont plus écrits en dur dans le HTML
- Quand on clique sur un compte en banque, on arrive sur une page spécifique dédiée au compte et qui n’affiche que les informations de ce compte. Cette fonctionnalité utilise la transmission de données par l’URL.
- Quand l’utilisateur remplit le formulaire de création de compte et qu’il soumet le formulaire, le compte est créé à côté du formulaire avec les informations rentrées par l’utilisateur.

# Projet AFPA - S14 : Application de gestion de comptes, mise en place d'un SGBD

## Objectif :
Intégration du SGBD MySQL, administration, exploitation des données

## Compétences mises en oeuvre :
- Utilisation de XAMPP
- Utilisation de PHPMyAdmin
- Utilisation de l’extension PDO pour se connecter à une base de données
- Effectuer les opérations du CRUD depuis une application PHP
- Sécuriser ses requêtes à l’aide des requêtes préparées
- Exploiter les données de la BDD pour l’affichage utilisateur
- Restreindre l’accès de son application aux seuls utilisateurs connectés
- Utiliser des jointures et des sous-requêtes
- Gérer les erreurs

## Description :
- L’application n’est accessible qu’aux seuls utilisateurs connectés
- Quand un utilisateur non connecté va sur l’application il est redirigé vers une page de connexion avec un formulaire
- Un utilisateur se connecte à l’aide d’une adresse mail et d’un mot de passe
- Un utilisateur connecté peut se déconnecter
- Une fois connecté, l’utilisateur voit uniquement ses comptes en banque personnels. 
Pour l’instant il ne voit pas la dernière opération effectuée sur le compte, juste les comptes avec leurs informations.
- Quand l’utilisateur clique sur un compte en banque, 
il arrive sur une page dédié au compte où 
il voit les informations du compte mais aussi les dernières opérations effectuées sur le compte
- Via une page dédiée un utilisateur peut créer un nouveau compte personnel à l’aide d’un
formulaire. Une fois créé le compte apparaît sur la page d’accueil. Attention le compte doit
respecter les conditions minimum de création de compte (bon type et bon montant)
- L’utilisateur peut effectuer des dépôts ou des retraits sur le compte de son choix. Le montant du
compte est alors mis à jour et une nouvelle opération est enregistrée sur le compte.