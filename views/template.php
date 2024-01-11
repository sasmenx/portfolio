<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Basculer le menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="./">Accueil
            <span class="visually-hidden">(actif)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./blog.php">Blog</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<main class="container">
    <?= $content ?>
</main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <section>
        <h2>Expérience professionnelle</h2>
        <h3>Ingénieur logiciel chez XYZ Company</h3>
        <p>Date de début - Date de fin</p>
        <ul>
            <li>Responsabilité 1</li>
            <li>Responsabilité 2</li>
        </ul>
    </section>

    <section>
        <h2>Éducation</h2>
        <h3>Master en Informatique à l'Université ABC</h3>
        <p>Date de début - Date de fin</p>
    </section>

    <section>
        <h2>Compétences techniques</h2>
        <ul>
            <li>HTML, CSS, JavaScript</li>
            <li>PHP, MySQL</li>
            <li>Frameworks: Laravel, Symfony</li>
        </ul>
    </section>

    <section>
        <h2>Projets</h2>
        <h3>Projet 1</h3>
        <p>Description du projet 1.</p>
        <h3>Projet 2</h3>
        <p>Description du projet 2.</p>
    </section>

    <section>
        <h2>Langues</h2>
        <ul>
            <li>Français (Langue maternelle)</li>
            <li>Anglais (Courant)</li>
        </ul>
    </section>

    <section>
        <h2>Coordonnées</h2>
        <p>Email: john.doe@email.com</p>
        <p>Téléphone: +123 456 789</p>
        <p>Adresse: 123 Rue de l'Exemple, Ville</p>
    </section>
    
  </body>
</html>