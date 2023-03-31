<?php
    header('Access-Control-Allow-Origin: *');
    echo json_encode([
        "header"=><<<HTML
            <li><a href="#">{$_SERVER['HTTP_HOST']}</a></li>
            <li><a href="https://www.ramo.com.co/sobre-nosotros/" target="_blank">Sobre nosotros</a></li>
            <li><a href="https://www.ramo.com.co/familia-chocoramo/" target="_blank">Productos</a></li>
            <li><a href="https://www.ramo.com.co/sostenibilidad/" target="_blank">Sostenibilidad</a></li>
            <li><a href="https://www.ramo.com.co/pasabocas/" target="_blank">Pasabocas</a></li>
        HTML,
        "section"=>[
            "pagrahp"=><<<HTML
            <h2>El Ponque Colombiano<br><strong><span>¡Ramo!</span></strong></h2>    
            <p>Desde hace 60 años hemos hecho parte de la vida de los colombianos, 
            contribuyendo a crear momentos felices, celebraciones y millones de sonrisas.</p>
            <a href="https://www.ramo.com.co/" target="_blank">Descubrir</a>
            HTML,
            "image"=><<<HTML
                <img src="img/img1.png" class="starbucks">
            HTML        
        ],
        "footer"=><<<HTML
            <li><img src="img/img1.png" onclick="imgSlider('img/img1.png');changeCircleColor('#e23b06')"></li>
            <li><img src="img/img2.png" onclick="imgSlider('img/img2.png');changeCircleColor('#00aad9')"></li> 
            <li><img src="img/img3.png" onclick="imgSlider('img/img3.png');changeCircleColor('#592d22')"></li>   
            HTML,
        "nav"=><<<HTML
            <li><a href="https://www.facebook.com/ProductosRamo" target="_blank"><img src="img/facebook.png"></a></li>
            <li><a href="https://twitter.com/RamoColombia" target="_blank"><img src="img/twitter.png"></a></li>
            <li><a href="https://www.instagram.com/productosramo" target="_blank"><img src="img/instagram.png"></a></li>
            HTML
    ],JSON_PRETTY_PRINT);
?>