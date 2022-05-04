<ul class="header">
    <?php
    
    foreach ($pages as $page){
        echo '<li><a href=".'. $page->path .'">' . $page->name . '</a></li>';
    }
    
    ?>
    <!-- <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </li> -->
</ul>