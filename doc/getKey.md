# getKey

> **synopsis : `Datas::getKey( $password , $key )`**  
> `$password` : *string* -> contient le mot de passe  
> `$key` : *string* -> contient le nom de la clé à modifier   
> `return` : *any* -> retourne faux si l'opération à échoué, sinon la valeur de la clé `$key`  

Cette fonction retourne la valeur de la clé `$key` (dans le fichier `__keys__.json`). 

---

# Exemple : 

## avant :

```
folder
 |- Datas.php
 |- index.php
 |- data
     |- __keys__.json
```
**\_\_keys\_\_.json :**  

```JSON
{ "hello" : "world", "foo" : "bar" }
```

## script :

**index.php :**  

```php
<?php
require("Datas.php"); // version 1.1.0 ou +

$retour = Datas::getKey("PASSWORD", "hello");

?>
```

## après :

**valeur de `$retour` :**  

```php
"world"
```