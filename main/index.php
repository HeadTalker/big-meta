<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo _( 'Big Meta' ); ?></title>
    <link rel="stylesheet" href="css/dist/all.styles.min.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/dist/all.scripts.min.js"></script>
  </head>
  <body class="m-b-2 m-t-3">
    <?php
    require_once( __DIR__ . '/php/main.php' ); // require our main php file
    $big_meta_visuals = new big_meta_visuals(); // init our class
    ?>
    <!-- Main Content -->
    <div class="container-fluid">

      <div class="row">
        
        <h1 class="text-xs-center p-b-2"><?php echo _( 'Big Meta' ); ?></h1>

        <div class="col-md-4">
          <div class="card card-inverse card-primary text-xs-center p-y-2">
            <div class="card-block">
              <h2><?php echo $big_meta_visuals->total_sites();?></h2>
              <span><?php echo _( 'Total Sites' ); ?></span> 
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-inverse card-success text-xs-center p-y-2">
            <div class="card-block">
              <h2><?php echo $big_meta_visuals->total_rows();?></h2>
              <span><?php echo _( 'Total Meta Tags' ); ?></span> 
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-inverse card-danger text-xs-center p-y-2">
            <div class="card-block">
              <h2><?php echo $big_meta_visuals->total_unique_tags();?></h2>
              <span><?php echo _( 'Total Unique Meta Tags' ); ?></span> 
            </div>
          </div>
        </div>

      </div>

      <div class="row m-y-1">
        <div class="col-md-12">

          <!-- Most popular meta tags table -->
          <h3 class="text-xs-center m-t-2 m-b-1"><?php echo _( 'Most Popular Meta Tags' ); ?></h3>
          <div class="table-responsive">
            <table id="most-popular-tags-table" class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>#</th> 
                  <th><?php echo _( 'Total' ); ?></th>
                  <th><?php echo _( 'Meta Tag' ); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $big_meta_visuals->most_popular_tags_table(); ?>
              </tbody>
            </table>
          </div>

          <!-- Most popular meta values table -->
          <h3 class="text-xs-center m-t-2 m-b-1"><?php echo _( 'Most Popular Meta Values' ); ?></h3>
          <div class="table-responsive">
            <table id="most-popular-values-table" class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>#</th> 
                  <th><?php echo _( 'Total' ); ?></th>
                  <th><?php echo _( 'Meta Values' ); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $big_meta_visuals->most_popular_values_table(); ?>
              </tbody>
            </table>
          </div>

          <!-- Most popular viewports table -->
          <h3 class="text-xs-center m-t-2 m-b-1"><?php echo _( 'Most Popular Viewports' ); ?></h3>
          <div class="table-responsive">
            <table id="most-popular-viewports-table" class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>#</th> 
                  <th><?php echo _( 'Total' ); ?></th>
                  <th><?php echo _( 'Viewport' ); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $big_meta_visuals->most_popular_viewports_table(); ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>

    </div>
  </body>
</html>
