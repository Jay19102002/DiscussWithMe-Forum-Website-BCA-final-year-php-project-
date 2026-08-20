
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLadel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="box-shadow: -1px -1px 9px #ffffff73, 5px 5px 7px #5e687949;">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="/DiscussWithMe/partials/handleLogin.php" method="post">
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Username</label>
            <input type="text" class="form-control" id="loginEmail" name="loginEmail" style="box-shadow: -5px -5px 9px #ffffff73, 5px 5px 7px #5e687949;">
            <!-- <input type="email" class="form-control" id="loginEmail" name="loginEmail"> -->
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="loginPass" class="form-label">Password</label>
            <input type="password" class="form-control" id="loginPass" name="loginPass" style="box-shadow: -5px -5px 9px #ffffff73, 5px 5px 7px #5e687949;">
          </div>

          <button type="submit" name="submit" class="btn btn-primary" style="box-shadow:inset -2px -2px 5px #ffffff73,inset 5px 5px 7px #5e687949;">Submit</button>
        </form>
        
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div> -->
    </div>
  </div>
</div>
