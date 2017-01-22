# new_DB

> ## synopsis : `Datas::new_DB( $password , $database )`  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB à créer  
> `return` : *boolean* -> retourne faux si l'opération à échoué, vrai sinon  

Comme son nom l'indique, cette fonction créer un nouveau fichier `.json` avec le modèle de base pour permettre à Datas de correctement fonctionner.

---

# Exemple : 

## avant :

```
folder
 |- Datas.php
 |- index.php
 |- data
     |- uneDataBase.json
```

## script :

**index.php :**  

```php
<?php
require("Datas.php");

Datas::new_DB("PASSWORD", "une_autre_DB");
?>
```

## après :

```
folder
 |- Datas.php
 |- index.php
 |- data
     |- uneDataBase.json
     |- une_autre_DB.json
```

**une_autre_DB :**  

```JSON
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : []}
```