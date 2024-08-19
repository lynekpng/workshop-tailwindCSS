# Workshop TailwindCSS

Bienvenue sur notre repo pour la préparation au workshop sur TailwindCSS ! Tout d'abord et afin de facilier le bon déroulement de la présentation, nous avons créé 3 sous-dossiers où Tailwind est déjà installé et configuré : **Natif**, **React** et **Laravel**. Vous n'avez plus qu'à choisir la techno que vous voulez et vous pourrez commencer directement à styliser votre formulaire ! N'oubliez pas d'utiliser `npm install` pour les versions **Natif** et **React** et `composer install` pour Laravel.  

### **Attention**: si vous décidez de prendre le dossier Laravel déjà initialisé, vous devrez exécuter quelques commandes avant de pouvoir commencer :
```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```
---

Voici le lien vers la doc de TailwindCSS pour chercher les équivalents Tailwind des propriétés CSS : https://tailwindcss.com/docs/utility-first  
Utilisez la barre de recherche "Quick search" pour trouver les propriétés que vous cherchez.

## Extension VSCode recommandée

Installer l'extension `Tailwind CSS IntelliSense`.  

### Nous allons quand même vous détailler ci-dessous comment faire l'installation et la configuration de Tailwind, vous pourrez ainsi le réutiliser pour vos futurs projets !

---

# Natif (via CLI)

1. Installer tailwindcss via npm, et créer le fichier tailwind.config.js.

    ```bash
    npm install -D tailwindcss
    npx tailwindcss init
    ```

2. Ajouter les chemins d'accès à tous les fichiers modèles dans le fichier tailwind.config.js.

    ```js
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

```css
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

```html
<link href="./src/output.css" rel="stylesheet">
```

Vous trouverez ici le lien vers la doc de Tailwind : https://tailwindcss.com/docs/installation

---

# React

1. Installer Tailwind CSS via npm (lorsque le projet en React est initialisé).

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

3. Configurer le fichier `tailwind.config.js`.  
Ouvre le fichier `tailwind.config.js` et ajouter ceci :

```js
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

4. Dans `index.css`, ajouter ceci :

```bash
@tailwind base;
@tailwind components;
@tailwind utilities;
```

5. S'assurer que `index.css` est bien importé dans `main.js`.

6. Il n'y a plus qu'à lancer le serveur.

```bash
npm run dev
```

Lien vers la doc : https://tailwindcss.com/docs/guides/vite

---

# Laravel

1. Installer Tailwind CSS via Npm (lorsque le projet en Laravel est initialisé)

```bash
npm install -D tailwindcss postcss autoprefixer
```

2. Initialiser la configuration de Tailwind CSS

```bash
npx tailwindcss init -p
```

3. Configurer le fichier tailwind.config.js.  
Ouvre le fichier `tailwind.config.js` et ajouter ceci :

```js
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

4. Dans `./resources/css/app.css`, ajouter ceci :

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

5. Dans le fichier `*.blade.php`, ajouter  `@vite('resources/css/app.css')` dans la balise head. Par exemple, lors de l'initialisation du projet dans le dossier `./resources/views/welcome.blade.php` se trouve la vue 'Welcome'. On peut supprimer ce qui se trouve dedans et ajouter le lien ci-dessus dans le doctype.

6. Il n'y a plus qu'à lancer `npm run dev`

Lien vers la doc : https://tailwindcss.com/docs/guides/laravel

## Auteurs
[Caroline](https://github.com/Caroline1123) & [Justine](https://github.com/Justine-Frigo)
