<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=hallesofgames;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$getAllDays = $db->prepare("SELECT * FROM prgdays ORDER BY codeDay");
$getAllDays->execute();

$days = $getAllDays->fetchAll();


$getAllTypes = $db->prepare("SELECT * FROM prgtypes ORDER BY codeType");
$getAllTypes->execute();

$types = $getAllTypes->fetchAll();


$getProgram = $db->prepare("SELECT prg.id, prg.startTime, prg.endTime, prg.label, prg.icon, prg.codeType, prg.codeDay FROM prg ORDER BY prg.startTime;");
$getProgram->execute();

$program = [];
while ($row = $getProgram->fetch(PDO::FETCH_ASSOC)) {
    $program[$row['codeDay']][] = $row;
}