# Corrections Appli_bug

## Problèmes et failles de sécurité trouvés

1. **Création de plusieurs comptes avec le même nom d'utilisateur** :
   - Problème : Il était possible de créer plusieurs comptes avec le même nom d'utilisateur, ce qui créait des conflits dans la base de données.
   - Correction : J'ai ajouté une vérification pour empêcher la création de comptes avec des noms d'utilisateur déjà existants. Un message d'erreur est affiché si le nom d'utilisateur est déjà pris.

2. **Affichage des mots de passe dans la liste des utilisateurs** :
   - Problème : Avec un compte non administrateur, il était possible de voir les mots de passe des utilisateurs dans la liste des utilisateurs.
   - Correction : J'ai modifié la liste des utilisateurs pour qu'elle soit accessible à tous, mais sans afficher les mots de passe des utilisateurs.

3. **Encryptage des mots de passe** :
   - Problème : Les mots de passe des utilisateurs étaient stockés en clair dans la base de données.
   - Correction : J'ai encrypté les mots de passe des utilisateurs avant de les stocker dans la base de données en utilisant la fonction `password_hash` de PHP. Lors de la connexion, les mots de passe sont vérifiés en utilisant la fonction `password_verify`.

## Détails des corrections

### Vérification de l'unicité du nom d'utilisateur

Dans le fichier `register.php`, j'ai ajouté une vérification pour s'assurer que le nom d'utilisateur n'existe pas déjà avant de créer un nouveau compte. Si le nom d'utilisateur existe déjà, un message d'erreur est affiché.

### Masquage des mots de passe dans la liste des utilisateurs

J'ai modifié le code qui affiche la liste des utilisateurs pour ne plus inclure les mots de passe. Ainsi, même les utilisateurs non administrateurs peuvent voir la liste des utilisateurs sans compromettre la sécurité des mots de passe.

### Encryptage des mots de passe

J'ai utilisé la fonction `password_hash` pour encrypter les mots de passe avant de les stocker dans la base de données. Lors de la connexion, j'utilise la fonction `password_verify` pour vérifier les mots de passe.

Ces corrections améliorent la sécurité de l'application en empêchant la duplication des noms d'utilisateur, en protégeant les mots de passe des utilisateurs et en s'assurant que les mots de passe sont stockés de manière sécurisée.

## Corrections des bugs par :

- [Sergent Lucas]
- [Hallot Hugo]