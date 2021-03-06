<div class="panel panel-primary">
  <div class="panel-heading" id="table-name-header">
    Please upload either PNG (image) or TXT or PWM files.
  </div>
  <div class="panel-body">
    <div id="panel-content">

      <form id="fileupload" action="backend/data/upload.php" method="POST" enctype="multipart/form-data">
        <div class="row text-center fileupload-buttonbar">
          <span class="btn btn-success btn-sm fileinput-button">
              <i class="glyphicon glyphicon-plus"></i>
              <span>Add files...</span>
              <input type="file" name="files[]" multiple>
          </span>
          <button type="submit" class="btn btn-primary btn-sm start">
              <i class="glyphicon glyphicon-upload"></i>
              <span>Start upload</span>
          </button>
          <button type="reset" class="btn btn-warning btn-sm cancel">
              <i class="glyphicon glyphicon-ban-circle"></i>
              <span>Cancel upload</span>
          </button>
          <span class="fileupload-process"></span>
        </div>

        <div class="row text-center fileupload-radio">
          <label class="radio-inline">
            <input type="radio" name="directory" value="IMG" checked="checked"> PNG/IMAGE Folder
          </label>
          <label class="radio-inline">
            <input type="radio" name="directory" value="TXT"> TXT Folder
          </label>
          <label class="radio-inline">
            <input type="radio" name="directory" value="PWM"> PWM Folder
          </label>
        </div>
        <div class="row text-center text-danger fileupload-radio-error">Please select the directory</div>

        <div class="row text-center fileupload-progress fade">
          <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
          </div>
          <div class="progress-extended">&nbsp;</div>
        </div>

        <div class="row text-center">
          <table role="presentation" class="table table-striped">
            <tbody class="files"></tbody>
          </table>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="panel panel-info">
  <div class="panel-heading" id="table-name-header"><strong>Search & Delete</strong></div>
  <div class="panel-body">
    <div id="panel-content">
      <a href="search-data.php">Search for a specific data</a>
    </div>
  </div>
</div>
<div class="panel panel-danger">
  <div class="panel-heading" id="table-name-header"><strong>Other operations</strong></div>
  <div class="panel-body">
    <div class="panel-content text-center">
      <a data-dir="png" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#warningModal">
        Empty the PNG data directory
      </a>
      <a data-dir="txt" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#warningModal">
        Empty the TXT data directory
      </a>
      <a data-dir="pwm" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#warningModal">
        Empty the PWM data directory
      </a>
    </div>
  </div>
</div>

<div class="modal fade" id="warningModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Warning</h4>
      </div>
      <div class="modal-body">
        <p>The action is ireversible. Are you sure?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a href="#" type="button" class="btn btn-danger">Yes</a>
      </div>
    </div>
  </div>
</div>