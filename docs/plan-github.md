# Plan GitHub à mettre en place

Ce document prépare les tâches ; il ne signifie pas que les issues ou le Project ont été créés.

## Issues proposées

Les labels ci-dessous ne sont à utiliser que s'ils existent effectivement dans le dépôt. Sinon sélectionner un label existant pertinent, sans en inventer un.

| Titre | Responsable proposé | Label existant à rechercher | Résultat attendu |
| --- | --- | --- | --- |
| Initialiser le thème enfant cO²mpare | Jassim | enhancement | style.css et functions.php présents ; activation locale réussie avec Twenty Twenty-Four |
| Documenter l'installation et les conventions | Jassim | documentation | README relu, installation reproductible et conventions décrites |
| Créer la structure de la page de comparaison | Michal | enhancement | Champs départ et arrivée et zone de résultats ; aucune donnée fictive présentée comme réelle |
| Ajouter les premiers styles adaptatifs | Michal | enhancement | Page lisible sur mobile et ordinateur ; champs et boutons accessibles |
| Définir les données de comparaison des trajets | Jassim | enhancement | Sources, unités, hypothèses et méthode pour coût, durée et CO₂ documentées |
| Vérifier le thème et la procédure d'installation | Michal | enhancement | Installation suivie depuis le README ; problèmes signalés par des issues distinctes |

## Tableau

Créer un GitHub Project avec une vue Board et un champ Status contenant exactement :

1. À faire : tâche prête à être commencée.
2. En cours : un membre travaille dessus.
3. À vérifier : PR ouverte, en attente de relecture.
4. Terminé : critères remplis et PR fusionnée.

Lier le Project au dépôt et y ajouter les issues ; les placer initialement dans À faire. Ne pas confondre les statuts du tableau et les labels des issues.

## Première contribution de chacun

- Jassim : créer `chore/theme-enfant` depuis `main`, ajouter l'initialisation du thème et ouvrir une PR ; demander la relecture à Michal.
- Michal : une fois cette base fusionnée, actualiser `main`, créer `feat/page-comparaison`, réaliser la structure de la page et ouvrir une PR depuis son compte ; demander la relecture à Jassim.
- Chaque auteur traite les remarques puis fusionne sa PR lorsque la vérification et les règles du dépôt le permettent. Aucun résultat de fusion n'est acquis à ce stade.

Ne pas ouvrir de PR vide : chaque branche doit contenir une contribution réelle. Le pseudo GitHub de Michal reste à renseigner avant toute assignation ou demande de relecture.
