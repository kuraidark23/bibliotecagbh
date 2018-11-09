<?php
require_once 'php/funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca Virtual - Soluciones GBH</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="o-container-principal">
    <header class="o-container_header">
        <img class="a-img-logo" src="assets/img/logo.png" alt="">
        <h4 class="a-title-main">BIBLIOTECA VIRTUAL GBH</h4>
        <div class="o-menu">
            <div class="m-menu-top">
                <ul>
                    <li>
                        <a href="#" title="Nuestro teléfono es: +1 809-412-5947" class="a-text-main">+1 809-412-5947</a>
                    </li>
                    <li>
                        <button class="btn btn-contact">contactenos</button>
                    </li>
                </ul>        
            </div>
            <div class="m-menu-bottom">
                <ul>
                    <li><a href="#">Item1</a></li>
                    <li>
                        <select>
                            <option value="value1">value1</option>
                            <option value="value2">value2</option>
                            <option value="value3">value3</option>
                        </select>   
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section class="o-container-section">
    <div id="status"></div>
        <?php
            $libros = getLibros();
            foreach ($libros as $key => $value) {
                $id = intval($value['id']);
                $titulo = ucwords($value['titulo']);
                $autor = ucwords($value['autor']);
                $paginas = intval($value['paginas']);
                $isbn = $value['ISBN'];
                $formato = mb_strtoupper($value['formato']);
                ?>
                <div class="o-container-book">
                    <div class="m-container-book-header">
                    </div>
                    <div class="m-container-book-body">
                        <p class="m-container-book-text">
                            <a href="#" class="a-text-title"><?php echo $titulo; ?></a><br>
                            <span class="a-divider-line">∞</span>    
                            <small><em>Autor <?php echo $autor; ?></em></small><br>
                            <small><em>ISBN <?php echo $isbn; ?></em></small><br>
                            <small><em>Paginas: <?php echo $paginas; ?></em></small><br>
                            <small><em>Formato: <?php echo $formato;  ?></em></small>
                        </p>
                    </div>    
                    <input type="hidden" name="libro" value="<?php echo $id;  ?>">
                </div>
            <?php }; ?>
    </section>
    <aside class="o-container-aside">
    <h5>TAGS</h5>
        <ul>
            <li><a href="#">Categoria 1</a></li>
            <li><a href="#">Categoria 2</a></li>
            <li><a href="#">Categoria 3</a></li>
            <li><a href="#">Categoria 4</a></li>
            <li><a href="#">Categoria 5</a></li>
        </ul>
    </aside>
    <footer class="o-container-footer"><a href="#"><small>&copy;</small>Soluciones GBH 2018</a></footer>
</div>
<script src="assets/js/funciones.js"></script>
</body>
</html>