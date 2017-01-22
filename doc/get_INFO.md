# get_INFO  

> **synopsis : `Datas::get_INFO( $password , $database )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB à modifier  
> `return` : *array | boolean* -> retourne faux si l'opération à échoué, sinon un *asscociative array* contenant les infos  

Cette fonction retourne les INFO du fichier `.json` dans un array. 

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
{ "INFO" : {"VERSION" : "1.2.0", "LASTCHANGE" : "22/01/2017"}, "DATA" : [{"PAYS" : "FRANCE", "CONTINENT" : "EUROPE"}]}
```

## script :

**index.php :**  

```php
<?php
require("Datas.php");

$retour = Datas::get_INFO("PASSWORD", "maDB");

?>
```

## après :

**valeur de `$retour` :**  

```php
array(
    "VERSION" => "1.2.0",
    "LASTCHANGE" => "22/01/2017"
);
```