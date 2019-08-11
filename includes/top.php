<!doctype html>
<html>
   <head>
      <title>Eliminer</title>
      <meta charset="utf-8"/>
      <link rel="stylesheet" href="css/style.css"/> 
      <script  type="text/javascript" src="includes/functions.js"></script>  
   </head>
   
   <body>
      <div class="wrap">
         <header>
            <h1>Eliday Web Scrapper</h1>
            <nav>
               <ul class="reg">
                  <li>
                     <form id="myForm" action="" method="GET">
                        <input text name="url" id="url" onClick="this.setSelectionRange(0, this.value.length)" value="http://www.zelyrics.com/lyrics/Rayvanny-Zezeta">
                         <input type="button" id="scrapbtn" onclick="myFunction()"  value="Scrap the whatever! :-)">
                     </form>
                  </li>
               </ul>
            </nav>
