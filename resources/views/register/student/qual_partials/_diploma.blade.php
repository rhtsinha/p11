<div class="row">
  <div class="col-xs-12 col-sm-6">
    <div class="form-group">
      <label for="" class="control-label">College Name</label>
      <input type="text" placeholder="College name" name="internship[qualification][diploma][college_name]"
             class="form-control">
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="form-group">
          <label for="" class="control-label">Start Year</label>
          <input type="text" class="form-control year-datepicker" name="internship[qualification][diploma][started_at]"
                 placeholder="Started at">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="form-group">
          <label for="" class="control-label">End Year</label>
          <input type="text" class="form-control year-datepicker" name="internship[qualification][diploma][completed_at]"
                 placeholder="Completed at">
        </div>
      </div>
    </div>

  </div>
  <div class="col-xs-12 col-sm-6">
    <div class="form-group">
      <label for="" class="control-label">Stream</label>
      <select name="internship[qualification][diploma][stream]" id="" class="form-control">
        <option value="">Select</option>
        <option value="b_tech">B-Tech</option>
        <option value="bse_physics">BSE - Physics</option>
        <option value="bse_maths">BSE - Maths</option>
      </select>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6"><label for="" class="control-label">Type</label>
        <select name="internship[qualification][diploma][mark_type]" id="" class="form-control">
          <option value="percentage" selected>Percentage</option>
          <option value="cgpa_4">CGPA 4</option>
          <option value="cgpa_10">CGPA 10</option>
        </select>
      </div>
      <div class="col-xs-12 col-sm-6"><label for="" class="control-label">Mark</label>
        <input type="text" class="form-control" name="internship[qualification][diploma][mark]" placeholder="Performance">
      </div>
    </div>
  </div>
</div>
