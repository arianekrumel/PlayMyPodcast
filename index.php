<!-- Let's include the header file that we created above -->
<?php include('includes/header.php'); ?> 
<body>
 <div data-role="page">
       <header data-role="header">
           <h1>Play My Podcast</h1>
       </header>

       <div data-role="content">
           <ul data-role="listview" data-theme="d">
               <li>
                   <a href="site.php" data-transition="pop">The Show</a>
                   <span class="ui-li-count">5</span>
               </li>
               <li>
                   <a href="site.php" data-transition="pop">This American Life</a>
                    <span class="ui-li-count">5</span>
               </li>
               <li>
                   <a href="site.php" data-transition="pop">You Look Nice Today</a>
                    <span class="ui-li-count">5</span>
               </li>
           </ul>
       </div>

       <footer data-role="footer">
           <h4></h4>
       </footer>

   </div>

</body>
</html>