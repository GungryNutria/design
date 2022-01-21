<section class="contact-section" id="contacto">
    <br><br><br>
    <form action="src/php/sendEmail.php" method="post" class="form">
        <h1 class="title">Comienza tu Proyecto</h1>
        <br><br>
        <div class="form-container">
            <div class="form-box">
                <p>Nombre Completo</p>
                <input type="text" name="nombre" id="" required>
                <br><br>
                <p>Correo Electrónico</p>
                <input type="email" name="correo" id="" required>
                <br><br>
                <p>Télefono</p>
                <input type="tel" name="telefono" id="" pattern="[0-9]{10}" required>
                <br><br>
                <p>Sitio Web o Empresa</p>
                <input type="text" name="sitio" id="" required>
                <br><br>
            </div>
            <div class="form-box">
                <p>Mensaje</p>
                <textarea name="mensaje" id="" cols="50" rows="15" required></textarea>
            </div>
        </div>
        <br>
        <input type="submit" value="Enviar" class="button" name="submit">
    </form>
    <br><br><br>
</section>