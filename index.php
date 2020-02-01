<?php
$json = file_get_contents("https://tan-mt-exercise-2-json.herokuapp.com/json.php");

$data = json_decode($json,true);
$list = $data['Games'];


?>

<h1>GAMES</h1>

<table border="1px">
    <tr class="head">
        <td>Name</td>
        <td>Genre/td>
        <td>Cost</td>
        <td>Rating</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['Name'];?></td>
        <td><?php echo $value['Genre'];?></td>
        <td><?php echo $value['Cost'];?></td>
        <td><?php echo $value['Rating'];?></td>
    </tr>
<?php
}
?>
</table>
