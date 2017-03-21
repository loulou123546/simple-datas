# getKey

> **synopsis : `Datas::getKey( $password , $key )`**  
> `$password` : *string* -> contient le mot de passe  
> `$key` : *string* -> contient le nom de la clé à vérifier   
> `return` : *boolean* -> retourne faux si l'opération à échoué, sinon true ou false si la clé existe ou non  

Cette fonction retourne `true` si la clé `$key` (dans le fichier `__keys__.json`) existe ET est non NULL. 

## ATTENTION : la fonction retourne `false` si la clé n'existe pas, ou si il y a eu une erreur dans la fonction

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

$hello = Datas::isKey("PASSWORD", "hello");

$cool = Datas::isKey("PASSWORD", "cool")

?>
```

## après :

**valeur de `$hello` et `$cool` :**  

```php
$world = true
$cool = false
```