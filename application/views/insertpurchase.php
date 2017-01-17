<!--    --><?php //echo form_open('stockc/insertstock', 'class="form-material material-primary"'); ?>
<form class="form-material material-primary" method="post" action="<?php echo base_url()?>Purchase/insert">
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Product ID</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Product ID" name="p_id" id="p_id">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Type</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Type" name="type" >
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Weight</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Weight" name="weight" id="p_id">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Price</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Price" name="price" >
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >In Stock</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="In Stock" name="amount" >
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Paid</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="paid" name="amount" >
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Due</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Due" name="amount" >
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="col-md-2"></div>
        <div class=" col-md-10">
            <button type="submit" class="btn btn-primary"  name="purcsubmit">Submit</button>

        </div>
    </div>
</form>