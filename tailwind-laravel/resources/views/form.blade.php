<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>Learning Tailwind</title>
</head>
<body>
 @include('header')

    <main>
        <div>
            <form action="#" method="POST">
                <div>
                    <label for="first-name">Prénom</label>
                    <input type="text" id="first-name" name="first-name" required>
                </div>

                <div>
                    <label for="last-name">Nom</label>
                    <input type="text" id="last-name" name="last-name" required>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div>
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div>
                    <label for="confirm-password">Confirmer le mot de passe</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>

                <div>
                    <label for="country">Pays</label>
                    <select id="country" name="country">
                        <option>Belgique</option>
                        <option>France</option>
                        <option>Suisse</option>
                        <option>Autre</option>
                    </select>
                </div>

                <div>
                    <input type="checkbox" id="terms" name="terms">
                    <label for="terms">J'accepte les termes et conditions</label>
                </div>

                <div>
                    <button type="">S'inscrire</button>
                </div>
            </form>
        </div>
    </main>

    @include('footer')


</body>
</html>
