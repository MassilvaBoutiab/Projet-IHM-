<footer>
<footer> 
       <div class="container ">
        <div class="foot d-flex justify-content-between">
         <a href="../index.php" ><img class="logo-foot float-left" src="../images/logo.png" alt="le logo"></a>
            <div class="d-flex justify-content-between">
              <div class="onelinkfoot">
              <h5 class="titrelink">Immobilier</h5>
              <a href="../pages/immobilier.php">Consulter annonce</a>
              <a href="../pages/deposer_annonce.php">Deposer annonce</a>
              </div>
              <div class="onelinkfoot">
              <?php
              if(isset($_SESSION["username"])){
                  echo('<h5 class="titrelink"> Nos Services</h5>
                  <a href="./pages/servicedem.php">Déménagement</a>');
              }else{
                echo('<h5 class="titrelink"> Devenez client</h5>
                <a href="../pages/inscription.php">Inscrivez-Vous</a>');
              }
              
               ?>
              </div>
              <div class="onelinkfoot">
              <h5 class="titrelink">Des questions!</h5>
              <a href="../pages/contact.php">Contactez-Nous</a>
              <a href="../pages/aboutus.php">A Propos De Nous</a>
              </div>
            </div>
           <div class="reseign ">
            <i class="fas fa-phone-square-alt"id="numero"></i><span>026200532</span><br>       
            <i class="fas fa-map-marker-alt"id="adresse"></i><span class="adres">rue khoudja khaled 
             batiment 5 tizi-ouzou</span>
             <div class="social">
             
             <a href="" title="Notre page facebook" id="fb"class="sns fab fa-facebook-f"></a>
             <a href=""title="Notre twitter" class="sns fab fa-twitter"></a>
             <a href="" title="Notre instagram" class="sns fab fa-instagram"></a>
             <a href="" title="Notre Linked-in" class="sns fab fa-linkedin"></a>
           </div>
       </div>
        </div>
        
       </div>
     </footer> 
<script src="../js/jquery"></script>
<script src="../js/js.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.bundle..js"></script>

