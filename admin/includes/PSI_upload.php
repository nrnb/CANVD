<div class="panel panel-default">
  <div class="panel-heading" id="table-name-header">
    Please upload a PSI MI-TAB file or <a href="update_table.php">Click here to update the tissues table.</a>
  </div>
  <div class="panel-body">
    <div id="panel-content">
      <div id='fields'>
        <strong>The following fields (columns) are required for this table:</strong>
        <p style='font-size:0.7em'>
          Unique identifier for interactor A, Unique identifier for interactor B, Alternative identifier for interactor A, Alternative identifier for interactor B, Aliases for A, Aliases for B, Interaction detection methods, First author, Identifier of the publication, NCBI Taxonomy identifier for interactor A, NCBI Taxonomy identifier for interactor B, Interaction types, Source databases, Interaction identifier(s), Confidence score, Complex expansion, Biological role A, Biological role B, Experimental role A, Experimental role B, Interactor type A, Interactor type B, Xref for interactor A, Xref for interactor B, Xref for the interaction, Annotations for interactor A, Annotations for interactor B, Annotations for the interaction, NCBI Taxonomy identifier for the host organism, Parameters of the interaction, Creation date, Update date, Checksum for interactor A, Checksum for interactor B, Checksum for interaction, negative,  Feature(s) for interactor A:  Feature(s) for interactor B, Stoichiometry for interactor A, Stoichiometry for interactor B, Participant identification method for interactor A, Participant identification method for interactor B
        </p>
      </div>
      <p>Note: To upload data to DV-IMPACT, the PSI-MI-TAB file must be tab separated text file with the appropriate column structure needed for the table.</p>
      <form action="upload_psi.php" method="post" enctype="multipart/form-data">
        <label for="file">Select a PSI-MI-TAB File to upload:</label>
        <input type="file" name="file" id="file"><br>
        <div data-toggle="buttons" style="margin-top:5px;">
          <label>
            <input type="radio" name="action" value="add" checked>
            Append this data to the table
          </label>
          <label>
            <input type="radio" name="action" value="replace">
            Replace the ENTIRE table with this data
          </label>
        </div>
        <button class="btn btn-md btn-primary" style="margin-top:15px;" type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>