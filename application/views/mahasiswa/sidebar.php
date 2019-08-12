            <div id="content">
              <nav class="navbar navbar-default hidden-print">
                <div class="container-fluid">

                  <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                      <i class="glyphicon glyphicon-align-left"></i>
                      <span>Toggle Sidebar</span>
                    </button>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="<?php echo base_url("mahasiswa/profil"); ?>"><?php echo $_SESSION['mahasiswa']['nama_magang']; ?></a></li>
                      <li><a href="<?php echo base_url("mahasiswa/logout"); ?>">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </nav>