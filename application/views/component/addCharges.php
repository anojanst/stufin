<div class="col-lg-9 col-md-12 p-0">   
    <div class="contact__form application-form p-3">
    <form action="<?php echo base_url('facility/charge/add'); ?>" method="POST">
        <div class="row">
            <div class="col-lg-12">
                <h4>Charge</h4>                
                <input type="hidden" name="facilityId" value="<?php echo $facilityId; ?>">
            </div>
            <div class="col-lg-4">
                <lable>Day</lable>
                <select name="day" class="mb-2">
                    <option disabled selected>Select Day</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                    <option>Sunday</option>
                </select>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <lable>Start</lable>
                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" placeholder="Start Time" name="start" />
                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <lable>End</lable>
                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" placeholder="End Time" name="end" />
                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <lable>Slot Size</lable>
                <select name="slotSize">
                    <option disabled selected>Select Slot Size</option>
                    <option value="1">1 hour</option>
                    <option value="2">2 hour</option>
                    <option value="3">3 hour</option>
                </select>
            </div>

            <div class="col-lg-4">
                <lable>Charge</lable>
                <input type="text" name="charge" placeholder="Charge">
            </div>

            <div class="col-lg-4">
                <lable>Discount</lable>
                <input type="text" name="discount" placeholder="Discount">
            </div>

            <div class="col-lg-4">
                <button type="submit" class="site-btn">Save</button>
            </div>

        </div>
    </form>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'HH:mm'
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker2').datetimepicker({
            format: 'HH:mm'
        });
    });
</script>