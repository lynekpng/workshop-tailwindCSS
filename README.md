# Workshop-TailwindCSS

Bienvenue sur notre repo pour la préparation au workshop sur TailwindCSS ! Tout d'abord et afin de facilier le bon déroulement de la présentation, nous avons créé 3 sous-dossiers où Tailwind est déjà installé et configuré : **Natif**, **React** et **Laravel**. Vous n'avez plus qu'à choisir la techno que vous voulez et vous pourrez commencer directement à styliser votre formulaire !  

Nous allons quand même vous détaillez ci-dessous comment faire l'installation et la configuration de Tailwind, vous pourrez ainsi le réutiliser pour vos futurs projets !

## Natif
### Installation (Utiliser Tailwind CLI)

1. Installer tailwindcss via npm, et creer votre fichier tailwind.config.js.

    ```bash
    npm install -D tailwindcss
    npx tailwindcss init
    ```

2. Ajoutez les chemins d'accès à tous vos fichiers modèles dans votre fichier tailwind.config.js.

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

**Attention** : dans content: [], le chemin n'est pas toujours le bon. En effet, votre index.html et app.js se retrouveront souvent à la racine. Donc changer le chemin par : content: ["./*.{html,js}"],

3. Ajoutez les directives @tailwind pour chacune des couches de Tailwind à votre fichier CSS principal.

Créer un dossier src et à l'intérieur un fichier input.css. Ajouter ce qui suit dedans :

