<?php
function getDatabaseConnection() {
    // for c9
    // $host = "localhost";
    // $username = "Adrian";
    // $password = "wsn4life";
    // $dbname = "fortnite";
    
    // for heroku
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $username = "b26dde437507d2";
    $password = "2f51c9d0";
    $dbname = "heroku_c89fb504cd3a0f0";
    
    //mysql://b26dde437507d2:2f51c9d0@us-cdbr-iron-east-05.cleardb.net/heroku_c89fb504cd3a0f0?reconnect=true
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn; 
}

function add($team, $first, $second){
    $db = getDatabaseConnection();
    $sql = "INSERT INTO Current_Teams (Team_Name, Player1, Player2) 
            VALUES (:Team_Name, :Player1, :Player2)";
    $statement = $db->prepare($sql);
    $statement->execute(array(
            Team_Name => $team,
            Player1 => $first,
            Player2 => $second
    ));
}

function getTeams(){
    $db = getDatabaseConnection(); 
    $sql = "SELECT * FROM Current_Teams WHERE 1"; 
    $statement = $db->prepare($sql);
    $statement->execute();
    $items = $statement->fetchAll();
    ?>
    <table>
        <tr>
            <th>Team Name</th>
            <th>First Team Member</th>
            <th>Second Team Member</th>
        </tr>
    <?php
    foreach($items as $item){
        ?>
        <tr>    
            <td><?php echo $item["Team_Name"]?></td>
            <td><?php echo $item["Player1"]?></td>
            <td><?php echo $item["Player2"]?></td>
        </tr>
        <?php
        // <table>
        //     <tr>
        //         <th>Team Name</th>
        //         <th>First Team Member</th>
        //         <th>Second Team Member</th>
        //     </tr>
        //     <tr>
        //         <td>Team Fiji</td>
        //         <td>Adrian T.</td>
        //         <td>Mosses G.</td>
        //     </tr>
        //echo $item['Team_Name'] . " " . $item["Player1"] . " " . $item["Player2"] . "<br>";
    }
}

function getItems(){
    $db = getDatabaseConnection(); 
    // $sql = "SELECT * FROM item WHERE name LIKE '%$query%' ";
    // $sql = "SELECT * FROM item WHERE 1";
    $sql = "SELECT * FROM highlights WHERE 1"; 
    
    $statement = $db->prepare($sql);
    $statement->execute();
    
    $items = $statement->fetchAll();
    foreach($items as $item){
        $video = $item['url'];
        $pieces = explode("=", $video);
        //var res = str.split(" ");
        //document.getElementById("demo").innerHTML = res[0];
        ?>
        
        <iframe width="420" height="315"
            src="https://www.youtube.com/embed/<?php echo $pieces[1]?>"> 
        </iframe>
        <?php
        //echo $item["url"] . "<br>";
    }
    //echo $items;
    return $items;
    
    $records = $statement->fetchAll();
    echo $records;
    // foreach($records as $record)
    // {
    //     echo $record["url"] . "<br/>";
    // }
    
}

?>