# 🏡 NovaNest - Modern Real Estate Platform

<div align="center">
  <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&weight=600&size=24&duration=3000&pause=1000&color=2563EB&center=true&vCenter=true&width=600&lines=Modern+Real+Estate+Management+%F0%9F%8F%A1;Smart+Property+Search+%F0%9F%94%8D;Responsive+%26+User-Friendly+%F0%9F%93%B1" alt="NovaNest Typing SVG" />
</div>

<div align="center">
  <img src="https://img.shields.io/badge/Status-Active_Development-green?style=for-the-badge" alt="Status"/>
  <img src="https://img.shields.io/badge/Version-1.0.0-blue?style=for-the-badge" alt="Version"/>
  <img src="https://img.shields.io/badge/License-MIT-yellow?style=for-the-badge" alt="License"/>
</div>

---

## 🎯 À propos du projet

**NovaNest** est une plateforme immobilière moderne conçue pour simplifier la gestion et la recherche de biens immobiliers. L'application offre une expérience utilisateur intuitive permettant de consulter, publier et gérer des annonces immobilières (appartements, maisons, terrains) avec des outils de recherche avancés.

### 🎨 **Vision du projet**
Créer une solution complète et accessible pour connecter propriétaires, agents immobiliers et acheteurs potentiels dans un environnement numérique moderne et sécurisé.

---

## 📸 Aperçu de l'interface

<div align="center">
  <img src="./Screenshot%20(179).png" alt="NovaNest Interface" width="80%" style="border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);"/>
  <p><em>Interface principale affichant les annonces avec filtres dynamiques</em></p>
</div>

---

## ✨ Fonctionnalités principales

### 🔍 **Recherche & Filtrage**
- Filtres dynamiques multi-critères (type, prix, localisation, superficie)
- Recherche géolocalisée avec cartes interactives
- Suggestions automatiques et historique de recherche
- Tri par pertinence, prix, date de publication

### 🏘️ **Gestion des annonces**
- Pages détaillées avec galeries photos haute résolution
- Informations complètes (description, caractéristiques, contact)
- Système de favoris et comparaisons
- Partage social et export PDF

### 👥 **Système utilisateur**
- Authentification sécurisée (agents, propriétaires, visiteurs)
- Profils personnalisés avec historique d'activité
- Tableau de bord intuitif pour la gestion des annonces
- Notifications en temps réel

### 📱 **Expérience utilisateur**
- Design responsive optimisé pour tous les appareils
- Interface moderne avec animations fluides
- Mode sombre/clair
- Accessibilité WCAG 2.1 compliant

---

## 🛠️ Stack technique

<div align="center">

### **Frontend**
![React](https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB)
![TypeScript](https://img.shields.io/badge/TypeScript-007ACC?style=for-the-badge&logo=typescript&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Framer Motion](https://img.shields.io/badge/Framer_Motion-black?style=for-the-badge&logo=framer&logoColor=blue)

### **Backend**
![Node.js](https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white)
![Express.js](https://img.shields.io/badge/Express.js-404D59?style=for-the-badge&logo=express&logoColor=white)
![MongoDB](https://img.shields.io/badge/MongoDB-4EA94B?style=for-the-badge&logo=mongodb&logoColor=white)
![JWT](https://img.shields.io/badge/JWT-black?style=for-the-badge&logo=JSON%20web%20tokens)

### **Services & Déploiement**
![Vercel](https://img.shields.io/badge/Vercel-000000?style=for-the-badge&logo=vercel&logoColor=white)
![Firebase](https://img.shields.io/badge/Firebase-039BE5?style=for-the-badge&logo=Firebase&logoColor=white)
![EmailJS](https://img.shields.io/badge/EmailJS-FF6B6B?style=for-the-badge&logo=minutemailer&logoColor=white)

</div>

---

## 🚀 Installation et lancement

### **Prérequis**
- Node.js (v16+)
- npm ou yarn
- MongoDB (local ou cloud)

### **Installation**
```bash
# Cloner le repository
git clone https://github.com/lancinelot/novanest.git
cd novanest

# Installer les dépendances
npm install

# Configurer les variables d'environnement
cp .env.example .env
# Éditer .env avec vos configurations

# Lancer le serveur de développement
npm run dev

# Ou pour la production
npm run build
npm start
```

### **Configuration**
```bash
# Variables d'environnement requises
MONGODB_URI=your_mongodb_connection_string
JWT_SECRET=your_jwt_secret
EMAILJS_SERVICE_ID=your_emailjs_service_id
EMAILJS_TEMPLATE_ID=your_emailjs_template_id
EMAILJS_PUBLIC_KEY=your_emailjs_public_key
```

---

## 📁 Structure du projet

```
novanest/
├── 📁 src/
│   ├── 📁 components/         # Composants réutilisables
│   ├── 📁 pages/             # Pages principales
│   ├── 📁 hooks/             # Hooks personnalisés
│   ├── 📁 utils/             # Fonctions utilitaires
│   ├── 📁 services/          # Services API
│   └── 📁 styles/            # Styles globaux
├── 📁 public/                # Assets statiques
├── 📁 server/                # Backend API
│   ├── 📁 routes/            # Routes API
│   ├── 📁 models/            # Modèles MongoDB
│   ├── 📁 middleware/        # Middlewares
│   └── 📁 controllers/       # Contrôleurs
└── 📄 README.md
```

---

## 🔮 Roadmap & Fonctionnalités à venir

- [ ] 🗺️ **Intégration Google Maps** - Visualisation géographique des biens
- [ ] 💬 **Chat en temps réel** - Communication directe agent/client
- [ ] 📊 **Analytics avancés** - Statistiques et rapports pour agents
- [ ] 🏦 **Estimation automatique** - IA pour l'évaluation des biens
- [ ] 📱 **Application mobile** - Version native iOS/Android
- [ ] 🔔 **Notifications push** - Alertes personnalisées
- [ ] 💰 **Système de paiement** - Intégration Stripe/PayPal
- [ ] 🌐 **Multi-langues** - Support international

---

## 🤝 Contribution

Les contributions sont les bienvenues ! Pour contribuer :

1. **Fork** le projet
2. Créez votre **feature branch** (`git checkout -b feature/AmazingFeature`)
3. **Commit** vos changements (`git commit -m 'Add some AmazingFeature'`)
4. **Push** vers la branch (`git push origin feature/AmazingFeature`)
5. Ouvrez une **Pull Request**

### **Guidelines**
- Suivre les conventions de code établies
- Ajouter des tests pour les nouvelles fonctionnalités
- Mettre à jour la documentation si nécessaire
- Respecter les principes de design existants

---

## 📄 Licence

Ce projet est sous licence **MIT**. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

---

## 👨‍💻 Auteur

**Lanciné Keita**
- 🌐 **Portfolio**: [https://portfolio-tau-ten-zt8jr08itc.vercel.app/](https://portfolio-tau-ten-zt8jr08itc.vercel.app/)
- 💼 **LinkedIn**: [keitalancine-ds](https://www.linkedin.com/in/keitalancine-ds/)
- 📧 **Email**: klancine011@gmail.com
- 🐙 **GitHub**: [@lancinelot](https://github.com/LancineDev)

---

<div align="center">
  
**⭐ Si ce projet vous plaît, n'hésitez pas à lui donner une étoile !**

<img src="https://forthebadge.com/images/badges/built-with-love.svg" alt="Built with Love"/>
<img src="https://forthebadge.com/images/badges/made-with-javascript.svg" alt="Made with JavaScript"/>

*NovaNest - Votre nouveau chez-vous commence ici* 🏡✨

</div>
