# set_ALL

> **synopsis : `Datas::set_ALL( $password , $database , $value , $isJSON = false )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB à modifier  
> `$value` : *array | string* -> contient le nouveau contenu de la DB  
> `$isJSON` : *boolean* -> si vrai, `$value` est de type *string* et contient du JSON valide. sinon `$value` est un *array*  
> `return` : *boolean* -> retourne faux si l'opération à échoué, vrai sinon  

Cette fonction modifie le contenu du fichier `.json` par `$value`. Si le contenu ne respecte pas la norme Datas, les autres fonction rique de ne plus fonctionner correctement.

---

# Exemple : 

## avant :

```
folder
 |- Datas.php
 |- index.php
 |- data
     |- maDB.json
```
**maDB :**  

```JSON
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : []}
```

## script :

**index.php :**  

```php
<?php
require("Datas.php");

Datas::set_ALL("PASSWORD", "maDB", '["FRANCE", "RUSSIE", "USA"]', true);
// OU
Datas::set_ALL("PASSWORD", "maDB", array("FRANCE", "RUSSIE", "USA"));

?>
```

## après :

```
folder
 |- Datas.php
 |- index.php
 |- data
     |- maDB.json
```

**maDB :**  

```JSON
["FRANCE", "RUSSIE", "USA"]
```

## Dans cette exemple, la norme Datas n'est pas respecté, donc les autres fonctions risque de ne pas fonctionner.