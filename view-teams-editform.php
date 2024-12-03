<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTeamModal<?php echo $team['team_id']; ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
      </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editTeamModal<?php echo $team['team_id']; ?>" tabindex="-1" aria-labelledby="editTeamModalLabel<?php echo $team['team_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editTeamModalLabel<?php echo $team['team_id']; ?>">Edit team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="tNumber<?php echo $team['team_id']; ?>" class="form-label">Team number</label>
            <input type="text" class="form-control" id="tNumber<?php echo $team['team_id']; ?>" name="tNumber" value="<?php echo $team['team_number']; ?>">
          </div>
          <div class="mb-3">
            <label for="tDesc<?php echo $team['team_id']; ?>" class="form-label">Team description</label>
            <input type="text" class="form-control" id="tDesc<?php echo $team['team_id']; ?>" name="tDesc" value="<?php echo $team['team_description']; ?>">
          </div>
            <input type="hidden" name="tid" value="<?php echo $team['team_id']; ?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
