<?php 
require_once "./app/view/loyauts/header.php";

require_once "./app/controllers/controller_admine.php";
use ControllerAdmine\Controller_Admine;
$admine = new Controller_Admine();
?>

<div class='container pt-5 mt-5 mb-5 pb-5'>
    <h1 id="delete_item"></h1>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">logine</th>
        <th scope="col">Email</th>
        <th scope="col">Tup to delete</th>
    </tr>
    </thead>

    <tbody>
            <?php
                $result = $admine->all_users();
                if($result){
                    foreach($result as $row){
                        echo "<tr>";
                        echo "<td scope='row'>" . $row["user_id"] . "</td>";
                        echo "<td>" . $row["Login"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal".$row["user_id"]."'>Delete</button></td>";
                        echo " <div class='modal fade' id='exampleModal".$row["user_id"]."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>Are you sure?</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro atque deserunt fugiat recusandae possimus saepe nemo facere harum vero corporis, hic repellat sapiente qui dolorum nesciunt. Tempora vitae eligendi est.</p>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-danger' onclick='delete_by_id(".$row["user_id"].")' data-bs-dismiss='modal' aria-label='Yes'>Yes</button>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                </div>
                                </div>
                            </div>
                            </div>";
                        echo "</tr>";
                        ?>
                       
                        <?php
                    }
                } else{
                    echo "<div class='container pt-5 mt-5 mb-5 pb-5'><div class='alert alert-danger' role='alert'>Something went wrong</div></div>";     
                }
            ?>
    </tbody>
    </table>
</div>

<?php 
require_once "./app/view/loyauts/footer.php";
?>