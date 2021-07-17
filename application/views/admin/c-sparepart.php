<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Tabel Sparepart</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/fresh-bootstrap-table"/>

  <!--  Social tags    -->
  <meta name="keywords" content="creative tim, html table, html css table, web table, freebie, free bootstrap table, bootstrap, css3 table, bootstrap table, fresh bootstrap table, frontend, modern table, responsive bootstrap table, responsive bootstrap table">

  <meta name="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Fresh Bootstrap Table by Creative Tim">
  <meta itemprop="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <!-- Twitter Card data -->

  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Fresh Bootstrap Table by Creative Tim">

  <meta name="twitter:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <meta name="twitter:data1" content="Fresh Bootstrap Table by Creative Tim">
  <meta name="twitter:label1" content="Product Type">
  <meta name="twitter:data2" content="Free">
  <meta name="twitter:label2" content="Price">

  <!-- Open Graph data -->
  <meta property="og:title" content="Fresh Bootstrap Table by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://wenzhixin.github.io/fresh-bootstrap-table/compact-table.html" />
  <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg"/>
  <meta property="og:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need." />
  <meta property="og:site_name" content="Creative Tim" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
  <link href="assets/css/demo.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

  <!--  Just for demo purpose, do not include in your project   -->
  <script src="assets/js/demo/gsdk-switch.js"></script>
  <script src="assets/js/demo/jquery.sharrre.js"></script>
  <script src="assets/js/demo/demo.js"></script>

</head>
<body>

<div class="wrapper">

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <div class="fresh-table full-color-orange">
        <!--
          Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
          Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
        -->
          <div class="toolbar">
            <button id="alertBtn" class="btn btn-default">Alert</button>
          </div>

          <table id="fresh-table" class="table">
            <thead>
              <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
              <th data-field="id">No</th>
              <th data-field="name" data-sortable="true">Code Tool</th>
              <th data-field="salary" data-sortable="true">Category</th>
              <th data-field="country" data-sortable="true">Sub Category</th>
              <th data-field="city" data-sortable="true">Machine</th>
              <th data-field="city" data-sortable="true">Name</th>
              <th data-field="city" data-sortable="true">Type</th>
              <th data-field="city" data-sortable="true">Maker</th>
              <th data-field="city" data-sortable="true">Seller</th>
              <th data-field="city" data-sortable="true">Remark</th>
              <th data-field="city" data-sortable="true">Tool PerMachine</th>
              <th data-field="city" data-sortable="true">Used Machine</th>
              <th data-field="city" data-sortable="true">Total Used</th>
              <th data-field="city" data-sortable="true">Delivery Time</th>
              <th data-field="city" data-sortable="true">Min Qty</th>
              <th data-field="city" data-sortable="true">Max Qty</th>
              <th data-field="city" data-sortable="true">Start Stock</th>
              <th data-field="city" data-sortable="true">In Tool</th>
              <th data-field="city" data-sortable="true">Out Tool</th>
              <th data-field="city" data-sortable="true">Stock End</th>
              <th data-field="city" data-sortable="true">Unit Price</th>
              
            </thead>
            <tbody>
              <?php
                  foreach ($query as $key) {               
              ?>
              <tr>
                <td>
                    <?php
                        echo($key["no"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["code_tool"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["category"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["sub_category"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["machine"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["name"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["type"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["maker"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["seller"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["remark"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["tool_permachine"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["used_machine"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["total_used"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["delivery_time"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["min_qty"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["max_qty"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["stock_start"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["in_tool"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["out_tool"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["stock_end"]);
                    ?>
                </td>
                <td>
                    <?php
                        echo($key["unit_price"]);
                    ?>
                </td>
              </tr>
              <?php
                  }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="fixed-plugin" style="top: 300px">
  <div class="dropdown open">
    <a href="#" data-toggle="dropdown">
    <i class="fa fa-cog fa-2x"> </i>
    </a>
    <ul class="dropdown-menu">
      <li class="header-title">Adjustments</li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger">
          <p>Full Background</p>
          <div class="switch"
            data-on-label="ON"
            data-off-label="OFF">
            <input type="checkbox" checked data-target="section-header" data-type="parallax"/>
          </div>
          <div class="clearfix"></div>
        </a>
      </li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger">
          <p>Colors</p>
          <div class="pull-right">
            <span class="badge filter badge-blue" data-color="blue"></span>
            <span class="badge filter badge-azure" data-color="azure"></span>
            <span class="badge filter badge-green" data-color="green"></span>
            <span class="badge filter badge-orange active" data-color="orange"></span>
            <span class="badge filter badge-red" data-color="red"></span>
          </div>
          <div class="clearfix"></div>
        </a>
      </li>
      <li class="header-title">Layouts</li>
      <li class="active">
        <a class="img-holder" href="compact-table.html">
          <img src="assets/img/compact.jpg">
          <h5>Compact Table</h5>
        </a>
      </li>
      <li>
        <a class="img-holder" href="full-screen-table.html">
          <img src="assets/img/full.jpg">
          <h5>Full Screen Table</h5>
        </a>
      </li>
    </ul>
  </div>
</div>

</body>
  <script type="text/javascript">
    var $table = $('#fresh-table')
    var $alertBtn = $('#alertBtn')

    window.operateEvents = {
      'click .like': function (e, value, row, index) {
        alert('You click like icon, row: ' + JSON.stringify(row))
        console.log(value, row, index)
      },
      'click .edit': function (e, value, row, index) {
        alert('You click edit icon, row: ' + JSON.stringify(row))
        console.log(value, row, index)
      },
      'click .remove': function (e, value, row, index) {
        $table.bootstrapTable('remove', {
          field: 'id',
          values: [row.id]
        })
      }
    }

    function operateFormatter(value, row, index) {
      return [
        '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
          '<i class="fa fa-heart"></i>',
        '</a>',
        '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
          '<i class="fa fa-edit"></i>',
        '</a>',
        '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
          '<i class="fa fa-remove"></i>',
        '</a>'
      ].join('')
    }

    $(function () {
      $table.bootstrapTable({
        classes: 'table table-hover table-striped',
        toolbar: '.toolbar',

        search: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pagination: true,
        striped: true,
        sortable: true,
        pageSize: 8,
        pageList: [8, 10, 25, 50, 100],

        formatShowingRows: function (pageFrom, pageTo, totalRows) {
          return ''
        },
        formatRecordsPerPage: function (pageNumber) {
          return pageNumber + ' rows visible'
        }
      })

      $alertBtn.click(function () {
        alert('You pressed on Alert')
      })
    })
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga')

    ga('create', 'UA-46172202-1', 'auto')
    ga('send', 'pageview')

  </script>

</html>
