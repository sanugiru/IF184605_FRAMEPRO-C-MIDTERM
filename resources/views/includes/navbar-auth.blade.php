<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/dashboard" style="padding-left: 45%;">Laundry.in</a>
      </button>
    </div>
    <div class="d-flex dropdown">
      <img src="../images/user (1).png" style="height:40px; padding-right:30px; cursor: pointer;">
      <div class="dropdown-content">
        <a href="profile.html">Profile</a>
        <a href="order-history.html">Order History</a>
        <div class="dropdown-divider"></div>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="dropdown-item">SIGN OUT</button>
        </form>
      </div>
    </div>
  </nav>
</div>