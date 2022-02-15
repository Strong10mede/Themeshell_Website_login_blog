<?php

function getMainPosts(){

    $con = mysqli_connect('127.0.0.1:3307','root');
    mysqli_select_db($con,'themeshell_website');

    $query= 'SELECT * from post  Order by date DESC limit 20';
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $query = 'SELECT name from category inner join has_category on category.id = has_category.category where has_category.post = 
        '.$row['id']; 
        $cat_result = mysqli_query($con,$query);
        $categories=''; //here cateogries because categories has to be defined to use in line 26 as categories defined in loop will be used only for in loop, not outside
        while( $category = mysqli_fetch_array($cat_result)){
            $categories = '<span class="badge badge-primary fs-5 mx-1">'.$category['name'].'</span>' ;
        }
        // not used ../images in line 21 as this getposts.php is included in index.php so it will run from there
        echo ' <article class="col-md-4 p-0">
        <div class="m-1 shadow">
            <img src="images/'.$row['id'].'.jpg" alt="'.$row['title'].'"  class="img-fluid"> 
            <div class="content py-1 px-2">
                <h2 class="fs-3 mb-1 font-weight-bold">'.$row['title'].'</h2>
                <div class="d-flex justify-content-between">
                    <p>'.substr($row['date'],0,10).'</p>
                    <p>'.$categories.'</p>
                    
                </div>
            </div>
        </div>
    </article>';
    }
}
?>