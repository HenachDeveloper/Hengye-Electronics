<?php include_once 'assets/includes/header.php' ?>

<article class="container mt-5 p-4">
    <div class="row">
        <div class="col-md-4">
            <span>
                <span class="info-icon">
                  <i class="fas fa-phone-alt"></i>
                </span>
                +244 943 206 010 <br> 
                info@hengye-electronics.ao
            </span>
            <address class="pt-3">
                <span class="info-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </span>
              Zona Económica Especial (ZEE) <br> Luanda-Bengo. 
              Angola
            </address>
        </div>
        <div class="col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.0432557296367!2d13.435867314340067!3d-8.968161594716916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a520353cf3b14ab%3A0x209f4c2bb0e59450!2sZEE%20Luanda!5e0!3m2!1spt-PT!2sao!4v1601312206937!5m2!1spt-PT!2sao"  width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</article>

<article class="contact-form container-fluid mt-5 mb-5 ">
    <h2 class="container title-contact pl-5 pt-5 text-left">Fale connosco</h2>
    <form class="container p-5" id="form-download" method="POST" action="dados.php">
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" placeholder="Nome" class="form-control" name="nome" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" class="form-control" name="email" >
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" name="mensagem" placeholder="Sua mensagem" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <button type="submit" class="btn btn-send form-control" name="ev" >ENVIAR</button>
                </div>
            </div>
        </div>
    </form>
</article>


<?php include_once 'assets/includes/footer.php' ?>
