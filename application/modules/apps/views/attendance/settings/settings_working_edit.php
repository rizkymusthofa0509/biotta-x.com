  
 <form action="<?= base_url() ?>apps/attendance/settings/working-time-update" method="post">
 <div class="row"> 
  <div class="box box-danger box-solid ">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-bank"></i> Add Working Time</h3>
      <!-- Left -->
      <div class="box-tools pull-right">
        
      </div>
      <!-- End Left --> 
    </div>
    <div class="box-body">

       
      <div class="col-md-12" style="margin-top: 20px;">
         <table class="table table-bordered table-striped"> 
          <tr>
             <td class="bold">Name</td>
             <td>
               <input type="hidden" name="hours_id" id="hours_id" class="form-control" value="<?= $det['hours_id'] ?>" >
               <input type="text" name="name" id="name" class="form-control" value="<?= $det['name'] ?>" >
             </td>
             <td class="bold">Tunjangan Shift</td>
             <td>
               <select class="form-control select2me" name="tj_shift" id="tj_shift" value="<?= $det['tj_shift'] ?>" >
                <option value="YA" <?php if ($det['tj_shift']=="YA"){echo 'selected';} ?>>YA</option>
                 <option value="TIDAK" <?php if ($det['tj_shift']=="TIDAK"){echo 'selected';} ?>>TIDAK</option>
               </select>
             </td>
           </tr>
           <tr>
             <td class="bold">Jam Masuk</td>
             <td>
                <input type="time" name="datang" id="datang" class="form-control" value="<?= $det['datang'] ?>" >
             </td>
              
           </tr>
           <tr>
             <td class="bold">Jam Pulang</td>
             <td >
              <input type="time" name="pulang" id="pulang" class="form-control" value="<?= $det['pulang'] ?>" >
             </td>  
           </tr>
            
         </table>

         <div class="col-md-12" style="margin-top: 20px;"> 
          <a onclick="window.history.back();" class="btn btn-sm bg-navy" style="border-radius: 0px;"><i class="fa fa-angle-left"></i> Back</a>
          <div class="pull-right">
            <button class="btn btn-sm bg-green" style="border-radius: 0px;"><i class="fa fa-save"></i> Save</button>
          </div> 
      </div>
      </div>
    </div> 
  </div> 
</div> 
 
</form> 