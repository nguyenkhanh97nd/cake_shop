<div class="col-md-10 right-col">
      
          <div class="top-nav fixed-top" >
            <nav class="navbar navbar-inverse ">
              <div class="container-fluid">
                
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="admin.php/member/edit/<?php echo $_SESSION['user']['id'] ?>" title="<?php echo $_SESSION['user']['username'] ?>"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user']['username'] ?></a></li>
                  <li><a href="user/logout" title="Đăng xuất"><span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
                </ul>
              </div>
            </nav>
          </div> 
          <div class="main-content-admin">
            