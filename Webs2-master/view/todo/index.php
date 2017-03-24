<h2>Todos</h2>

<table>
    <thead>
        <td>#</td><td>Name</td><td>Done</td><td></td>
    </thead>
    <tbody>
    <?php
        foreach($model as $todo){
            echo "<tr>";
            echo "<td>$todo->id</td><td>$todo->name</td><td>$todo->done</td>";
            echo "<td><a href='index.php?controller=Todo&action=Detail&id=" . $todo->id . "'>details</a></td>";
            echo "<td><a href='index.php?controller=Todo&action=Delete&id=" . $todo->id . "'>delete</a></td>";
            echo "</tr>";
        }

    ?>
    </tbody>
</table>