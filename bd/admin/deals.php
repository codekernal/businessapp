<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Atom-Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="bs3/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="bs3/css/bootstrap-datetimepicker.min.css">

<?php include('inc/js.php') ;?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<script src="bs3/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script src="bs3/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    
<script type="text/javascript">
$( document ).ready(function() {
  // Handler for .ready() called.

  $("#start_date").datetimepicker({
        format: "yyyy-mm-dd"
    });
});
    
</script> 
<script>
$( document ).ready(function() {
//  getDeals();

    var checkout = $('#start_date').datepicker({
            format: 'mm-dd-yyyy'
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');;

    var checkout2 = $('#end_date').datepicker({
            format: 'mm-dd-yyyy'
        }).on('changeDate', function(ev) {
          checkout2.hide();
        }).data('datepicker');;


});
</script>
</head>
<body>
<!--layout-container start-->
<div id="layout-container"> 
  <!--Left navbar start-->
  
<?php
  include('inc/left.php');
?>
  <!--main start-->
<!-- Modal -->
<div class="modal fade" id="adddeal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<input type="hidden" id="deal_id" value="">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <div class="notification-bar" id="msg" style="display: none;"></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span id="mode">Add </span> Deal</h4>
      </div>
      <div class="modal-body">


<div class="container">
  <div class="row clearfix">
    <div class="col-md-10 column">
      <form class="form-horizontal" role="form" onsubmit="return false;">
        <div class="form-group">
           <label for="inputEmail3" class="col-sm-2 control-label">Deal Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="deal_name" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row clearfix">
    <div class="col-md-10 column">
      <form class="form-horizontal" role="form" onsubmit="return false;">
        <div class="form-group">
           <label for="inputEmail3" class="col-sm-2 control-label">Start Date</label>
          <div class="col-sm-4">
            <input type="text" class="form-control form-control-inline input-medium default-date-picker" id="start_date" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row clearfix">
    <div class="col-md-10 column">
      <form class="form-horizontal" role="form" onsubmit="return false;">
        <div class="form-group">
           <label for="inputEmail3" class="col-sm-2 control-label">End Date</label>
          <div class="col-sm-4">
            <input type="text" class="form-control form-control-inline input-medium default-date-picker" id="end_date" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row clearfix">
    <div class="col-md-10 column">
      <form class="form-horizontal" role="form" onsubmit="return false;">
        <div class="form-group">
           <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
          <div class="col-sm-4">
          <textarea class="form-control" rows="2" id="desc"></textarea>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


      </div>
      <div class="modal-footer">
        <img src="images/spinner.gif" id="spinner" style="position:absolute; right:150px; display:none;">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="addUpdateDeal();" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

  <div id="main">





  <?php
    include('inc/nav.php');
  ?>
    <!--margin-container start-->
    <div class="margin-container">
    <!--scrollable wrapper start-->
      <div class="scrollable wrapper">
      <!--row start-->
        <div class="row">
         <!--col-md-12 start-->
          <div class="col-md-12">
            <div class="page-heading">
              <h1>Deals  <button type="button" data-toggle="modal" data-target="#adddeal" onclick="showDealAddPopup();" class="btn btn-primary">Add Deal</button>  </h1>
            </div>
          </div><!--col-md-12 end-->
          <div class="col-sm-6 col-md-12">
            <div class="box-info">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Deal Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody id="dealbody">

                </tbody>
              </table>
            </div>
          </div>

        </div><!--row end-->
      </div><!--scrollable wrapper end--> 
    </div><!--margin-container end--> 
  </div><!--main end--> 
</div><!--layout-container end--> 
<script>
</script>

</body>
</html>