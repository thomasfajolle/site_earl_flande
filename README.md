# site_earl_flande

Site vitrine de l’exploitation agricole familiale EARL FLANDE.

## Objectif

Créer un petit site vitrine, accessible uniquement via un lien direct ou un QR code (affiché à l’entrée du point de vente), présentant la ferme, les produits vendus et des explications sur les cultures. Le site est désormais 100% statique (HTML/CSS/JS) afin d’être hébergé facilement sur GitHub Pages.

## Pages

- Page d’accueil (`index.html`)
	- Présentation de la ferme (texte + 2–3 blocs clés: qui sommes-nous, où nous trouver, période d’activité).
	- Galerie photos intégrée sur la page d’accueil (slider ou grille légère, avec lazy-loading des images).
	- Coordonnées essentielles (adresse, lien vers carte, lien vers la page Produits).

- Page Produits et horaires (`produits.html`)
	- Liste des produits : framboises et asperges.
	- Prix (à renseigner et mettre à jour facilement).
	- Horaires de vente (à renseigner et mettre à jour facilement).

- Page Cultures (`cultures.html`)
	- Explications sur les deux cultures : framboises et asperges.
	- Comment elles sont semées/plantées, comment elles sont récoltées.
	- Périodes de vente dans l’année.

## Accès et confidentialité

- Accès via URL directe et QR code uniquement.
- Pas d’indexation : ajout d’un meta `noindex, nofollow` sur toutes les pages (et optionnellement un `robots.txt` qui bloque tout).
- Pas de cookies ni de traqueurs.

## Arborescence

```
.
├─ index.html         # Accueil + galerie photos (dynamique côté client)
├─ produits.html      # Produits (framboises, asperges), prix, horaires
├─ cultures.html      # Explications sur les cultures et périodes de vente
├─ assets/
│  ├─ css/
│  │  └─ styles.css   # Styles communs et responsive
│  ├─ img/
│  │  ├─ galerie/     # Photos de la ferme et des produits + images.json
│  │  └─ ui/          # Logos/illustrations si besoin
│  └─ js/
│     └─ main.js      # JS léger (slider/galerie, menu mobile si nécessaire)
└─ robots.txt         # Blocage d’indexation
```

## Lignes directrices techniques

- Stack simple : HTML/CSS/JS statique (compatible GitHub Pages).
- Responsive : mise en page adaptée aux mobiles (public principal via QR code sur place).
- Performance :
	- Images optimisées (WebP/JPEG), tailles adaptées, lazy-loading.
	- CSS/JS minimalistes, pas de dépendances lourdes.
- Accessibilité : contraste correct, textes alternatifs sur les images.

## Contenus à préparer

- Textes de présentation de la ferme (accueil).
- Informations produits :
	- Framboises : formats/disponibilités, prix (à préciser), période de vente.
	- Asperges : types/formats, prix (à préciser), période de vente.
- Horaires de vente (jours/horaires exacts).
- Photos pour la galerie (10–20 photos sélectionnées, optimisées) + mise à jour du fichier `assets/img/galerie/images.json`.

## Déploiement sur GitHub Pages

1. Pousser la branche `main` sur GitHub.
2. Dans Settings > Pages, choisir la source `Deploy from a branch`, branch `main`, dossier `/root` (racine), puis sauvegarder.
3. L’URL de publication sera fournie par GitHub. Générer ensuite un QR code vers cette URL.

Notes GitHub Pages:
- Les pages sont statiques. La galerie est construite côté client à partir de `assets/img/galerie/images.json`.
- Pour ajouter ou retirer des photos, uploadez les fichiers dans `assets/img/galerie/` et mettez à jour `images.json` en listant les chemins (relatifs au site) et les légendes.

## Prochaines étapes

1. Créer la structure de fichiers et l’en-tête/pied de page communs.
2. Intégrer les contenus de l’accueil et la galerie photos.
3. Ajouter la page Produits avec section prix + horaires (contenu facile à mettre à jour).
4. Rédiger la page Cultures (semis/plantation, récolte, périodes de vente).
5. Ajouter les meta `noindex` et vérifier le `robots.txt`.
6. Optimiser et compresser les images, activer le lazy-loading.
7. Tests sur mobile (Android/iOS) via QR code, contrôle de lisibilité et rapidité.

---

Dernière mise à jour : 2025-10-08 (version statique)
