<div class="col-md-2 left-col">
        <div class="dashboard-title page-header">
          <a href="admin.php">Minivui - Admin</a>
        </div>
        <div class="profile media">
          <div class="wrapper">
            <div class="media-left">
              <span><?php echo substr($_SESSION['user']['name'], 0,1) ?></span>
            </div>
            <div class="media-body">
              <p><?php echo $_SESSION['user']['name'] ?></p>
              <p>Master Admin</p>
            </div>
          </div> 
        </div>
        <div class="sidebar-menu">
          <div class="menu-section">
            <div class="wrapper">
              <h4>Menu</h4>
              <div class="menu-left">
                <ul class="sidebar-left">
                  <li><a><span class="glyphicon glyphicon-th-list" style="font-size: 10px;margin-right:5px"></span>  Categories<span class="caret"></span></a>
                    <ul class="submenu">
                      <li><a href="admin.php/category/add_new">Add Category</a></li>
                      <li><a href="admin.php/category/list_all">All Categories</a></li>
                    </ul>
                  </li>
                  <li><a><span class="glyphicon glyphicon-list-alt" style="font-size: 10px;margin-right:5px"></span>  Sub Categories<span class="caret"></span></a>
                    <ul class="submenu">
                      <li><a href="admin.php/subcategory/add">Add Sub Category</a></li>
                      <li><a href="admin.php/subcategory/list_all">All Sub Categories</a></li>
                    </ul>
                  </li>
                  <li><a><span class="glyphicon glyphicon-pencil" style="font-size: 10px;margin-right:5px"></span>  Product<span class="caret"></span></a>
                    <ul class="submenu">
                      <li><a href="admin.php/product/add">Add Product</a></li>
                      <li><a href="admin.php/product/list_all">All Products</a></li>
                    </ul>
                  </li>
                  <li><a><span class="glyphicon glyphicon-pencil" style="font-size: 10px;margin-right:5px"></span>  News<span class="caret"></span></a>
                    <ul class="submenu">
                      <li><a href="admin.php/news/add">Add News</a></li>
                      <li><a href="admin.php/news/list_all">All News</a></li>
                    </ul>
                  </li>
                  <li><a><span class="glyphicon glyphicon-user" style="font-size: 10px;margin-right:5px"></span>  Members<span class="caret"></span></a>
                    <ul class="submenu">
                      <li><a href="admin.php/member/add">Add Member</a></li>
                      <li><a href="admin.php/member/list_all">All Members</a></li>
                    </ul>
                  </li>
                  <li><a><span class="glyphicon glyphicon-inbox" style="font-size: 10px;margin-right:5px"></span>  Order<span class="caret"></span></a>
                    <ul class="submenu">
                      <li><a href="admin.php/order/success">Order Success</a></li>
                      <li><a href="admin.php/order/waiting">Order Waiting</a></li>
                    </ul>
                  </li>
                  <li><a href="admin.php/feedback/list_all"><span class="glyphicon glyphicon-envelope" style="font-size: 10px;margin-right:5px"></span>  Feedback</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <div class="menu-section">
            <div class="wrapper">
              <h4>Live</h4>
            </div>
          </div>
        </div>
      </div>