# Energies Renouvelables Pro (thème WordPress)

Thème orienté **interface graphique professionnelle** pour un site solaire avec WooCommerce déjà en place.

## Où sont les fichiers ?
Dans ce dépôt, le thème est ici :
- `wordpress-theme-energies/`

Fichiers clés :
- `style.css` (identité du thème + styles)
- `functions.php` (fonctions WordPress)
- `front-page.php` (page d’accueil)
- `woocommerce.php` (rendu WooCommerce)
- `header.php` / `footer.php` (structure globale)


## Important : où se trouve ce dossier exactement ?
- Le dossier `wordpress-theme-energies/` existe **dans l'espace de travail de cette session** (un environnement de développement distant), pas automatiquement sur ton ordinateur personnel.
- Chemin actuel côté session : `/workspace/python_apps/wordpress-theme-energies`.
- Donc : tant que tu ne le télécharges pas/exportes pas, il n'est pas encore dans ton disque local.

### Comment récupérer le dossier sur ton disque local
1. Depuis ton dépôt Git (recommandé) : fais un `git pull` sur ta machine locale.
2. Ou crée un zip du thème puis télécharge-le :
   ```bash
   cd /workspace/python_apps
   zip -r wordpress-theme-energies.zip wordpress-theme-energies
   ```
3. Ensuite importe ce zip dans WordPress via **Apparence > Thèmes > Ajouter > Téléverser un thème**.

## Comment l’importer dans WordPress (3 méthodes)

### Méthode A — depuis l’admin WordPress (la plus simple)
1. Compresse le dossier `wordpress-theme-energies` en `wordpress-theme-energies.zip`.
2. Dans WordPress : **Apparence > Thèmes > Ajouter > Téléverser un thème**.
3. Sélectionne `wordpress-theme-energies.zip`.
4. Clique **Installer**, puis **Activer**.

### Méthode B — via FTP/SFTP
1. Ouvre ton hébergement via FileZilla (ou équivalent).
2. Va dans `wp-content/themes/`.
3. Envoie le dossier `wordpress-theme-energies/`.
4. Dans WordPress : **Apparence > Thèmes**, puis active le thème.

### Méthode C — via cPanel / File Manager
1. Crée `wordpress-theme-energies.zip`.
2. Dans cPanel, ouvre **File Manager**.
3. Va dans `public_html/wp-content/themes/` (ou ton dossier racine WordPress).
4. Upload le zip puis **Extract**.
5. Active le thème dans **Apparence > Thèmes**.

## Réglages recommandés après activation
1. **Menus** : Apparence > Menus (principal + footer).
2. **Logo** : Apparence > Personnaliser > Identité du site.
3. **Shortcode devis** : Apparence > Personnaliser > Options Energies Renouvelables Pro.
   - Valeur par défaut : `[configurateur_devis]`
4. **WooCommerce** : vérifier la page Boutique et les fiches produits.

## Astuce: créer le fichier ZIP rapidement
Depuis un terminal dans un environnement où le dossier existe (ta machine locale, un serveur SSH, ou cet espace de travail), exécute :
```bash
cd /workspace/python_apps
zip -r wordpress-theme-energies.zip wordpress-theme-energies
```

> Important : ces commandes **ne se lancent pas dans l’interface web github.com**.
> Elles se lancent dans un terminal (local, SSH, ou CI) ayant accès aux fichiers.

## Vérification rapide
- Le thème apparaît dans **Apparence > Thèmes**.
- La page d’accueil affiche la section produits + devis.
- Les pages WooCommerce reprennent le style du thème.

## Compatibilité extension de devis (`solithium-wizard`)
Pour limiter les conflits CSS/JS :
- Les classes du thème ont été préfixées `erp-` (`erp-card`, `erp-btn`, `erp-section`, etc.).
- Les styles sont scoppés sous la classe `body.erp-theme`.

Si ton extension charge sa propre UI (boutons/cartes), elle ne doit plus être affectée par les classes génériques du thème.
