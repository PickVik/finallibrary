<?php

include 'book_class.php';

if (!empty($_POST)) {
    
   if (isset($_POST['Insert'])){
        //echo 'insert';
        $Book = new Books();
        //echo 'insert end';
        $Book->insert($_POST['ISBN'], $_POST['Title'], $_POST['Type'], $_POST['Genre'], $_POST['Price'], $_POST['Borrow_status']);
                   
    }
    if (isset($_POST['Delete'])){
    //echo 'delete';
    $Book = new Books();
    
    $Book->delete($_POST['Title']);
    //echo 'delete end';
}


    if (isset($_POST['Update'])){
    
    $Book = new Books();
    $Book->update($_POST['ISBN'], $_POST['Title'], $_POST['Type'], $_POST['Genre'], $_POST['Price'], $_POST['Borrow_status']);
}

    if (isset($_POST['Search'])){
    
    $Book = new Books();
    $results= $Book->search($_POST['ISBN'], $_POST['Title'], $_POST['Type'], $_POST['Genre'], $_POST['Price'], $_POST['Borrow_status']);
   ?>           


                  
                  


            
   



<!DOCTYPE html>


<html>
    <head>
        <title>Library - Insert Books</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link href="book.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div class="container-fluid">
             <h1>Welcome to PikVik library!</h1>
             </div>
               <div class="container-fluid">
       
                  <p>You can update the library here.</p>
               </div>
                <div class="col-8">
                <img src="search.jpg" alt="book search" class="float-right"  /> 
            </div> 
 
    <form action="" method="post" > 
        <div class="container"> 
             <div> 
                 <strong>ISBN:   </strong><input type="int" name="ISBN" /> <br><br>
                 <strong>Title:  </strong> <input type="text" name="Title" /> <br><br>
                 <strong>Type:   </strong> <input type="text" name="Type" /> <br><br>
                 <strong>Genre:  </strong> <input type="text" name="Genre" /> <br><br>
                 <strong>Price:  </strong><input type="text" name="Price" /> <br><br>
                 <strong>Borrow_status:   </strong><input type="text" name="Borrow_status" /> <br><br>
            <div>
                    <input type="submit" name="Insert" value="Insert" /> 
                    <input type="submit" name="Delete" value="Delete" />
                    <input type="submit" name="Update" value="Update" />
                    <input type="submit" name="Search" value="Search" />
                    
             </div>
        </div>
    </form>
</div> 
        <div class="container" style="align-self: flex-end">
        <div class="col-3">     
        <table>
            <thead>
            <strong> <th>Book Title</th></strong>
            <strong> <th>Borrow status</th></strong>
            </thead>
            <tbody>
                

<?php foreach($results as $result) {?>
            
              <div class="row result">
                 <div class="col-12">   
                  
                      <?php echo "<tr>";?>
                        <?php echo "<td>{$result['Title']}</td>";?>
                         <?php echo "<td>{$result['Borrow_status']}</td>";?>
                       <?php echo "</tr>";?>
                 </div>
              </div>
              
             </tbody>
                 
        </table>
</div>
                  
<?php }
    }
?>                 
         
  <?php }?>
 

    </body>
      

</html>
    
