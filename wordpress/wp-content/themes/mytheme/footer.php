

        <?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>
<div class="columna2">
            <h4>Suscríbete</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <input type="email" name="email" value="Ingresa tu email">
            <input type="submit" value="Enviar">       
        </div>

<?php wp_footer() ?>
</body>
</html>