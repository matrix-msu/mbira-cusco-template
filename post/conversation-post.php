<?php

require '../lib/site.php';

if(isset($_POST['user']) && isset($_POST['type']) && isset($_POST['id']) && isset($_POST['convo'])) {
        $table;
        $type_col;
        $type = $_POST['type'];

        if ($type == 'location') {
            $type_col = 'location_id';
            $table = 'mbira_location_comments';

        } else if ($type == 'area') { 
            $type_col = 'area_id';
            $table = 'mbira_area_comments';

        }

        $sql = "INSERT INTO ".$table." (".$type_col.", user_id, comment, replyTo, isPending) VALUES (:id, :user, :comment, null, 'yes')";


        try {
            $pdo = new PDO("mysql:dbname=$dbname;host=$dbhost;charset=utf8", $dbuser, $dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $pdo->prepare($sql);
            $statement->execute(array('id' => $_POST['id'], 'user' => $_POST['user'], 'comment' => $_POST['convo'] ));
        }
        catch(PDOException $pdoE)
        {
            echo $pdoE->getMessage().'<br/>';
            var_dump($pdoE);
        }
}

header("location: ../conversations.php?type=".$_POST['type']."&id=".$_POST['id']);

