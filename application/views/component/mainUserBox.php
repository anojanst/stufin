<?php if($basicInfo->address): ?>
    <div class="col-lg-9 col-md-12 p-3 application-form contact__form">   
        <h4>Business Home</h4>
            <div class="row m-0 p-0 mt-4">
                <?php if($basicInfo->package=="free"): ?>
                    <div class="col-lg-3 p-1">
                        <div class="addServiceBox">
                            <a href="<?php echo base_url('service/new'); ?>">
                                <i class="fa fa-plus fa-3x"></i>
                                <h6>Add Service</h6>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($services): foreach($services as $service): ?>
                    <div class="col-lg-3 p-1"> 
                        <div class="serviceBox">
                            <img src="<?php echo base_url().$service->image; ?>" />
                            <h5><?php echo $service->title; ?></h5>
                            <p><?php echo $service->description; ?></p>
                            <div class="d-flex">
                                <a href="<?php echo base_url('service/edit/'); ?><?php echo $service->id; ?>" class="primary-btn primary-btn-sm w-50">Edit</a>
                                <a href="<?php echo base_url('service/delete/'); ?><?php echo $service->id; ?>" class="primary-btn primary-btn-sm primary-danger w-50">Delete</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
            </div>



            <div class="row m-0 p-0 mt-4">
                <?php if($basicInfo->package=="free"): ?>
                    <div class="col-lg-3 p-1">
                        <div class="addServiceBox">
                            <a href="<?php echo base_url('offer/new'); ?>">
                                <i class="fa fa-plus fa-3x"></i>
                                <h6>Add Offer</h6>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($offers): foreach($offers as $offer): ?>
                    <div class="col-lg-3 p-1"> 
                        <div class="serviceBox">
                            <img src="<?php echo base_url().$offer->image; ?>" />
                            <h5><?php echo $offer->title; ?></h5>
                            <p><?php if($offer->type=="Fixed Value"): echo "Rs. "; endif; ?><?php echo $offer->value; ?><?php if($offer->type=="Percentage"): echo "%"; endif; ?></p>
                            <div class="d-flex">
                                <a href="<?php echo base_url('offer/edit/'); ?><?php echo $offer->id; ?>" class="primary-btn primary-btn-sm w-50">Edit</a>
                                <a href="<?php echo base_url('offer/delete/'); ?><?php echo $offer->id; ?>" class="primary-btn primary-btn-sm primary-danger w-50">Delete</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>