<?php 
include("header.php");
$baseDeDatos = file_get_contents("data/pokemons.json");
$pokemons = json_decode($baseDeDatos, true);
$listado = $pokemons['Pokemon'];
?>

  <section>
    <article class="pokemon-cards">
      <div class="container">
      <h1>Pokemons</h1>    
        <div class="row">
        <?php
        foreach ($listado as $pokemon){
              ?>
          
          <div class="col-md-4">
              <div class="pokemon-card">
                <h3><?php echo $pokemon['name'] . '<span>' . '(' .  $pokemon['number'] .  ')' .'</span>' ?></h3>
                <h4><?php 
                foreach ($pokemon['type'] as $tipo){
                echo $tipo . ' ';
                }
                ?></h4>
                <div class="image-container">
                  <img class="main-image" src=<?php echo $pokemon['image'] ?> alt="Nombre pokemon">
                </div>
                
                <ul class="specs">
                  <h4 class="subtitle">Base stats:</h4>
                  <?php
                  foreach ($pokemon['Basestats'] as $stats){
                    foreach ($stats as $habilidades){
                  ?>
                      <li><?php echo $habilidades[0] ?> <span><?php echo $habilidades[1] ?></span></li>
                  <?php
                  }
                  ?>
                  <?php
                  }
                  ?>
                </ul>
                <ul class="evolutions">
                <h6 class="subtitle">Evolución</h6>
                <?php
                foreach ($pokemon['Evolutions'] as $evoluciones){
                 ?>  
                <li>
                  <h6><?php echo $evoluciones['name'] ?></h6>
                <img src=<?php echo $evoluciones['image'] ?> alt="nombre">
                </li>
                <?php
                }
               ?>
                </ul>
              </div>
            </div> 
            <?php 
        }
        ?>
        </div>
      </div>
    </article>
  </section>

  <?php 
include("footer.php");
?>
