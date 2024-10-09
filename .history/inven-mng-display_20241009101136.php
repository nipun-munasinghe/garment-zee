<tbody>
    <?php
    $sql = "SELECT * FROM `inventory`;";
    $result = mysqli_query($connection, $sql);
    
    if ($result) {
        $index = 1; // Initialize the counter
        while ($row = mysqli_fetch_assoc($result)) {
            $ino = $row['Item_No'];
            $iId = $row['Inventor_Id'];
            $iname = $row['Inventory_Name'];
            $iCurntS = $row['CurrentQty'];
            $iCostPrice = $row['costPrice'];
            echo '
                <tr>
                <th scope="row">' . $index . '</th> <!-- Use index for row number -->
                <td>' . $iId . '</td>
                <td>' . $iname . '</td>
                <td>' . $iCurntS . '</td>
                <td>' . $iCostPrice . '</td>
                <td>
                    <a href="inven-mng-update.php?invenupdateid=' . $ino . '" style="background-color: rgb(0, 33, 91);
                                                                                    padding:5px; 
                                                                                    color: white; 
                                                                                    border: 1px solid black; 
                                                                                    border-radius: 8px; 
                                                                                    text-decoration: none;">Update</a>
                    <a href="inven-mng-delete.php?deleteid=' . $ino . '" style="background-color: rgb(0, 33, 91);
                                                                                    padding:5px; 
                                                                                    color: white; 
                                                                                    border: 1px solid black; 
                                                                                    border-radius: 8px; 
                                                                                    text-decoration: none;">Delete</a>
                </td>
                </tr>';
            $index++; // Increment the counter for the next row
        }
    }
    ?>
</tbody>
