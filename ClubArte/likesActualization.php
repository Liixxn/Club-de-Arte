<?php
include 'linkBBDD.php';


$idPublicacionLiked = $_GET['q'];
$idUsuarioLiked = $_GET['id'];

if($_GET['op']==1){
    $query = "UPDATE publicacion SET contadorLike = contadorLike + 1 WHERE idPubl = $idPublicacionLiked";
    $result = mysqli_query($linkBBDD, $query);

    $query = "INSERT INTO megustas (idpubli, idUsuario) VALUES ($idPublicacionLiked, $idUsuarioLiked)";
    $result = mysqli_query($linkBBDD, $query);

} else if ($_GET['op']==2){
    $query = "UPDATE publicacion SET contadorLike = contadorLike - 1 WHERE idPubl = $idPublicacionLiked";
    $result = mysqli_query($linkBBDD, $query);

    $query = "DELETE FROM megustas WHERE idpubli=$idPublicacionLiked AND idUsuario=$idUsuarioLiked";
    $result = mysqli_query($linkBBDD, $query);

}


?>