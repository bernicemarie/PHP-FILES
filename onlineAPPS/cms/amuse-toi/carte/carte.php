<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <title> Game de carte</title>
  </head>
  <body>
    <main>
      <section class="player player--0 player--active">
        <h2 class="name" id="name--0">Joueur 1</h2>
        <p class="score" id="score--0">43</p>
        <p class="message" id="message--0"></p>
        <div class="current">
          <p class="current-label">Actuel</p>
          <p class="current-score" id="current--0">0</p>
        </div>
      </section>
      <section class="player player--1">
        <h2 class="name" id="name--1">Joueur 2</h2>
        <p class="score" id="score--1">24</p>
        <p class="message" id="message--1"></p>
        <div class="current">
          <p class="current-label">Actuel</p>
          <p class="current-score" id="current--1">0</p>
        </div>
      </section>

      <img src="dice/dice-5.png" alt="Playing dice" class="dice" />
      <button class="btn btn--new">🔄 Nouveau Game</button>
      <button class="btn btn--roll">🎲 Jouez</button>
      <button class="btn btn--hold">📥 Gardez</button>
    </main>
    <script src="js/script.js"></script>
  </body>
</html>
