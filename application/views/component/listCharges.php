
<div class="col-lg-3"> 
</div>
<div class="col-lg-9 col-md-12 p-3 contact__form">   
    <h4>Charge List</h4>
    <div class="row m-0 p-0 mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Slot Size</th>
                    <th>Charge</th>
                    <th>Discount</th>
                    <th></th>
                </tr>
            </thead>
            <?php foreach($charges as $charge): ?>
                <tr>
                    <td><?php echo $charge->day; ?></td>
                    <td><?php echo $charge->start; ?>-<?php echo $charge->end; ?></td>
                    <td><?php echo $charge->slotSize; ?></td>
                    <td><?php echo $charge->charge; ?></td>
                    <td><?php echo $charge->discount; ?></td>
                    <td><a href="<?php echo base_url('facility/charge/delete/'); ?><?php echo $charge->id.'/'.$facilityId; ?>" class="primary-btn primary-btn-sm">Remove</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>