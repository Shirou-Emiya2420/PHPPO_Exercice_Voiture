🚗 Exercices PHP – POO : Voiture & VoitureÉlectrique
Ce dépôt contient deux petits projets PHP orientés objet autour du concept de voiture, avec affichage HTML et un style CSS simple.

📁 Exercice 1 – Voiture
Description :
Dans ce premier exercice, une classe Voiture est définie avec les propriétés marque et modèle. Ces objets sont ensuite instanciés et affichés dynamiquement dans une page HTML stylisée.

Fonctionnalités :
Classe Voiture avec getters/setters

Méthode getInfos() pour afficher les détails

Affichage HTML + CSS basique (style.css)

📁 Exercice 2 – Voiture + VoitureElec (Héritage)
Description :
Ce second exercice introduit l’héritage avec une classe VoitureElec qui hérite de Voiture et ajoute l’attribut autonomie. La méthode getInfos() est surchargée pour afficher à la fois les infos de la voiture et son autonomie.

Fonctionnalités :
Classe Voiture (identique à l’exo 1)

Classe VoitureElec héritée avec une autonomie

Appel à parent::getInfos() pour conserver l’affichage de la classe parente

Page HTML et CSS réutilisés

🖥️ Comment exécuter
Place chaque projet dans son propre dossier.

Lancer un serveur local (XAMPP, Laragon, etc.).

Ouvre index.php via localhost.

📁 Structure du dépôt
.
├── exerciceVoiture_1
│   ├── index.php
│   ├── Voiture.php
│   └── style.css
│
├── exerciceVoiture_2
│   ├── index.php
│   ├── Voiture.php
│   └── style.css
└── README.md