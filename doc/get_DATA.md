# get_DATA  

> **synopsis : `Datas::get_DATA( $password , $database )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB à modifier  
> `return` : *array | boolean* -> retourne faux si l'opération à échoué, sinon un *array* contenant l'objet DATA  

Cette fonction retourne l'objet DATA du fichier `.json` dans un array. 

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
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : [{"PAYS" : "FRANCE", "CONTINENT" : "EUROPE"}, {"PAYS" : "USA", "CONTINENT" : "AMERIQUE"}]}
```

## script :

**index.php :**  

```php
<?php
require("Datas.php");

$retour = Datas::get_DATA("PASSWORD", "maDB");

?>
```

## après :

**valeur de `$retour` :**  

```php
array(
    0 => array(
        "PAYS" => "FRANCE",
        "CONTINENT" => "EUROPE"
    ),
    1 => array(
        "PAYS" => "USA",
        "CONTINENT" => "AMERIQUE"
    )
);
```