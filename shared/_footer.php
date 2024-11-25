<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <!-- Inserir logotipo do site -->
          <img src="images/logometapg1.png" alt="Website Logo">
          <!-- Exibir contagem de visitantes -->
          <p>FACULDADE MMETA</p>
          <!-- Exibir fuso horário -->
          <p>R. Pedro Siqueira, 333 - Jardim Marco Zero, Macapá - AP, 68903-150 </p>
        </div>
        <div class="col-md-4">
          <p>Fuso horário: <?php
          
         
                        date_default_timezone_set('Asia/Kolkata');
                        $current_time = date('D M d Y H:i:s \G\M\TO (T)');
                        echo "<p>$current_time</p>";
                        ?></p>
        </div>
        <div class="col-md-4">
          <div class="footer-links">
           
          <p>siga-nos no</p>
          </div>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f facebook"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter twitter"></i></a>
            <a href="#"><i class="fab fa-instagram instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in linked-in"></i></a>
          </div>
        </div>
      </div>
     

</html>
