

<!-- The Modal -->
<div class="modal" id="addcatm">
  <div class="modal-dialog">
    <div class="modal-content">

<form id="addcat">
   @csrf
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Category Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Add cat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="catname" name="catname" placeholder="write name here....">
    </div>
  </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">Create</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      
      </div>
      </form>
    </div>
  </div>
</div>