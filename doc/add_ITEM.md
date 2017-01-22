# add_ITEM

> **synopsis : `Datas::add_ITEM( $password , $database , $value , $isJSON = false )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB  
> `$value` : *array | string* -> contient le contenu de l'ITEM à ajouter  
> `$isJSON` : *boolean* -> si vrai, `$value` est de type *string* et contient du JSON valide. sinon `$value` est un *array*  
> `return` : *boolean | int* -> retourne faux si l'opération à échoué, sinon renvoi l'ID de l'ITEM ajouté.  

Cette fonction modifie le contenu de DATA en y ajoutant un item contenant `$value`. Les normes Datas ne s'applique pas ici.

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
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : [{"PAYS" : "FRANCE", "CONTINENT" : "EUROPE"}]}
```

## script :

**index.php :**  

```php
<?php
require("Datas.php");

Datas::add_ITEM("PASSWORD", "maDB", '{"PAYS" : "USA", "CONTINENT" : "AMERIQUE"}', true);
// OU
Datas::add_ITEM("PASSWORD", "maDB", array("PAYS" => "USA", "CONTINENT" => "AMERIQUE"));

?>
```

## après :

**maDB :**  

```JSON
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : [{"PAYS" : "FRANCE", "CONTINENT" : "EUROPE"}, {"PAYS" : "USA", "CONTINENT" : "AMERIQUE"}]}
```