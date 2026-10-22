# Bonjour c'est moi Michal

# cO²mpare

cO²mpare est un projet de site qui permettra de comparer des trajets selon leur prix, leur durée et leurs émissions de CO₂.

## Notre équipe

| Membre | Compte GitHub | Role |
| --- | --- | --- |
| Jassim | [jassimQT](https://github.com/jassimQT) | web developper - optimisation du site web - executeur |
| Michal | [michal0612](https://github.com/michal0612) | ux-ui designer - graphique designer - chef de projet |

Les tâches sont suivies dans l'onglet **Issues** du dépôt. La répartition peut évoluer.

## Les outils

- **WordPress** : l'outil utilisé pour créer le site.
- **Twenty Twenty-Four** : le thème parent qui sert de base.
- **Figma** : notre moodboard, maquette, charte graphique
- **PHP, HTML et CSS**, puis JavaScript si nécessaire : les langages utilisés pour développer le site.
- **Git** : conserve l'historique des modifications.
- **GitHub** : permet de partager les fichiers, les tâches et les modifications de l'équipe.

## Arborescence

Co2mpare/
├── README.md
├── .gitignore
├── .github/
│   └── pull_request_template.md
└── co2mpare/
    ├── style.css
    ├── functions.php
    ├── assets/
    │   ├── css/
    │   │   └── .gitkeep
    │   └── js/
    │       └── .gitkeep
    ├── templates/
    │   └── .gitkeep
    └── parts/
        └── .gitkeep
        

README.md : présente le projet et l’équipe.
.gitignore : indique les fichiers à ne pas partager.
style.css : déclare le thème et contient vos styles.
functions.php : charge les styles et accueillera vos fonctions.
assets/ : fichiers CSS et JavaScript.
templates/ : mises en page complètes.
parts/ : parties réutilisables, comme l’en-tête et le pied de page.
.gitkeep : conserve les dossiers encore vides sur GitHub.
    
## Installer le thème dans WordPress

1. Préparer une installation de WordPress pour les essais.
2. Dans **Apparence → Thèmes → Ajouter un thème**, installer **Twenty Twenty-Four**.
3. Copier le dossier `co2mpare` du dépôt dans le dossier `wp-content/themes/` de cette installation.
4. Dans **Apparence → Thèmes**, activer **cO²mpare**.
5. Ouvrir le site pour vérifier qu'il s'affiche sans erreur.

Le thème parent doit rester installé. Nous modifierons les fichiers de `co2mpare`, pas ceux de Twenty Twenty-Four. Au début, le site reprend l'apparence du parent. Le comparateur sera développé plus tard : il n'est pas demandé de le terminer pour ce devoir de préparation du dépôt.

## Travailler à deux sur GitHub

- Une **issue** est une fiche qui décrit une tâche.
- Une **branche** est un espace pour préparer des modifications sans changer immédiatement la version commune.
- La branche **main** contient la version commune du projet.
- Un **commit** est un enregistrement des modifications, accompagné d'un court message.
- Une **pull request**, ou **PR**, est une demande pour intégrer une branche dans `main`.
- **Fusionner** une PR signifie intégrer ses modifications dans `main`.

## Le tableau de suivi

Le [tableau de suivi GitHub Projects](https://github.com/users/jassimQT/projects/1) organise les issues en quatre colonnes :

| Colonne | Signification |
| --- | --- |
| À faire | La tâche n'a pas encore commencé |
| En cours | Un membre travaille dessus |
| À vérifier | Les modifications attendent une vérification |
| Terminé | La tâche est finie et ses modifications sont intégrées |

Les **labels** sont des étiquettes pour classer les tâches. Nous utilisons les étiquettes existantes : `documentation` pour les explications, `enhancement` pour les améliorations et `bug` pour les problèmes.

Conventions
Ne pas travailler directement dans main.
Une tâche = une issue et une branche feature/nom-de-la-tache.
Noms des branches en minuscules, sans espace ni accent.
Messages de commits explicites en français, par exemple Ajout de la section presentation.
Ouvrir une pull request vers main, avec une description des changements et des vérifications.
L’autre membre relit et approuve avant la fusion. L’auteur ne valide pas lui-même sa PR.

L'activation du thème dans une installation WordPress reste à tester.
