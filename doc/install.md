# Installation et la configuration  
  
---
  
### Installation  

Pour l'instant, il n'y a pas à proprement parler d'installation. Mais voici la base :  

- Télécharger le fichier `/DOWNLOAD/source/Datas.php` et copier le sur votre server  
- Dans le dossier où ce situe `Datas.php`, créer un dossier pour vos database (généralement `data`)  

Ensuite, il vous suffira d'ajouter `require("chemin/vers/Datas.php");` en haut de chaque fichier ayant besoin d'accéder à vos base de données.  

### configuration  

- Ouvrer `Datas.php` avec votre éditeur préférez, et trouvé en ligne 3 la variable `$config`  
  - modifier `PASSWORD` par un mot de passe secret  
  - si le dossier contenant vos database n'est pas `data`, alors remplacez `data/` par son nom suivi de `/`  
- Vous pouvez fermer le fichier et commencé à créer vos bases de données  
