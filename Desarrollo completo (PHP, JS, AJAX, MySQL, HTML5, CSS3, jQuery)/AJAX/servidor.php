<?php 

    $tecnologias=array(
        'Frontend' => 'HTML5, CSS3, JavaScript',
        'Backend' => 'PHP, MySQL, AJAX',
        'Fullstack' => 'HTML5, CSS3, JavaScript, PHP, MySQL, AJAX',
        'Lenguajes' => array(
            'America' => 'Español, Portugues, Ingles',
            'Europa' => 'Ingles, Frances, Aleman, Noruego',
            'Asia' => 'Chino, Mandarin, Japones, Coreano'
        )
    );

    echo json_encode($tecnologias);


?>