
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



$api_key="AIzaSyBTyca4if0ccyF5geJrKowpkngr3JmIGKU"; // Ingresar tu Api Key
$channel_id="UC52DpExIg8ubfxkIqti68OA"; // El Id del canal
$max_results="50"; // Resultados a mostrar
 
// LLamar a la API para obtener la lista de videos en JSON
$query = "https://www.googleapis.com/youtube/v3/search?key=$api_key&channelId=$channel_id&part=snippet,id&order=date&maxResults=".$max_results;
$videoList = file_get_contents($query);
 

// Convertir el JSON a Array
$results = json_decode($videoList, true);

// Para debugear
// echo "<pre>";
// print_r($results); 
// echo "</pre>";

// Recorrer los resultados
echo "<h1>Videos Recientes del Canal</h1>";
foreach ($results['items'] as $items)
{
if( isset($items['id']['videoId']) )$id = $items['id']['videoId']; //  Id del video
$title= $items['snippet']['title']; // Titulo del video
$description = $items['snippet']['description']; // Descripcion del video
$published_at = $items['snippet']['publishedAt']; // Fecha de publicacion
$channel_title = $items['snippet']['channelTitle']; // Titulo del canal
$thumbnail = $items['snippet']['thumbnails']['medium']['url']; // Imagen miniatura, 3 valores: default, medium, high
 
// Mostrar en un formato
echo "<div style='display:inline-block;width:200px;margin:10px;text-align:center;vertical-align:top'>";
echo "<img src='$thumbnail'>";
echo "<h3>$title</h3>";
echo "<p>$description</p>";
echo "<p><i>$published_at</i></p>";
echo "<p>Por <b>$channel_title</b></p>";
if( isset($id) )echo "<p><a href=\"https://youtube.com/watch?v=$id\" target='_blank'>Ver video</a></p>";
echo "</div>";
}

//test


?>
</body>
</html>


