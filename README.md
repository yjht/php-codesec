# php-codesec
Test d'identification de vulnérabilités du code PHP

## Objectif
Identifier dans ce code les principales vulnérabilités présentes, qu'elles concernent la conception, le code lui-même ou les choix d'implémentation.

## Attendus
Un rapport d'analyse doit être produit, en langue française, présentant la liste priorisée des vulnérabilités identifiées, un exemple de payload permettant de réaliser l'exploit de la vulnérabilité, une évaluation de la sévérité et de la difficulté à l'exploiter et une recommandation pour la correction ou a minima la mitigation de cette vulnérabilité.

Le rapport est attendu dans un format largement reconnu, que ce soit un format OpenDocument (MS Office), Open/Libre Office, HTML, Markdown, PDF, ...

### exemple : 
| Id | Ficher (ligne) | Vulnérabilité | requête et payload | Sévérité | Difficulté | Recommandation | Priorité |
| --- | --- | --- | --- | --- | --- | --- | --- |
| 0 | login.html (16) | Divulgation d'informations sensibles (code de génération du jeton CSRF) | GET /login.html | moyen | Facile | remplacer l'extension `html` par `php` pour éviter l'affichage de la source | moyenne |

## Durée estimée
La charge à allouer pour la réalisation de cet audit ne devrait pas dépasser 2h pour un développeur ayant une connaissance basique du langage PHP. 

L'évaluation du rapport sera mise autant sur le fond (identification, classification des vulnérabilités et impacts) que la forme.
