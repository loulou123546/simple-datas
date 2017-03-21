# Bienvenue sur le Wiki de Simple Datas  

### Simple Datas est actuellement en version `1.0.0`  

---

# L'API  

### utilisation  

[Créer une DataBase](https://simple-work.github.io/simple-datas/doc/new_DB) : `Datas::new_DB($password, $database)`  

[Supprimer une DB](https://simple-work.github.io/simple-datas/doc/delete_DB) : `Datas::delete_DB($password, $database)`  

---

[Modifier toute la DB](https://simple-work.github.io/simple-datas/doc/set_ALL) : `Datas::set_ALL($password, $database, $value, $isJSON = false)`  

[Récupérer toute la DB](https://simple-work.github.io/simple-datas/doc/get_ALL) : `Datas::get_ALL($password, $database)`

---

[Modifier tout `DATA`](https://simple-work.github.io/simple-datas/doc/set_DATA) : `Datas::set_DATA($password, $database, $value, $isJSON = false)`  

[Récupérer tout `DATA`](https://simple-work.github.io/simple-datas/doc/get_DATA) : `Datas::get_DATA($password, $database)`  

---

[Modifier les INFO](https://simple-work.github.io/simple-datas/doc/set_INFO) : `Datas::set_INFO($password, $database, $version, $lastchange)`  

[Récupérer les INFO](https://simple-work.github.io/simple-datas/doc/get_INFO): `Datas::get_INFO($password, $database)`  

---

[Ajouter un ITEM](https://simple-work.github.io/simple-datas/doc/add_ITEM) : `Datas::add_ITEM($password, $database, $value, $isJSON = false)`  

[Récupérer un ITEM](https://simple-work.github.io/simple-datas/doc/get_ITEM) : `Datas::get_ITEM($password, $database, $ID)`  

[Modifier un ITEM](https://simple-work.github.io/simple-datas/doc/set_ITEM) : `Datas::set_ITEM($password, $database, $ID, $value, $isJSON = false)`  

[Supprimer un ITEM](https://simple-work.github.io/simple-datas/doc/delete_ITEM) : `Datas::delete_ITEM($password, $database, $ID)`  

---

[Trouver les IDs correspondant](https://simple-work.github.io/simple-datas/doc/find_ID) : `Datas::find_ID($password, $database, $search)`  

[Trouver les ITEMs correspondant](https://simple-work.github.io/simple-datas/doc/find_ITEM) : `Datas::find_ITEM($password, $database, $search)`  

---

[Créer / Changer la valeur d'une clé](https://simple-work.github.io/simple-datas/doc/setKey) : `Datas::setKey($password, $key, $value)`  

[Récupérer la valeur d'une clé](https://simple-work.github.io/simple-datas/doc/getKey) : `Datas::getKey($password, $key)`  

[Vérifie si la clé existe](https://simple-work.github.io/simple-datas/doc/isKey) : `Datas::isKey($password, $key)`  
