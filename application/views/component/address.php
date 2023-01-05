<?php if(!$basicInfo->address): ?>
    <div class="col-lg-9 col-md-12 p-0">   
        <div class="contact__form application-form p-3">
        <form action="<?php echo base_url('updateAddress'); ?>" method="POST">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Please Fill Your Address Details</h4>
                </div>
                <div class="col-lg-6">
                    <textarea placeholder="Address" name="address"></textarea>

                    <select name="area" class="mb-2">
                        <option disabled selected>Select Area</option>
                        <option>Anudradhapura Junction</option>
                        <option>Kinniya</option>
                        <option>Muthur</option>
                        <option>Third Milepost</option>
                        <option>Trincomalee Town</option>
                    </select>
                </div>
                <div class="col-lg-6">                   
                    <button type="submit" class="site-btn">Update Address</button>
                </div>
            </div>
        </form>
        </div>
    </div>
<?php endif; ?>