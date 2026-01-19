<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inscription.css') }}">
    <title>Inscription</title>
    <style>
        .theme-toggle {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background: #333;
            color: #fff;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <button class="theme-toggle" id="theme-toggle">🌙 Mode sombre</button>
<form action="" method="post">
    @csrf

    <h3>Formulaire d'Inscription</h3>
    
        <label for="name">Nom</label>
        <input type="text"  id="name" name="name" required>

        <label for="prenom">Prenom</label>
        <input type="text"  id="prenom" name="prenom" required>

        <label for="email">Adresse mail</label>
        <input type="email"  id="email" name="email" required>

        <label for="telephone">Telephone</label>
        <input type="number"  id="telephone" name="telephone" required>

        <label for="sexe">Sexe</label>
        <select id="sexe" name="sexe" required>
            <option value="masculin">Masculin</option>
            <option value="feminin">Feminin</option>
        </select>

        <label for="structure">Structure</label>
        <input type="text"  id="structure" name="structure" required>

        <label for="fonction">Fonction</label>
        <input type="text"  id="fonction" name="fonction" required>

        <button type="submit">S'inscrire</button>
</form>

<script>
    // Basculer entre le mode sombre et clair
    const toggleBtn = document.getElementById('theme-toggle');
    const darkClass = 'dark-theme';
    const lightText = '🌙 Mode sombre';
    const darkText = '☀️ Mode clair';

    function setTheme(isDark) {
        if (isDark) {
            document.body.classList.add(darkClass);
            toggleBtn.textContent = darkText;
            localStorage.setItem('theme', 'dark');
        } else {
            document.body.classList.remove(darkClass);
            toggleBtn.textContent = lightText;
            localStorage.setItem('theme', 'light');
        }
    }

    // Initialisation du thème
    const savedTheme = localStorage.getItem('theme');
    setTheme(savedTheme === 'dark');

    toggleBtn.addEventListener('click', () => {
        const isDark = !document.body.classList.contains(darkClass);
        setTheme(isDark);
    });
</script>
</body>
</html>