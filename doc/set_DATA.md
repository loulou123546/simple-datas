# set_DATA

> **synopsis : `Datas::set_DATA( $password , $database , $value , $isJSON = false )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB à modifier  
> `$value` : *array | string* -> contient le nouveau contenu de l'objet DATA  
> `$isJSON` : *boolean* -> si vrai, `$value` est de type *string* et contient du JSON valide. sinon `$value` est un *array*  
> `return` : *boolean* -> retourne faux si l'opération à échoué, vrai sinon  

Cette fonction modifie le contenu de DATA dans le fichier `.json` par `$value`. Si le contenu ne respecte pas la norme Datas, les autres fonction rique de ne plus fonctionner correctement.

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

Datas::set_DATA("PASSWORD", "maDB", '[{"PAYS" : "USA", "CONTINENT" : "AMERIQUE"}]', true);
// OU
Datas::set_DATA("PASSWORD", "maDB", array(array("PAYS" => "USA", "CONTINENT" => "AMERIQUE")));

?>
```

## après :

**maDB :**  

```JSON
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : [{"PAYS" : "USA", "CONTINENT" : "AMERIQUE"}]}
```