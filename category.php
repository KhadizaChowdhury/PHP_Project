<?php
include"includes/header.php";
?>
<div class="content">
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Add New Category</h4>
          <p class="card-category">New employees on 15th September, 2016</p>
        </div>
        <div class="card-body table-responsive">
        <form method="POST">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category Name</label>
                          <input type="text" class="form-control" name="cat_name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Category Description</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="5" name="cat_description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" name="add_cat" value="Add Category">
                    <div class="clearfix"></div>
                  </form>

                  <?php
                  if (isset($_POST['add_cat'])) {
                    # code...
                    $cat_name = $_POST['cat_name'];
                    $cat_description = $_POST['cat_description'];

                    if (empty($cat_name) || empty($cat_description)) {
                      # code...
                      echo "<div class='alert alert-danger'>Emty Field!</div>";
                    }
                    else{
                          $query = "INSERT INTO choice_category(c_name,c_desc) VALUES('$cat_name','$cat_description')";
                          $result = mysqli_query($db,$query);
                            if($result) {
                              # code...
                              header('Location: category.php');
                            }
                            else{
                              die("ADD Category Error!".mysqli_error($db));
                            }
                    }
                  }
                  //

                  ?>
                  <?php
                  if (isset($_GET['deleteId'])) {
                    # code...
                    $item_id = $_GET['deleteId'];
                    echo $item_id ;
                    $query = "DELETE FROM choice_category where c_id='$item_id'";
                    $result = mysqli_query($db,$query);
                            if($result) {
                              # code...
                              header('Location: category.php');
                            }
                            else{
                              die("delete Category Error!".mysqli_error($db));
                            }
                  }
                  ?>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-tabs card-header-warning">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <span class="nav-tabs-title">All Categories:</span>
              <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#profile" data-toggle="tab">
                    <i class="material-icons">bug_report</i> Category
                    <div class="ripple-container"></div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="profile">
              <!--<table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                    </td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Create 4 Invisible User Experiences you Never Knew About</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>-->
              <table class="table table-hover">
            <thead class="text-warning">
              <th>Serial No.</th>
              <th>Name</th>
              <th>Description</th>
              <th>Action</th>
            </thead>
            <tbody>

              <?php
              $query = "SELECT * FROM choice_category" ;
              $result = mysqli_query($db,$query);
              $count = 0 ;
              while($row = mysqli_fetch_assoc($result)) {
                $c_id     = $row['c_id'];
                $c_name   = $row['c_name'];
                $c_desc   = $row['c_desc'];
                $count++;
                ?>
                <tr>
                <td><?php echo $count;?></td>
                <td><?php echo $c_name;?></td>
                <td><?php echo $c_desc;?></td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <a href="category.php?deleteId=<?php echo $c_id ; ?>" type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm"><i class="material-icons">close</i></a>
                </td>
              </tr>
              <?php
              }


              ?>
              
            
            </tbody>
          </table>
            </div>
            <div class="tab-pane" id="messages">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                    </td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane" id="settings">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                    </td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<?php
include"includes/footer.php";
?>