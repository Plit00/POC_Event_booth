<?php
session_start();
if(!isset($_SESSION['user_id'])){
  echo "<meta http-equiv='refresh' content='0;url=../login.html'>";
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>POC-EVENT VR HACKING CTF</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
  </head>
  <body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">VR MINI CTF</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Problem
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="Testing_Your_Memory_Power.php?problem_id=1">Testing_Your_Memory_Power</a>
              <a class="dropdown-item" href="Spooky_Calling.php?problem_id=2">Spooky_Calling</a>
              <a class="dropdown-item"href="INFINITE_Boss.php?problem_id=3">INFINITE_Boss</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Rank
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="mainchallege.php">Main Rank</a>

            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
              echo $_SESSION['user_id'];
              ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <?php
              echo "<a class='dropdown-item' href='Unique_num_chk.php?user_name=".$_SESSION['user_id']."'>"."My Unique Number"."</a>";
              ?>
              <!-- <a class="dropdown-item" href="Unique_num_chk.php?user_name=">My Unique Number</a> -->
              <a class="dropdown-item" href="Logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">RANK
        <small>Main Challege</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">*_*</li>
      </ol>
      <style>
	.rank_row thead th {text-align:center;}
</style>
<div class="row rank_row">
	<div class="col-lg-1"></div>
		<div class="col-lg-5">
		<table class="table table-striped table-hover text-center">
      <thead>
				<tr>
					<th>Rank</th>
					<th>Name</th>
					<th>Point</th>
					<th>update</th>
				</tr>
			</thead>
			<tbody>
        <tr>
          <td>1</td>
          <td>juno</td>
          <td>373</td>
          <td>2018-11-09 15:50:22</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Circler</td>
          <td>135</td>
          <td>2018-11-09 16:16:38</td>
        </tr>
          <tr>
          <td>3</td>
          <td>withpwn</td>
          <td>133</td>
          <td>2018-11-09 15:03:47</td>
        </tr>
        <tr>
          <td>4</td>
          <td>okas832</td>
          <td>129</td>
          <td>2018-11-09 14:33:09</td>
        </tr>
        <tr>
          <td>5</td>
          <td>singi</td>
          <td>127</td>
          <td>2018-11-08 11:31:09</td>
        </tr>
          <tr>
          <td>6</td>
          <td>tonix0114</td>
          <td>122</td>
          <td>2018-11-08 15:07:34</td>
        </tr>
           <tr>
          <td>7</td>
          <td>soo</td>
          <td>117</td>
          <td>2018-11-08 15:38:51</td>
        </tr>
          <tr>
          <td>8</td>
          <td>CH1M4C</td>
          <td>111</td>
          <td>2018-11-08 14:52:23</tb>
        </tr>
        <tr>
          <td>9</td>
          <td>myria</td>
          <td>95</td>
          <td>2018-11-08 15:39:43</td>
        </tr>
							<tr>
					<td>10</td>
					<td>diana</td>
					<td>0</td>
					<td>2018-11-08 10:19:30</td>
				</tr>
						
        
      </tbody>
    </table>
  </div>
</div>


        <style>
        div.dataTables_length label {
    float: left;
    text-align: left;
    font-weight: normal;
}

div.dataTables_length select {
    width: 75px;
}

div.dataTables_filter label {
    float: right;
    font-weight: normal;
}

div.dataTables_filter input {
    width: 16em;
}

div.dataTables_info {
    padding-top: 8px;
}

div.dataTables_paginate {
    float: right;
    margin: 0;
}

div.dataTables_paginate ul.pagination {
    margin: 2px 0;
    white-space: nowrap;
}

table.dataTable,
table.dataTable td,
table.dataTable th {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}

table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
}

table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc_disabled {
    cursor: pointer;
}

table.dataTable thead .sorting {
    background: url('../images/sort_both.png') no-repeat center right;
}

table.dataTable thead .sorting_asc {
    background: url('../images/sort_asc.png') no-repeat center right;
}

table.dataTable thead .sorting_desc {
    background: url('../images/sort_desc.png') no-repeat center right;
}

table.dataTable thead .sorting_asc_disabled {
    background: url('../images/sort_asc_disabled.png') no-repeat center right;
}

table.dataTable thead .sorting_desc_disabled {
    background: url('../images/sort_desc_disabled.png') no-repeat center right;
}

table.dataTable th:active {
    outline: none;
}

/* Scrolling */

div.dataTables_scrollHead table {
    margin-bottom: 0 !important;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

div.dataTables_scrollHead table thead tr:last-child th:first-child,
div.dataTables_scrollHead table thead tr:last-child td:first-child {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}

div.dataTables_scrollBody table {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    border-top: none;
}

div.dataTables_scrollBody tbody tr:first-child th,
div.dataTables_scrollBody tbody tr:first-child td {
    border-top: none;
}

div.dataTables_scrollFoot table {
    margin-top: 0 !important;
    border-top: none;
}

/*
 * TableTools styles
 */

.table tbody tr.active td,
.table tbody tr.active th {
    color: white;
    background-color: #08C;
}

.table tbody tr.active:hover td,
.table tbody tr.active:hover th {
    background-color: #0075b0 !important;
}

.table tbody tr.active a {
    color: white;
}

.table-striped tbody tr.active:nth-child(odd) td,
.table-striped tbody tr.active:nth-child(odd) th {
    background-color: #017ebc;
}

table.DTTT_selectable tbody tr {
    cursor: pointer;
}

div.DTTT .btn {
    font-size: 12px;
    color: #333 !important;
}

div.DTTT .btn:hover {
    text-decoration: none !important;
}

ul.DTTT_dropdown.dropdown-menu {
    z-index: 2003;
}

ul.DTTT_dropdown.dropdown-menu a {
    color: #333 !important; /* needed only when demo_page.css is included */
}

ul.DTTT_dropdown.dropdown-menu li {
    position: relative;
}

ul.DTTT_dropdown.dropdown-menu li:hover a {
    color: white !important;
    background-color: #0088cc;
}

div.DTTT_collection_background {
    z-index: 2002;
}

/* TableTools information display */

div.DTTT_print_info.modal {
    height: 150px;
    margin-top: -75px;
    text-align: center;
}

div.DTTT_print_info h6 {
    margin: 1em;
    font-size: 28px;
    font-weight: normal;
    line-height: 28px;
}

div.DTTT_print_info p {
    font-size: 14px;
    line-height: 20px;
}

/*
 * FixedColumns styles
 */

div.DTFC_LeftHeadWrapper table,
div.DTFC_LeftFootWrapper table,
div.DTFC_RightHeadWrapper table,
div.DTFC_RightFootWrapper table,
table.DTFC_Cloned tr.even {
    background-color: white;
}

div.DTFC_RightHeadWrapper table,
div.DTFC_LeftHeadWrapper table {
    margin-bottom: 0 !important;
    border-top-right-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}

div.DTFC_RightHeadWrapper table thead tr:last-child th:first-child,
div.DTFC_RightHeadWrapper table thead tr:last-child td:first-child,
div.DTFC_LeftHeadWrapper table thead tr:last-child th:first-child,
div.DTFC_LeftHeadWrapper table thead tr:last-child td:first-child {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}

div.DTFC_RightBodyWrapper table,
div.DTFC_LeftBodyWrapper table {
    margin-bottom: 0 !important;
    border-top: none;
}

div.DTFC_RightBodyWrapper tbody tr:first-child th,
div.DTFC_RightBodyWrapper tbody tr:first-child td,
div.DTFC_LeftBodyWrapper tbody tr:first-child th,
div.DTFC_LeftBodyWrapper tbody tr:first-child td {
    border-top: none;
}

div.DTFC_RightFootWrapper table,
div.DTFC_LeftFootWrapper table {
    border-top: none;
}
        </style>
</tbody>
</table>
</div>
</div>

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">POC &copy; Team SCP</p>
      </div>
      <!-- /.container
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
