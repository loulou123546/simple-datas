# delete_ITEM

> **synopsis : `Datas::delete_ITEM( $password , $database , $ID )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB  
> `$ID` : *int* -> contient l'ID de l'ITEM à supprimer  
> `return` : *boolean* -> retourne faux si l'opération à échoué, vrai sinon.  

Cette fonction modifie le contenu de DATA en y supprimant l'item présent à l'ID. l'ID s'obtient à sa création avec `add_ITEM` ou avec `find_ID`.

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

Datas::delete_ITEM("PASSWORD", "maDB", 1);

?>
```

## après :

**maDB :**  

```JSON
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : [{"PAYS" : "FRANCE"}, {"PAYS" : "USA"}]}
```