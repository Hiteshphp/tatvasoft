<div class="">
    <div class="row">
        <h3 class="event_title"><?php echo isset($eventData[0]['title']) && !empty($eventData[0]['title']) ? $eventData[0]['title'] : ''; ?></h3>
        <div class="col-md-6" style="text-align: right;"><a href="<?php echo base_url() . $this->router->class;?>" title="Back button" >Back</a></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Day Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($eventData))
                    {
                        foreach ($eventData as $k => $event)
                        {
                            ?>
                            <tr>
                                <td><?php echo $event['event_date']; ?></td> 
                                <td><?php echo date('l', strtotime($event['event_date'])); ?></td> 
                            </tr>
                        <?php }
                    }
                    ?>
                </tbody>
            </table>
            <div>
                <h4>Total Recurrence Event: <?php echo isset($totalRecurrence) && !empty($totalRecurrence) ? $totalRecurrence : '0';?></h4>
            </div>
        </div>
    </div>
</div>