# cO²mpare

Plateforme de comparaison de trajets selon le coût, la durée et les émissions de CO₂. Le projet vise à aider les utilisateurs à comparer les moyens de transport selon leurs priorités.

## Équipe et répartition initiale proposée

| Membre | Compte GitHub | Premières tâches |
| --- | --- | --- |
| Jassim | @jassimQT | Initialiser le thème enfant, documenter l'installation et les conventions |
| Michal | À renseigner | Préparer la structure de la page de comparaison et les premiers styles |

Chaque membre réalise ses modifications sur sa branche, ouvre sa propre pull request et participe à la vérification du travail de l'autre. La répartition pourra évoluer via les issues.

## Outils

- WordPress et thème parent Twenty Twenty-Four.
- PHP, HTML, CSS et JavaScript si nécessaire.
- Git et GitHub pour le versionnage, les issues, les pull requests et GitHub Projects.
- Un environnement WordPress local et un éditeur de code au choix de chaque membre.

Aucun service de calcul d'itinéraire ou d'émissions n'est encore choisi. Le comparateur n'est pas encore implémenté.

## Structure

```text
co2mpare/                 Thème enfant à installer dans WordPress
  style.css              Déclaration du thème et styles du projet
  functions.php          Chargement de la feuille de styles
  assets/css/            Feuilles de styles supplémentaires
  assets/js/             Scripts du projet
  templates/             Futurs modèles HTML de blocs
  parts/                 Futures parties de modèles
docs/                    Plan de travail et suivi GitHub
.github/                 Modèle de pull request
```

Les modèles et parties non personnalisés sont hérités du parent. Les dossiers réservés contiennent un fichier `.gitkeep` pour être conservés dans Git.

## Installation locale

1. Installer WordPress dans un environnement local.
2. Installer Twenty Twenty-Four depuis Apparence → Thèmes → Ajouter un thème. Son dossier doit s'appeler `twentytwentyfour`.
3. Copier le dossier `co2mpare` de ce dépôt dans `wp-content/themes/`.
4. Dans Apparence → Thèmes, activer **cO²mpare**.
5. Ouvrir le site et vérifier l'absence d'erreur et le chargement de `co2mpare/style.css`.

Le dépôt contient le thème enfant, pas WordPress entier. Ne jamais modifier directement le thème parent. Les modifications de modèles faites dans l'éditeur WordPress sont enregistrées en base : exporter les modèles et reporter les fichiers dans le thème pour les partager avec l'équipe.

## Branches et commits

- `main` : version commune vérifiée ; pas de travail quotidien directement dessus.
- Une branche courte par tâche : `feat/comparateur`, `style/page-comparaison`, `docs/installation` ou `fix/chargement-css`.
- Commits courts et descriptifs : `feat: ajouter la structure du comparateur`, `style: ajuster les boutons`, `docs: préciser l'installation`, `fix: corriger le chargement CSS`.
- Une pull request par tâche ; décrire la modification, les vérifications et l'issue liée (`Closes #NUMERO`).
- Demander la vérification de l'autre membre, corriger les remarques puis fusionner après validation.
- Après fusion, actualiser `main` avant de commencer une autre tâche.

## Organisation du projet GitHub

Tableau prévu : **cO²mpare — Suivi du projet**.

Statuts : **À faire → En cours → À vérifier → Terminé**.

Une issue représente une tâche et possède un responsable. Utiliser les labels déjà présents dans le dépôt, après vérification de leurs noms. Voir `docs/plan-github.md` pour les tâches proposées et le parcours de PR de chaque membre.

## Vérification avant remise

- [ ] Vérifier l'accès des deux membres et des enseignants DFEF / DIA.
- [ ] Vérifier le README, le .gitignore et l'activation du thème enfant.
- [ ] Créer les issues avec les labels existants et les ajouter au tableau.
- [ ] Chaque membre a fusionné au moins une pull request issue de sa contribution.
- [ ] Remettre une seule fois le lien https://github.com/jassimQT/Co2mpare.

État : initialisation proposée par pull request ; activation WordPress, tableau Project, accès des enseignants et fusions individuelles restent à vérifier.
