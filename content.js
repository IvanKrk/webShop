


function createContent12(){

let content = `<div class="box box-default">
<div class="box-header with-border">
  <h3 class="box-title">Ticket</h3>

  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
  </div>
</div>
<!-- /.box-header -->

<div class="box-body">
<form role="form">

  <!-- select -->
  <div class="form-group">
    <label>Select</label>
    <select class="form-control">
      <option>option 1</option>
      <option>option 2</option>
      <option>option 3</option>
      <option>option 4</option>
      <option>option 5</option>
    </select>
  </div>
  <!-- textarea -->
  <div class="form-group">
    <label>Textarea</label>
    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
  </div>

  <div class="form-group">


  </div>


  <!-- radio -->
  <div class="form-group">
    <div class="radio">
      <legend>Priority</legend>
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Not urgent
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        Normal
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
        Urgent
      </label>
    </div>
  </div>
  <!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>`;


    return content;

}