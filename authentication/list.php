<style>
    table,td,th{
        border:1px solid black;
        padding:0.5em;
    }
    .container{
        padding:2em;
    }
    
</style>

<div class="container">
    <h5>User Lists</h5>
<table>
    <thead>
        <tr>
            <th>Sn</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include("connection.php");
            $sql = "select * from user";
            $res = mysqli_query($connect, $sql);
            if(mysqli_num_rows($res) > 0){
                $sn = 1;
                while($row = mysqli_fetch_assoc($res)){
                    echo "<tr>";
                    echo "<td>".$sn."</td>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td><a href = 'edit.php?id=".$row['id']."'>Edit||
                        <a href = 'delete.php?id=".$row['id']."'>Delete</td>";
                    echo "</tr>";
                    $sn++;
                }
            }
        ?>
    </tbody>
</table>
</div>