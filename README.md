# 🚗 Exercices PHP - Programmation Orientée Objet (POO)

Ce dépôt contient deux exercices pratiques en PHP orienté objet autour du concept de **voitures**, permettant de comprendre la création de classes, l'héritage, et l'affichage d'objets via HTML/CSS.

---

## 📁 exerciceVoiture_1

### Description :
Création d'une classe `Voiture` contenant les propriétés `marque` et `modèle`. Les objets sont affichés dynamiquement dans une page web avec un style CSS simple.

### Fonctionnalités :
- Classe `Voiture` avec constructeurs, getters et setters
- Méthode `getInfos()` pour afficher les détails
- Affichage HTML et mise en forme via `style.css`

---

## 📁 exerciceVoiture_2

### Description :
Extension du premier exercice avec une classe `VoitureElec` qui hérite de `Voiture` et introduit l'attribut `autonomie`. La méthode `getInfos()` est surchargée pour ajouter les données spécifiques à l’électrique.

### Fonctionnalités :
- Héritage de la classe `Voiture`
- Nouvelle propriété `autonomie`
- Appel à `parent::getInfos()` pour réutiliser l’affichage de la classe mère

---

## 💻 Lancer le projet

1. Cloner le dépôt dans votre serveur local.
2. Lancer un serveur PHP (XAMPP, WAMP, etc.).
3. Accéder aux fichiers `index.php` via `localhost`.

---

## 🎨 Style

Les deux exercices utilisent un fichier `style.css` pour un rendu propre, centré et lisible avec classes `.container` et `.voiture`.

---

## 📂 Structure

```
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
```

---

## 🎯 Objectifs pédagogiques

- Maîtriser la création et l’utilisation de classes en PHP
- Comprendre les principes d’héritage
- Savoir afficher des objets dans une page HTML
- Styliser le rendu avec du CSS simple