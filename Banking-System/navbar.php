<html>
<head>
<style>
.nav-link {
transition: 1s ease;
background-color: #cd342e;
display: inline-block;
  padding: 5px;
}

.nav-link:hover {
border-radius:50%;
transition: 1s ease;
}
div.sdf {
  position: absolute;
  right: 50px;
} 
</style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="Homepage.php" style="color: #618685; font-size:30px; text-align: center;"><b>TSF Bank</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
      </button>
<div class="sdf">
                <a class="nav-link" href="viewusers1.php" style="color: #ffffff; font-size:20px;"> <b>All Users</b> </a>
            &nbsp;&nbsp;
                <a class="nav-link" href="viewusers.php" style="color: #ffffff; font-size:20px;"><b> Money Tansfer</b></a>
              &nbsp;&nbsp;
                <a class="nav-link" href="transactionDetails.php" style="color: #ffffff; font-size:20px;"><b>History</b></a>
</div>
    
       </nav>

</body>
       </html>