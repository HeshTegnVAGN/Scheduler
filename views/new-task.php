<?php

$task = new \models\Task();

$tt = $task->add($tit, $_SESSION['user'],"",50, null);


if ($tt)
{
    echo "<script>
    // similar behavior as clicking on a link
    window.location.href = \"https://scheduler.imdibil.ru\"
</script>";
}