# Workshop TailwindCSS

Bienvenue sur notre repo pour la préparation au workshop sur TailwindCSS ! Tout d'abord et afin de facilier le bon déroulement de la présentation, nous avons créé 3 sous-dossiers où Tailwind est déjà installé et configuré : **Natif**, **React** et **Laravel**. Vous n'avez plus qu'à choisir la techno que vous voulez et vous pourrez commencer directement à styliser votre formulaire ! N'oubliez pas d'utiliser **Npm install** pour les versions Natif et React et **Composer install** pour Laravel.  

Voici le lien vers la doc de TailwindCSS pour chercher les équivalents Tailwind des propriétés CSS : https://tailwindcss.com/docs/utility-first  
Utilisez la barre de recherche "Quick search" pour trouver les propriétés que vous cherchez.

Nous allons quand même vous détaillez ci-dessous comment faire l'installation et la configuration de Tailwind, vous pourrez ainsi le réutiliser pour vos futurs projets !

# Natif
## Installation (Utiliser Tailwind CLI)

1. Installer tailwindcss via npm, et créer le fichier tailwind.config.js.

    ```bash
    npm install -D tailwindcss
    npx tailwindcss init
    ```

2. Ajouter les chemins d'accès à tous les fichiers modèles dans le fichier tailwind.config.js.

    ```bash
    /** @type {import('tailwindcss').Config} */
    module.exports = {
    content: ["./src/**/*.{html,js}"],
    theme: {
    extend: {},
    },
    plugins: [],
    }
    ```

**Attention** : dans content: [], le chemin n'est pas toujours le bon. En effet, index.html et app.js se retrouveront souvent à la racine. Donc changer le chemin par : content: ["./*.{html,js}"],

3. Ajouter les directives @tailwind pour chacune des couches de Tailwind à du fichier CSS principal.

Créer un dossier src et à l'intérieur un fichier input.css. Ajouter ce qui suit dedans :

```bash
@tailwind base;
@tailwind components;
@tailwind utilities;
```

4. Exécuter l'outil CLI pour rechercher des classes dans les fichiers modèles et créer le CSS.

Utiliser la commande suivante dans le terminal :

```bash
npx tailwindcss -i ./src/input.css -o ./src/output.css --watch
```

Ca aura pour effet de créer un fichier output.css dans le dossier src.

5. Ajouter le lien vers le CSS dans la balise head de index.html.

```bash
<link href="./src/output.css" rel="stylesheet">
```

Vous trouverez ici le lien vers la doc de Tailwind : https://tailwindcss.com/docs/installation

# React

1. Installer Tailwind CSS via npm (dans le projet React précédemment installé).

```bash
npm install -D tailwindcss postcss autoprefixer
```

2. Initialiser la configuration de Tailwind CSS.

```bash
npx tailwindcss init -p
```

Cette commande va créer deux fichiers dans le projet :

- `tailwind.config.js` : pour configurer Tailwind.
- `postcss.config.js` : pour configurer PostCSS.

3. Configurer le fichier tailwind.config.js.  
Ouvre le fichier `tailwind.config.js` et ajouter ceci :

```bash
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

4. Dans index.css, ajouter ceci :

```bash
@tailwind base;
@tailwind components;
@tailwind utilities;
```

5. S'assurer que index.css est bien importé dans main.jsx.

6. Il n'y a plus qu'à lancer le serveur.

```bash
npm run dev
```

Lien vers la doc : https://tailwindcss.com/docs/guides/vite


