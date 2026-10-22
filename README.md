# Bonjour c'est moi Michal

# cO²mpare

cO²mpare est un projet de site qui permettra de comparer des trajets selon leur prix, leur durée et leurs émissions de CO₂.

## Notre équipe

| Membre | Compte GitHub | Tâches prévues |
| --- | --- | --- |
| Jassim | [jassimQT](https://github.com/jassimQT) | Préparer le dépôt, les fichiers du thème et les explications |
| Michal | [michal0612](https://github.com/michal0612) | Vérifier les explications d'installation, puis préparer la page de comparaison et son apparence |

Les tâches sont suivies dans l'onglet **Issues** du dépôt. La répartition peut évoluer.

## Les outils

- **WordPress** : l'outil utilisé pour créer le site.
- **Twenty Twenty-Four** : le thème parent qui sert de base.
- **cO²mpare** : notre thème enfant, dans lequel nous ajouterons nos personnalisations.
- **PHP, HTML et CSS**, puis JavaScript si nécessaire : les langages utilisés pour développer le site.
- **Git** : conserve l'historique des modifications.
- **GitHub** : permet de partager les fichiers, les tâches et les modifications de l'équipe.

## Les fichiers

- `co2mpare/style.css` : indique le nom du thème, son parent et accueillera nos styles.
- `co2mpare/functions.php` : permet notamment de charger les styles du thème enfant.
- `co2mpare/assets/` : dossiers réservés aux futurs fichiers CSS et JavaScript.
- `co2mpare/templates/` et `co2mpare/parts/` : dossiers réservés aux futures mises en page.
- `.gitignore` : indique à Git les fichiers à ne pas partager, par exemple les mots de passe et sauvegardes locales.
- `README.md` : cette page d'explications.
- `.github/pull_request_template.md` : quelques questions pour expliquer une modification avant de l'intégrer.

Les fichiers `.gitkeep` servent uniquement à conserver les dossiers encore vides sur GitHub.

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

Pour chaque tâche :

1. Choisir une issue.
2. Créer une branche depuis la version à jour de `main`. Utiliser un nom simple, comme `michal/installation` ou `jassim/documentation`.
3. Modifier les fichiers concernés.
4. Enregistrer les modifications avec un message clair, par exemple « Préciser les étapes d'installation ».
5. Ouvrir une PR vers `main` et indiquer le numéro de l'issue concernée.
6. Faire relire la modification par l'autre membre. Corriger si nécessaire, puis fusionner la PR.
7. Repartir de `main` à jour pour la tâche suivante.

Chaque membre utilise son propre compte. Pour valider le devoir, chacun doit avoir fusionné au moins une PR. Une petite amélioration utile du README peut être une première contribution ; il n'est pas nécessaire de développer toute une page pour apprendre cette étape.

## Le tableau de suivi

Le [tableau de suivi GitHub Projects](https://github.com/users/jassimQT/projects/1) organise les issues en quatre colonnes :

| Colonne | Signification |
| --- | --- |
| À faire | La tâche n'a pas encore commencé |
| En cours | Un membre travaille dessus |
| À vérifier | Les modifications attendent une vérification |
| Terminé | La tâche est finie et ses modifications sont intégrées |

Les **labels** sont des étiquettes pour classer les tâches. Nous utilisons les étiquettes existantes : `documentation` pour les explications, `enhancement` pour les améliorations et `bug` pour les problèmes.

## Avant de remettre le devoir

- [x] Créer le dépôt, la base du thème enfant, le README et le fichier .gitignore.
- [x] Créer les premières issues avec des labels.
- [x] Fusionner une première PR sur le compte de Jassim : [PR nº 7](https://github.com/jassimQT/Co2mpare/pull/7).
- [x] Vérifier que Michal a accepté son invitation et peut modifier le dépôt.
- [ ] Vérifier l'accès des enseignants DFEF / DIA.
- [x] Créer et lier le tableau Projects avec les quatre colonnes et y ajouter les six issues.
- [ ] Michal réalise une modification depuis son compte, ouvre une PR et la fusionne après vérification.
- [ ] Remettre une seule fois par équipe le lien https://github.com/jassimQT/Co2mpare.

L'activation du thème dans une installation WordPress reste à tester.
