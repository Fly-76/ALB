# Projet AFPA - S12 :Application de gestion de comptes bancaires avec PHP

## Objectif : 
Migration de l'application CompteBancaire vers le language PHP.

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