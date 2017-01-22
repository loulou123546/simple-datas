# get_ITEM

> **synopsis : `Datas::get_ITEM( $password , $database , $ID )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB  
> `$ID` : *int* -> contient l'ID de l'ITEM à modifier  
> `return` : *boolean | array* -> retourne faux si l'opération à échoué, sinon retourne le contenu de l'ITEM.  

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

$monITEM =  Datas::get_ITEM("PASSWORD", "maDB", 1);

?>
```

## après :

**valeur de `$monITEM` :**  

```php
array(
    "PAYS" => "BELGIQUE"
);
```