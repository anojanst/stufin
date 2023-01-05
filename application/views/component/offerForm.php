<div class="col-lg-9 col-md-12 p-0">   
    <div class="contact__form application-form p-3">
        <form action="<?php echo base_url(); ?><?php if($offer->id): echo "offer/update/".$offer->id; else: echo "offer/add"; endif; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Add New Offer</h4>
                </div>

                <div class="col-lg-12">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Title" value="<?php echo $offer->title; ?>" required/>
                </div>

                <div class="col-lg-12">
                    <label>Description</label>
                    <textarea placeholder="Description" name="description" required><?php echo $offer->description; ?></textarea>
                </div>

                <div class="col-lg-6">
                    <label>Offer Type</label>
                    <select name="type" required>
                        <option disabled <?php if(!$offer->type): echo "selected"; endif; ?>>Offer Type</option>
                        <option <?php if($offer->type=="Percentage"): echo "selected"; endif; ?>>Percentage</option>
                        <option <?php if($offer->type=="Fixed Value"): echo "selected"; endif; ?>>Fixed Value</option>
                    </select>
                </div>

                <div class="col-lg-6">
                    <label>Offer Value</label>
                    <input type="number" name="value" min="0" placeholder="Offer Value" value="<?php echo $offer->value; ?>" required/>
                </div>

                <div class="col-lg-6">
                    <label>Start Date</label>
                    <input type="date" name="start" placeholder="Start" value="<?php echo $offer->start; ?>" required/>
                </div>

                <div class="col-lg-6">
                    <label>End Date</label>
                    <input type="date" name="end" placeholder="End" value="<?php echo $offer->end; ?>" required/>
                </div>

                <div class="col-lg-6">
                    <label>Cash Or Card</label>
                    <select name="cashOrCard" required>
                        <option disabled <?php if(!$offer->cashOrCard): echo "selected"; endif; ?>>Cash Or Card</option>
                        <option <?php if($offer->cashOrCard=="Cash"): echo "selected"; endif; ?>>Cash</option>
                        <option <?php if($offer->cashOrCard=="Card"): echo "selected"; endif; ?>>Card</option>
                        <option <?php if($offer->cashOrCard=="Both"): echo "selected"; endif; ?>>Both</option>
                    </select>
                </div>

                <div class="col-lg-6">
                    <label>Minimum Spend</label>
                    <input type="number" name="minSpend" min="0" placeholder="Minimum Spend" value="<?php echo $offer->minSpend; ?>" required/>
                </div>

                <div class="col-lg-6">
                    <label>Offer Code</label>
                    <input type="Text" name="code" placeholder="Offer Code" value="<?php echo $offer->code; ?>" required/>
                </div>
                    
                <div class="col-lg-6">                    
                    <label>Image</label>
                    <input type="file" name="image" id="image"/>
                    <?php if($offer->id): ?><img src="<?php echo base_url().$offer->image; ?>" class="w-25 mb-3" /><?php endif; ?>
                </div>

                <div class="col-lg-3">
                    <button type="submit" class="site-btn">Save</button>
                </div>                
            </div>
        </form>
    </div>
</div>