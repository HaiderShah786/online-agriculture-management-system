<?php require_once("./db_connect.php"); ?>


<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Message</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $i = 1;
                                $messages = $conn->query("SELECT * FROM messages");
                                while($row = $messages->fetch_assoc()):
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++ ?></td>
                                    <td class="text-center"><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['message'] ?></td>
                                    <td class="text-center">
                          <button class="btn btn-sm btn-danger delete_message" onclick="delete_message(<?php echo $row['id'] ?>)">Delete</button>
                                </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function delete_message($id){
    start_load()
    $.ajax({
        url:'del_msg.php', // Updated URL
        method:'POST',
        data:{id:$id},
        success:function(resp){
            if(resp==1){
                alert_toast("Message successfully deleted",'success')
                setTimeout(function(){
                    location.reload()
                },1500)
            }
        }
    })
}

</script>
