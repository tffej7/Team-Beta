<?php
$title = 'Catagories';
include('includes/header.php');
include('includes/nav_header.php');
include('includes/modal_actions.php');
?>

<!-- SEARCH -->
<section id="search" class="py-4 mb-4 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Categories...">
          <div class="input-group-append">
            <button class="btn btn-dark">Search</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CATEGORIES -->
<section id="categories">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4>Latest Categories</h4>
          </div>
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Web Development</td>
                <td>May 10 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Tech Gadgets</td>
                <td>May 11 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Business</td>
                <td>May 13 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Health & Wellness</td>
                <td>May 15 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</section>

<?php
include('includes/nav_footer.php');
include('includes/footer.php');
?>