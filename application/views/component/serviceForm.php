<div class="col-lg-9 col-md-12 p-0">   
    <div class="contact__form application-form p-3">
        <form action="<?php echo base_url(); ?><?php if($service->id): echo "service/update/".$service->id; else: echo "service/add"; endif; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Add New Service</h4>
                    <input type="text" name="title" placeholder="Title" value="<?php echo $service->title; ?>" />
                    <textarea placeholder="Description" name="description"><?php echo $service->description; ?></textarea>
                    <input type="file" name="image" id="image"/>
                    <?php if($service->id): ?><img src="<?php echo base_url().$service->image; ?>" class="w-25 mb-3" /><?php endif; ?>
                    
                    <?php foreach($serviceTypes as $st): ?>
                        <div class="w-25 float-left">
                            <input 
                                type="radio" 
                                id="<?php echo $st->id; ?>" 
                                name="type" 
                                value="<?php echo $st->type; ?>" 
                                <?php if($service->id): if($st->type==$service->type):  echo "checked"; endif; endif; ?>
                            >
                            <label for="<?php echo $st->id; ?>"> <?php echo $st->type; ?></label>
                        </div>
                    <?php endforeach; ?>
                    
                    <button type="submit" class="site-btn">Save</button>
                </div>                
            </div>
        </form>
    </div>
</div>