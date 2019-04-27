<?php
session_start();
if (@!$_SESSION['user']){
    header("Location:inicio.php");
}
include("header.php");
include("conexionaDB.php");
$solicitud = "SELECT * FROM pokemons";
$resultado = mysqli_query($conexion, $solicitud);
?>
<section>
  <article class="pokemon-cards">
    <div class="container">
      <h1>Pokemons</h1>

      <div class="row">
        <?php
        while ($datos = mysqli_fetch_array($resultado)) {
          ?>
          <div class="col-md-4">
            <div class="pokemon-card">
              <h3><?php echo $datos['Nombre'] . '<span>' . '(' .  $datos['Numero'] .  ')' . '</span>' ?></h3>
              <h4><?php
                  echo $datos['Tipo1'] . ' ';
                  echo $datos['Tipo2'] . ' ';
                  ?>
              </h4>
              <div class="image-container">
                <img class="main-image" src=<?php echo $datos['ImagenPoke'] ?> alt="Nombre pokemon">
              </div>
              <ul class="specs">
                <h4 class="subtitle">Base stats:</h4>
                <li>
                  <?php echo $datos['Stat1'] ?> <span><?php echo $datos['Valor1'] ?></span></li>
                <li>
                  <?php echo $datos['Stat2'] ?> <span><?php echo $datos['Valor2'] ?></span></li>
              </ul>
              <ul class="evolutions">
                <h6 class="subtitle">Evolución</h6>
                <li>
                  <h6><?php echo $datos['Evolucion1'] ?></h6>
                  <img src=<?php echo $datos['Imagen1'] ?> alt="nombre">
                </li>
                <li>
                  <h6><?php echo $datos['Evolucion2'] ?></h6>
                  <img src=<?php echo $datos['Imagen2'] ?> alt="nombre">
                </li>
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