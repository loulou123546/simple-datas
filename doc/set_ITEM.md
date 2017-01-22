# set_ITEM

> **synopsis : `Datas::set_ITEM( $password , $database , $ID , $value , $isJSON = false )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB  
> `$ID` : *int* -> contient l'ID de l'ITEM à modifier  
> `$value` : *array | string* -> contient le nouveau contenu de l'ITEM en question  
> `$isJSON` : *boolean* -> si vrai, `$value` est de type *string* et contient du JSON valide. sinon `$value` est un *array*  
> `return` : *boolean* -> retourne faux si l'opération à échoué, vrai sinon.  

Cette fonction modifie le contenu de DATA en modifiant l'item présent à ID. l'ID s'obtient à sa création avec `add_ITEM` ou avec `find_ID`.

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
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : [{"PAYS" : "FRANCE"}, {"PAYS" : "BELGIQUE"}, {"PAYS" : "USA"}]}
```

## script :

**index.php :**  

```php
<?php
require("Datas.php");

Datas::set_ITEM("PASSWORD", "maDB", 1, '{"PAYS" : "ALLEMAGNE"}', true);
// OU
Datas::set_ITEM("PASSWORD", "maDB", 1, array("PAYS" => "ALLEMAGNE"));

?>
```

## après :

**maDB :**  

```JSON
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : [{"PAYS" : "FRANCE"}, {"PAYS" : "ALLEMAGNE"}, {"PAYS" : "USA"}]}
```