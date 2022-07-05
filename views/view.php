<?php 

        require './views/parts/header.php';
        require './views/navigation.php';
        require './parts/formDone.php';
        require './parts/formUnDone.php';
?>
    <div class="container">
        <div class="card mt-3 m-auto border-0" style="width: 80%;">
            <div class="card-body">
                <?php  foreach($dataTasks as $task) {
                        $isCompleted = ($task->completed ? 'disabled' : 'show');
                        $isCompletedDate = ($task->completed ? 'bg-success text-decoration-line-through text-white' : 'bg-primary');
                        $disabledLink = ($task->completed ? 'link-secondary' : 'stretched-link');
                        $doneAction = $isCompleted === 'show' ? formDone($task->id) : '<b>Done!</b><br/>'.formUnDone($task->id);
                        $infoDate = ($task->completed ? "<p style='margin-top: -3rem' class='badge $isCompletedDate float-end'>$task->updated_At</p>" : "<p style='margin-top: -3rem' class='badge $isCompletedDate float-end'>$task->created_At</p>");
                        echo "<div class='$isCompleted'>
                                <a href='../'>Back</a>
                                <h1>$task->tittle</h1>
                                $infoDate
                                <p class='border p-3'>$task->description</p>
                                $doneAction
                            </div>";
                        } ?>
            </div>
        </div>
    </div>
<?php require './views/parts/footer.php';  ?>
