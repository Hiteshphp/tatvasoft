<div class="">
    <div class="row">
        <h3 class="event_title"></h3>
        <a href="<?php echo base_url() . $this->router->class . '/add' ?>" title="Add Event">Add Event</a>
    </div>
    <div class="row">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Dates</th>
                    <th>Occurrence</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(!empty($events))
                {
                foreach($events as $k => $event) {?>
                <tr>
                    <td><?php echo ($k+1); ?></td> 
                    <td><?php echo $event['title']; ?></td> 
                    <td><?php echo $event['start_date'] .' to '.$event['end_date']; ?></td> 
                    <td><?php echo $event['recurrence_type']; ?></td> 
                    <td>
                        <a href="<?php echo base_url() . $this->router->class . '/view/' . $event['emid'];?>" class="btn" title="View"><i class="fa fa-eye"></i></a>
                        <a href="<?php echo base_url() . $this->router->class . '/edit/' . $event['emid'];?>" class="btn" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url() . $this->router->class . '/delete/' . $event['emid'];?>" class="btn" title="Delete"><i class="fa fa-trash-o"></i></a>
                    </td> 
                </tr>
                <?php }} else {?>
                <tr><td colspan="5" class="text-center">No records found!</td></tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>