<!-- <!DOCTYPE html> -->

<!-- <html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display-swap" rel="stylesheet">
  
</head>
<body> -->


<!-- <br> <br> <br> <br> <br> <br> <br> <br>    
           
<form action="/action_page.php" method="get"> -->
 
  
  <!-- <input list="browsers" name="browser" id="browser">
  
  <datalist id="browsers">
  <centre>  
    <a href="index.php"><option value="Apple"></a>
    <option value="Show the Brighest star">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
  
  <input type="submit">
</form>



</body>
</html> -->


<!-- <!DOCTYPE html>
<html>
  <body>
    <form method="get" action="submit.php">
      <input type="text" name="fruit" list="fruits">
      <datalist id="fruits">
        <option value="Brightest Star">
        <option value="Banana">
        <option value="Cherry">
        <option value="Date">
        <option value="Elderberry">
        <option value="Fig">
      </datalist>
      <input type="submit" value="Submit">
    </form>
  </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display-swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Centered Dropdown Menu</title>

	<style>
		/* .dropdown {
			position: relative;
			display: inline-block;
		} */
		/* .dropdown-content {
			display: none;
			position: absolute;
			z-index: 1;
			text-align: center;
		} */
		.dropdown:hover .dropdown-menu {
			display: block;
		}
    .datalist-container {
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.datalist-container input {
			width: 400px;
			padding: 10px;
		}
		/* .dropdown-content a {
			display: block;
			padding: 10px;
			background-color: #f1f1f1;
		} */
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .w3-tangerine {
    font-family: "Tangerine", serif;
    }
    body {
        
      background-color:black; 
      color:white;
        
    }
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand ml-2" href="#">SkyMaps</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Funfact.php">Fun Facts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#AboutUs">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#Contact">Contact Us</a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link link-light" href="querypage.php">Know Universe<span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item active">
      <form class="form-inline my-2 my-lg-0">
        <div class="dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sky Tables...
        </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="Stars.php">Stars</a>
            <a class="dropdown-item" href="Constellations.php">Constellations</a>
            <a class="dropdown-item" href="Nakshatras.php">Nakshatras</a>
          </div>
        </div>
      </form>
      </li>
    </ul>
  </div>
</nav>



<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SkyMaps</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sky Info Tables
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="Stars.php">Stars</a>
    <a class="dropdown-item" href="Constellations.php">Constellations</a>
    <a class="dropdown-item" href="Nakshatras.php">Nakshatras</a>
  </div>
</div>
    </form>

    
  </div>
</nav> -->


<!-- <img src="programming.gif" alt="Computer Man" style="width:48px;height:48px;"> -->

     <!-- <br>  <br>  <br>   -->
<section >
<div class="container-fluid">
  <img src="stars.gif"  style="width:100%;height:550px;">
  <!-- <div  class="centered h1 w3-tangerine" style="color:red";>Explore The Universe</div>  class="img-thumbnail" -->
  
  <form method="get" action="querypage.php">
    <div class="datalist-container centered d-flex">
      <input class="form-control-lg" type="text" name="query" list="queries" placeholder="Search">
      <datalist id="queries">
      <option value="Brightest Star">
        <option value="Display alpha Stars">
        <option value="Total number of Stars">
        <option value="Total number of Constellations">
        <option value="Total number of Nakshatras">
        <option value="Hottest Star">
        <option value="Most common spectral type">
        <option value="Nakshatras by size in descending order">
        <option value="Start starting with letter A">
        <option value="Constellations starting with letter C">
        <option value="Nakshatras starting with letter M">
        <option value="Top three Constellations by size">
        <option value="Oldest Star">
        <option value="Smallest Star by size">
        <option value="How many Nakshatra in Rashi">
        <option value="Stars which are not present in any Nakshatra">
        <option value="Stars present in Nakshatra Shravana">
        <option value="Constellations which are not part of any Rashi">
        <option value="All names for a Constellation">
        <option value="Rashis which are not present in any Nakshatra">
      </datalist>
      
      <button class="btn btn-outline-success " type="submit" style="height:50px;">Search</button>
      <!-- <input class="btn-outline-success" type="submit" value="Search"> -->
  </div>
                              <!-- <input type="submit" value="Search"> -->
    </form>
</div>
</section>

  <!-- <div class="container mx-auto">
    <img src="images/scene4.jpg" class="d-block mx-auto img-thumbnail"  style="width:75% ">
     -->
  
  <!-- </div>

</section> -->

    <!-- <form method="get" action="querypage.php">
    <div class="datalist-container">
      <input type="text" name="query" list="queries">
      <datalist id="queries">
        <option value="Brightest Star">
        <option value="Display alpha Stars">
        <option value="Total number of Stars">
        <option value="Total number of Constellations">
        <option value="Total number of Nakshatras">
        <option value="Hottest Star">
        <option value="Most common spectral type">
        <option value="Nakshatras by size in descending order">
        <option value="Start starting with letter A">
        <option value="Constellations starting with letter C">
        <option value="Nakshatras starting with letter M">
        <option value="Top three Constellations by size">
        <option value="Oldest Star">
        <option value="Smallest Star by size">
      </datalist>
      
      <input type="submit" value="Search">
  </div>
                              <input type="submit" value="Search"> 
    </form> -->
    <!-- </div>

 -->




    <!-- <script>
		const datalist = document.getElementById('queries');
		const query = document.getElementById('query');
		const clonedDatalist = datalist.cloneNode(true);

		// Update the options list of the cloned datalist
		query.addEventListener('query', () => {
			const value = query.value;
			const queries = Array.from(datalist.queries);
			const filteredOptions = queries.filter(option => option.value.toLowerCase().startsWith(value.toLowerCase()));
			clonedDatalist.innerHTML = '';
			filteredOptions.forEach(option => clonedDatalist.appendChild(option.cloneNode(true)));
		});

		// Replace the original datalist with the cloned datalist after submission
		document.querySelector('form').addEventListener('submit', (event) => {
			event.preventDefault();
			datalist.parentNode.replaceChild(clonedDatalist, datalist);
			query.value = '';
		});
	</script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>



<?php
// echo "<br> <br>";
// $conn = mysqli_connect('localhost','root','','dbmswebsite');
//   if (isset($_GET['query'])) {
//     $fruit = $_GET['query'];
//     if ($fruit == 'Brightest Star') {
//     //   header('Location: https://www.example.com/apple');
//     $sql = "SELECT * from stars WHERE Luminosity in(SELECT max(Luminosity) From stars)";
//     $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// echo "<center><h2>The brightest star is <b>" . $row["Name"] . "</b></h2></center>";
// // echo $_GET['fruit'];
//       exit();

//     } elseif ($fruit == 'Display alpha Stars') {
//         $sql = "select * from constellations where Brightest_Star LIKE '%Alpha%'";
//         $result = mysqli_query($conn, $sql);
// // $row = mysqli_fetch_assoc($result);
  
//              while($row = mysqli_fetch_assoc($result)){                      
//               echo " <center>".$row['Name'];                  
//                                 }
//       exit();

//     } elseif ($fruit == "Total number of Stars") {
//         $sql = "SELECT COUNT(*) as total FROM stars";
//         $result = mysqli_query($conn, $sql);
        
//         // Check if query was successful
//         if ($result) {
//             // Get total number of rows
//             $row = mysqli_fetch_assoc($result);
//             $total_rows = $row["total"];
        
//             // Output result
//             echo "<center>Total number of Stars are: " . $total_rows;
//         } else {
//             echo "Error: " . mysqli_error($conn);
//         }                              
//       exit();

//     }  elseif ($fruit == "Total number of Constellations") {
//         $sql = "SELECT COUNT(*) as total FROM constellations";
//         $result = mysqli_query($conn, $sql);
        
//         // Check if query was successful
//         if ($result) {
//             // Get total number of rows
//             $row = mysqli_fetch_assoc($result);
//             $total_rows = $row["total"];
        
//             // Output result
//             echo "<center>Total number of Constellations are: " . $total_rows;
//         } else {
//             echo "Error: " . mysqli_error($conn);
//         }                       
//       exit();

//     } elseif ($fruit == "Total number of Nakshatras") {
//         $sql = "SELECT COUNT(*) as total FROM nakshatra";
//         $result = mysqli_query($conn, $sql);
        
//         // Check if query was successful
//         if ($result) {
//             // Get total number of rows
//             $row = mysqli_fetch_assoc($result);
//             $total_rows = $row["total"];
        
//             // Output result
//             echo "<center>Total number of Nakshatras are: " . $total_rows;
//         } else {
//             echo "Error: " . mysqli_error($conn);
//         }                       
//       exit();

//     } elseif ($fruit == "Hottest Star") {
//         $sql = "select * from stars order by Temperature desc limit 1";
//         $result = mysqli_query($conn, $sql);
//         $row = mysqli_fetch_assoc($result);
//         // Check if query was successful
//        echo "<center>The hottest Star is <b>". $row['Name']."</b>";          
//       exit();

//     } elseif ($fruit == "Most common spectral type") {
//         $sql = "select Spectral_Type from stars group by Spectral_Type limit 1";
//         $result = mysqli_query($conn, $sql);
//         $row = mysqli_fetch_assoc($result);
//         // Check if query was successful
//        echo "<center>Most common spectral type is <b>". $row['Spectral_Type']."</b>";          
//       exit();

//     } elseif ($fruit == "Nakshatras by size in descending order") {
//         $sql = "select * from Nakshatra order by extent desc";
//         $result = mysqli_query($conn, $sql);
//                                 while($row = mysqli_fetch_assoc($result)){    
//                                   echo "<b>" .$row['N_name']."</b>, ";
//                                 }
//       exit();

//     } elseif ($fruit == "Stars starting with letter A") {
//         $sql = "select * from stars where Name like 'A%'";
//         $result = mysqli_query($conn, $sql);
//                                 while($row = mysqli_fetch_assoc($result)){    
//                                   echo "<center><b>" .$row['Name']."</b> ";
//                                 }
//       exit();

//     }  elseif ($fruit == "Constellations starting with letter C") {
//         $sql = "select * from constellations where Name like 'C%'";
//         $result = mysqli_query($conn, $sql);
//                                 while($row = mysqli_fetch_assoc($result)){    
//                                   echo "<b>" .$row['Name']."</b> ,";
//                                 }
//       exit();

//     }  elseif ($fruit == "Nakshatras starting with letter M") {
//         $sql = "select * from nakshatra where N_name like 'M%'";
//         $result = mysqli_query($conn, $sql);
//                                 while($row = mysqli_fetch_assoc($result)){    
//                                   echo "<center><b>" .$row['N_name']."</b> ";
//                                 }
//       exit();

//     } elseif ($fruit == "Top three Constellations by size") {
//         $sql = "select Name from constellations order by Area desc limit 3";
//         $result = mysqli_query($conn, $sql);
//                                 while($row = mysqli_fetch_assoc($result)){    
//                                   echo "<center><b>" .$row['Name']."</b> ";
//                                 }
//       exit();

//     } elseif ($fruit == "Oldest Star") {
//         $sql = "select Age from stars order by Age desc limit 1";
//         $result = mysqli_query($conn, $sql);
//         $row = mysqli_fetch_assoc($result);
//         // Check if query was successful
//        echo "<center><h2>The oldest Star is <b>". $row['Age']."</b>yrs old.</h2>";          
//       exit();

//     } elseif ($fruit == "Smallest Star by size") {
//         $sql = "select Name from stars order by Radius limit 1";
//         $result = mysqli_query($conn, $sql);
//         $row = mysqli_fetch_assoc($result);
//         // Check if query was successful
//        echo "<center><h2>The smallest Star is <b>". $row['Name']."</b></h2>";          
//       exit();
//     }
//   }
?>
<?php
echo "<br><p>";
$conn = mysqli_connect('localhost','root','Nisha@111','dbms');
  if (isset($_GET['query'])) {
    $fruit = $_GET['query'];
    if ($fruit == 'Brightest Star') {
    //   header('Location: https://www.example.com/apple');
    $sql = "SELECT * from stars WHERE Luminosity_SolarLuminosity in(SELECT max(Luminosity_SolarLuminosity) From stars)";
    $result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo "<center><h2>The brightest star is <b>" . $row["S_name"] . "</b></h2></center>";
// echo $_GET['fruit'];
      exit();
    } elseif ($fruit == 'Display alpha Stars') {
        $sql = "select * from constellations where Brightest_Star LIKE '%Alpha%'";
        $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
  
                                while($row = mysqli_fetch_assoc($result)){
                                    
                                  echo " <center><h2>".$row['C_name'];  
                                  
                              
                                }
      exit();
    } elseif ($fruit == "Total number of Stars") {
        $sql = "SELECT COUNT(*) as total FROM stars";
        $result = mysqli_query($conn, $sql);
        
        // Check if query was successful
        if ($result) {
            // Get total number of rows
            $row = mysqli_fetch_assoc($result);
            $total_rows = $row["total"];
        
            // Output result
            echo "<center><h2>Total number of Stars are: " . $total_rows;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
                                  
                              
                                
      exit();
    }  elseif ($fruit == "Total number of Constellations") {
        $sql = "SELECT COUNT(*) as total FROM constellations";
        $result = mysqli_query($conn, $sql);
        
        // Check if query was successful
        if ($result) {
            // Get total number of rows
            $row = mysqli_fetch_assoc($result);
            $total_rows = $row["total"];
        
            // Output result
            echo "<center><h2>Total number of Constellations are: " . $total_rows;
        } else {
            echo "Error: " . mysqli_error($conn);
        }                       
      exit();
    } elseif ($fruit == "Total number of Nakshatras") {
        $sql = "SELECT COUNT(*) as total FROM nakshatra";
        $result = mysqli_query($conn, $sql);
        
        // Check if query was successful
        if ($result) {
            // Get total number of rows
            $row = mysqli_fetch_assoc($result);
            $total_rows = $row["total"];
        
            // Output result
            echo "<center><h2>Total number of Nakshatras are: " . $total_rows;
        } else {
            echo "Error: " . mysqli_error($conn);
        }                       
      exit();
    } elseif ($fruit == "Hottest Star") {
        $sql = "select * from stars order by Temperature_Kelvin desc limit 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // Check if query was successful
       echo "<center><h2>The hottest Star is <b>". $row['S_name']."</b> and it has temperature of ".$row['Temperature_Kelvin']."K</h2>";          
      exit();
    } elseif ($fruit == "Most common spectral type") {
        $sql = "select Spectral_Type from stars group by Spectral_Type limit 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // Check if query was successful
       echo "<center><h2>Most common spectral type is <b>". $row['Spectral_Type']."</b></h2>";          
      exit();
    } elseif ($fruit == "Nakshatras by size in descending order") {
        $sql = "select * from nakshatra order by extent_degrees desc";
        $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){    
                                  echo "<center><h2>" .$row['N_name'];
                                }
      exit();
    } elseif ($fruit == "Start starting with letter A") {
        $sql = "select * from stars where S_name like 'A%'";
        $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){    
                                  echo "<center><h2>" .$row['S_name']."</b></h2>";
                                }
      exit();
    }  elseif ($fruit == "Constellations starting with letter C") {
        $sql = "select * from constellations where C_name like 'C%'";
        $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){    
                                  echo "<center><b><h2>" .$row['C_name'];
                                }
      exit();
    }  elseif ($fruit == "Nakshatras starting with letter M") {
        $sql = "select * from nakshatra where N_name like 'M%'";
        $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){    
                                  echo "<center><h2>" .$row['N_name']."</h2>";
                                }
      exit();
    } elseif ($fruit == "Top three Constellations by size") {
        $sql = "select C_name from constellations order by Area_square_degrees desc limit 3";
        $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)){    
                                  echo "<center><h2>" .$row['C_name']."</h2> ";
                                }
      exit();
    } elseif ($fruit == "Oldest Star") {
        $sql = "select S_name,Age_Myr from stars order by Age_Myr desc limit 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // Check if query was successful
       echo "<center><h2>The oldest Star is <b>". $row['S_name']."</b> which is ".$row['Age_Myr']."yrs old</h2>";          
      exit();
    } elseif ($fruit == "Smallest Star by size") {
        $sql = "select S_name,Radius_SolarRadius from stars order by Radius_SolarRadius limit 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // Check if query was successful
       echo "<center><h2>The smallest Star is <b>". $row['S_name']."</b> having radius of ".$row['Radius_SolarRadius']."sr</h2>";          
      exit();
    } elseif ($fruit == "Stars which are not present in any Nakshatra") {
      $sql = "select S_name from stars
      Where N_name in(select N_name from stars where N_name is null or N_name='' )";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      // Check if query was successful
      echo "<center><h2>Those Stars are:</h2>";
      while($row = mysqli_fetch_assoc($result)){
                                    
        echo "<center> <b><h2>". $row['S_name']."</b></h2>"; 
        
    
      }
exit();
    
  } elseif ($fruit == "Stars present in Nakshatra Shravana") {
    $sql = "select S_name from stars
    Where N_name in(select N_name from stars where N_name='Shravana' )";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // Check if query was successful
    echo "<center><h2>Those Stars are:</h2>";
    while($row = mysqli_fetch_assoc($result)){
                                  
      echo "<center> <b><h2>". $row['S_name']."</b></h2>"; 
      
  
    }
exit();
  
}elseif ($fruit == "How many Nakshatra in Rashi") {
  //$name = (string)readline("Enter Rashi: ");
  $sql = "call nakOfRass('Mithun')";
  
  $result = mysqli_query($conn, $sql);
  // $row = mysqli_fetch_assoc($result);
  // Check if query was successful
  echo "<center><h2>Those Nakshatras are:</h2>";
  while($row = mysqli_fetch_assoc($result)){
                                
    echo "<center><h2>". $row['N_name']."</h2>"; 
    

  }
exit();

} elseif ($fruit == "Constellations which are not part of any Rashi") {
  $sql = "select C_name from constellations Where Rashi in(select Rashi from constellations where Rashi is null or Rashi='')";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  // Check if query was successful
  echo "<center><h2>Those Constellations are:</h2>";
  while($row = mysqli_fetch_assoc($result)){
                                
    echo "<center><h2>". $row['C_name']."</h2>"; 
    

  }
exit();

}elseif ($fruit == "All names for a Constellation") {
  $sql = "call smblsm('Andromeda')";
  $result = mysqli_query($conn, $sql);
  //$row = mysqli_fetch_assoc($result);
  // Check if query was successful
  echo "<center><h2>Mythology of Constellation <b>Andromeda</b> are:</h2>";
  while($row = mysqli_fetch_assoc($result)){
                                
    echo "<center><h2>". $row['Mythology']."</h2>"; 
    

  }
exit();

}



  }
?>
