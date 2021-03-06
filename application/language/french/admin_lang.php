<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* @author hobrt.me
* @file Ajax.php
* @package hobrtEcom
* @link hobrt.me
* @copyright hobrt.me 2018 => 2019
*
**/


$lang["admin_h1"] 		= "Produits";
$lang["admin_h2"] 		= "Liste des produits";
$lang["admin_h3"] 		= "Ajouter un nouveau produit";
$lang["admin_h4"] 		= "Commandes";
$lang["admin_h5"] 		= "Toutes les commandes";
$lang["admin_h6"] 		= "En attente";
$lang["admin_h7"] 		= "En attente de l'expédition";
$lang["admin_h8"] 		= "Expédié";
$lang["admin_h9"] 		= "Livré à l'adresse";
$lang["admin_h10"] 		= "Annulé";
$lang["admin_h11"] 		= "Categories";
$lang["admin_h12"] 		= "Liste des catégories";
$lang["admin_h13"] 		= "Ajouter une nouvelle catégorie";
$lang["admin_h14"] 		= "Ventes";
$lang["admin_h15"] 		= "Paramètres";
$lang["admin_h16"] 		= "Pages";
$lang["admin_h17"] 		= "Support";
$lang["admin_h18"] 		= "Admins";
$lang["admin_h19"] 		= "Paramètres généraux";
$lang["admin_h20"] 		= "Toutes les pages";
$lang["admin_h21"] 		= "Ajouter une nouvelle page";
$lang["admin_h22"] 		= "Tous les administrateurs";
$lang["admin_h23"] 		= "Ajouter un nouvel admin";
$lang["admin_h24"] 		= "Nom";
$lang["admin_h25"] 		= "Prix d'origine";
$lang["admin_h26"] 		= "prix réduit";
$lang["admin_h27"] 		= "Nombre de ventes";
$lang["admin_h28"] 		= "Commentaire";
$lang["admin_h29"] 		= "Examens en cours";
$lang["admin_h30"] 		= "Options";
$lang["admin_h31"] 		= "Titre du produit";
$lang["admin_h32"] 		= "Mettez le titre de votre produit ici.";
$lang["admin_h33"] 		= "Prix d'origine";
$lang["admin_h34"] 		= "Remise";
$lang["admin_h35"] 		= "Prix d'expédition";
$lang["admin_h36"] 		= "Description";
$lang["admin_h37"] 		= "Categories";
$lang["admin_h38"] 		= "Galerie";
$lang["admin_h39"] 		= "Nom du client";
$lang["admin_h40"] 		= "Téléphone";
$lang["admin_h41"] 		= "Ville";
$lang["admin_h42"] 		= "Date";
$lang["admin_h43"] 		= "Prix total";
$lang["admin_h44"] 		= "Status";
$lang["admin_h45"] 		= "Qty";
$lang["admin_h46"] 		= "Modifier";
$lang["admin_h47"] 		= "Supprimer";
$lang["admin_h48"] 		= "Sauvegarder la commande";
$lang["admin_h49"] 		= "Nom de la catégorie";
$lang["admin_h50"] 		= "Mettez le titre de votre catégorie ici ";
$lang["admin_h51"] 		= "Une nouvelle catégorie a été ajoutée avec succès .";
$lang["admin_h52"] 		= "Option";
$lang["admin_h53"] 		= "Séparer les options par une virgule ,";
$lang["admin_h54"] 		= "le produit a été ajouté avec succès .";
$lang["admin_h55"] 		= "Ajouter un nouvel administrateur";
$lang["admin_h56"] 		= "Nom";
$lang["admin_h57"] 		= "Téléphone";
$lang["admin_h58"] 		= "Addresse";
$lang["admin_h59"] 		= "Ville";
$lang["admin_h60"] 		= "Coupon";
$lang["admin_h61"] 		= "Prix total";
$lang["admin_h62"] 		= "Status";
$lang["admin_h63"] 		= "Titre de la page";
$lang["admin_h64"] 		= "Afficher en pied de page";
$lang["admin_h65"] 		= "Oui";
$lang["admin_h66"] 		= "Non";
$lang["admin_h67"] 		= "E-mail de bienvenue";
$lang["admin_h68"] 		= "Courriel de commande payée";
$lang["admin_h69"] 		= "Courriel de la commande de remboursement";
$lang["admin_h70"] 		= "Courriel de commande exécutée";
$lang["admin_h71"] 		= "E-mail de demande de paiement";
$lang["admin_h72"] 		= "Courrier électronique des chariots abandonnés";
$lang["admin_h73"] 		= "Administrateur";
$lang["admin_h74"] 		= "l'administrer a été ajouté avec succès";
$lang["admin_h75"] 		= "Nom d'utilisateur";
$lang["admin_h76"] 		= "Nom d'utilisateur";
$lang["admin_h77"] 		= "Mot de passe";
$lang["admin_h78"] 		= "Mot de passe";
$lang["admin_h79"] 		= "ajouter";
$lang["admin_h80"] 		= "ajouter une page";
$lang["admin_h81"] 		= "ajouter une nouvelle page";
$lang["admin_h82"] 		= "la page a été ajoutée avec succès";
$lang["admin_h83"] 		= "Titre";
$lang["admin_h84"] 		= "titre de la page";
$lang["admin_h85"] 		= "Contenu de la page";
$lang["admin_h86"] 		= "Contenu de la page";
$lang["admin_h87"] 		= "Lien en bas de page";
$lang["admin_h88"] 		= "Non";
$lang["admin_h89"] 		= "Oui";
$lang["admin_h90"] 		= "Lien en bas de page";
$lang["admin_h91"] 		= "Liste des administrateurs";
$lang["admin_h92"] 		= "Mise à jour";
$lang["admin_h93"] 		= "Tableau de bord";
$lang["admin_h94"] 		= "Ce mois-ci";
$lang["admin_h95"] 		= "Total des commandes";
$lang["admin_h96"] 		= "Taux de commande";
$lang["admin_h97"] 		= "Recherchez";
$lang["admin_h98"] 		= "Statistiques";
$lang["admin_h99"] 		= "Visiteurs";
$lang["admin_h100"] 	= "Pages visitées";
$lang["admin_h101"] 	= "Taux de conversion";
$lang["admin_h102"] 	= "Total des clients";
$lang["admin_h103"] 	= "Les clients qui reviennent";
$lang["admin_h104"] 	= "Valeur minimale de la commande";
$lang["admin_h105"] 	= "Valeur moyenne de panier";
$lang["admin_h106"] 	= "Valeur maximale de la commande";
$lang["admin_h107"] 	= "Source du trafic";
$lang["admin_h108"] 	= "Payé";
$lang["admin_h109"] 	= "Réalisé";
$lang["admin_h110"] 	= "Rembourser";
$lang["admin_h111"] 	= "top produits";
$lang["admin_h112"] 	= "Quantité totale de la commande";
$lang["admin_h113"] 		= "Top des pays";
$lang["admin_h114"] 		= "Pays";
$lang["admin_h115"] 		= "Total des revenus";
$lang["admin_h116"] 		= "Boutons";
$lang["admin_h117"] 		= "Info sur la commande";
$lang["admin_h118"] 		= "Les produits commander";
$lang["admin_h119"] 		= "Mise à jour de la commande";
$lang["admin_h120"] 		= "Soumettre";
$lang["admin_h121"] 		= "Ajouter un nouveau produit à la commande";
$lang["admin_h122"] 		= "Fermer";
$lang["admin_h123"] 		= "Enregistrer les changements";
$lang["admin_h124"] 		= "Remises";
$lang["admin_h125"] 		= "Ajouter un nouveau coupon";
$lang["admin_h126"] 		= "le coupon a été ajouté avec succès";
$lang["admin_h127"] 		= "Code coupon";
$lang["admin_h128"] 		= "Date d'expiration";
$lang["admin_h129"] 		= "Modification de la remise";
$lang["admin_h130"] 		= "Email";
$lang["admin_h131"] 		= "Modèle de courriel";
$lang["admin_h132"] 		= "Envoyer après";
$lang["admin_h133"] 		= "Importation des Avis";
$lang["admin_h134"] 		= "Importer ";
$lang["admin_h135"] 		= "Les Avis ont été importés";
$lang["admin_h136"] 		= "Fichier Csv";
$lang["admin_h137"] 		= "Revenus (ce mois-ci)";
$lang["admin_h138"] 		= "Revenus (cette année)";
$lang["admin_h139"] 		= "Total";
$lang["admin_h140"] 		= "Demandes en attente";
$lang["admin_h141"] 		= "Aperçu des revenus";
$lang["admin_h142"] 		= "Sources de revenus";
$lang["admin_h143"] 		= "Liste des commandes";
$lang["admin_h144"] 		= "Variantes";
$lang["admin_h145"] 		= "Modifier le produit";
$lang["admin_h146"] 		= "Question";
$lang["admin_h147"] 		= "Réponse";
$lang["admin_h148"] 	= "Paramètres généraux";
$lang["admin_h149"] 	= "Le nom de votre magasin";
$lang["admin_h150"] 	= "En-tête";
$lang["admin_h151"] 	= "Nom d'utilisateur du messager";
$lang["admin_h152"] 	= "Texte de mise en relation";
$lang["admin_h153"] 	= "Texte de l'en-tête du slider";
$lang["admin_h154"] 	= "Note de la page de commande";
$lang["admin_h155"] 	= "Texte des cookies";
$lang["admin_h156"] 	= "Contenu de la page des cookies";
$lang["admin_h157"] 	= "À propos du contenu de la page";
$lang["admin_h158"] 	= "Description de votre boutique";
$lang["admin_h159"] 	= "Lien complet vers Facebook";
$lang["admin_h160"] 	= "Lien complet Instagram";
$lang["admin_h161"] 	= "Lien complet vers Twitter";
$lang["admin_h162"] 	= "Pixels Facebook, un par ligne";
$lang["admin_h163"] 	= "Code Google Analytics";
$lang["admin_h164"] 	= "Votre logo";
$lang["admin_h165"] 	= "Méthodes d'expédition";
$lang["admin_h166"] 	= "Ajouter une nouvelle méthode";
$lang["admin_h167"] 	= "le mode d'expédition a été ajouté avec succès";
$lang["admin_h168"] 	= "Prix";
$lang["admin_h169"] 	= "Infos";
$lang["admin_h170"] 	= "Actualiser";
$lang["admin_h171"] 	= "le mode d'expédition a été mis à jour avec succès";
$lang["admin_h172"] 	= "Ajouter un nouveau";
$lang["admin_h173"] 	= "Message";
$lang["admin_h174"] 	= "Diapositive sur les critiques de la page d'accueil";
$lang["admin_h175"] 	= "Ajout d'un nouveau slider";
$lang["admin_h176"] 	= "le slider a été ajouté avec succès";
$lang["admin_h177"] 	= "Nom";
$lang["admin_h178"] 	= "Texte";
$lang["admin_h179"] 	= "Image";
$lang["admin_h180"] 	= "Slider de la page d'accueil";
$lang["admin_h181"] 	= "xxxxxxxxxxxx";
$lang["admin_h182"] 	= "xxxxxxxxxxxx";
$lang["admin_h183"] 	= "xxxxxxxxxxxx";
$lang["admin_h184"] 	= "xxxxxxxxxxxx";
$lang["admin_h185"] 	= "xxxxxxxxxxxx";
$lang["admin_h186"] 	= "xxxxxxxxxxxx";
$lang["admin_h187"] 	= "xxxxxxxxxxxx";
$lang["admin_h188"] 	= "xxxxxxxxxxxx";
$lang["admin_h189"] 	= "xxxxxxxxxxxx";
$lang["admin_h190"] 	= "xxxxxxxxxxxx";
$lang["admin_h192"] 	= "En savoir plus lien complet";
