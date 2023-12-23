<div class="container" style="margin-top:100px;">
    hello subcodes add,list,edit,delete;
     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Subject
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Subjects Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
      <div class="modal-body">
      <div class="mb-3">
            <label  class="form-label">Subject Name</label>
            <input type="text" class="form-control" placeholder="like 'Machine Learning'">
          </div>
          <div class="mb-3">
            <label  class="form-label">Alias</label>
            <input type="text" class="form-control" placeholder="alias like 'M.L'">
          </div>
          <div class="mb-3">
            <label  class="form-label">Subcode</label>
            <input type="text" class="form-control" placeholder="like 'P22CSCC32'">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
     </form>
      </div>
    </div>
  </div>
</div>
</div>