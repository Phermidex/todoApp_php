<?php 
        require './views/parts/header.php';
        require './views/navigation.php';

        use App\Core\Tools;
?>
    <div class="container">
        <div class="mt-3">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseAdd" role="button" aria-expanded="false" aria-controls="collapseAdd">Add new task</button>
        <div class="collapse mt-2" id="collapseAdd">
            <div class="card card-body m-auto" style="max-width: 38rem;">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tittle</label>
                        <input type="text" class="form-control" name="tittle" id="exampleFormControlInput1" placeholder="name example">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="new" value="task"/>
                        <button class="btn btn-sm btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <div class="card mt-3 m-auto border-0" style="width: 80%;">
            <div class="card-body">
                <ul class="list-group">
                <?php echo count($dataTasks);  if(count($dataTasks) > 0) { foreach($dataTasks as $task) {
                        #$isCompleted = ($task->completed ? 'text-decoration-line-through' : 'show');
                        #$isCompletedDate = ($task->completed ? 'bg-success text-decoration-line-through text-white' : 'bg-primary');
                        #$actionUrl = Tools::baseURL("view/?get=$task->id");
                        #$infoDate = ($task->completed ? "<span class='badge $isCompletedDate float-end'>$task->updated_At</span>" : "<span class='badge $isCompletedDate float-end'>$task->created_At</span>");
                        $infoDate = 'NULL';
                        echo "<li class='list-group-item $isCompleted'>
                                <a class='stretched-link' href='$actionUrl'><span>$task->tittle</span></a>
                                $infoDate
                            </li>";
                        } } ?>
                </ul>
            </div>
        </div>
    </div>
<?php require './views/parts/footer.php';  ?>
