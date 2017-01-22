# delete_DB

> ## synopsis : `Datas::delete_DB( $password , $database )`  
> ### `$password` : *string* -> contient le mot de passe  
> ### `$database` : *string* -> contient le nom de la DB à supprimer  
> ### `return` : *boolean* -> retourne faux si l'opération à échoué, vrai sinon  

Comme son nom l'indique, cette fonction **supprime** le fichier `.json` correspondant au nom de la database. Il est impossible de récupérer la DB après cette opération.

---

# Exemple : 

## avant :

```
folder
 |- Datas.php
 |- index.php
 |- data
     |- score2017.json
     |- score2016.json
```

## script :

**index.php :**  

```php
<?php
require("Datas.php");

Datas::delete_DB("PASSWORD", "score2016");
?>
```

## après :

```
folder
 |- Datas.php
 |- index.php
 |- data
     |- score2017.json
```