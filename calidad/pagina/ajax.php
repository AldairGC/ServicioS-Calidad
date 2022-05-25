<?php
require_once('config.php');

$html = '';
$page = $_GET['page'];
$rowsPerPage = NUM_ITEMS_BY_PAGE;
$offset = ($page - 1) * $rowsPerPage;
sleep(1);

$result = $connexion->query(
    'SELECT * FROM ps_product p 
    LEFT JOIN ps_product_lang pl ON (pl.id_product = p.id_product AND pl.id_lang = 1) 
    LEFT JOIN `ps_image` i ON (i.id_product = p.id_product AND cover = 1) 
    WHERE active = 1 
    ORDER BY date_upd DESC LIMIT '.$offset.', '.$rowsPerPage
);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<li class="col-lg-4">';
        $html .= '<div class="item">';
        $html .= '<img class="img-fluid mx-auto d-block" src="https://www.jose-aguilar.com/modulos-prestashop/'.$row['id_image'].'-home_default/'.$row['link_rewrite'].'.jpg" width="100" height="100" />';
        $html .= '<h3>'.utf8_encode($row['name']).'</h3>';
        $html .= '<p class="description_short">'.strip_tags(utf8_encode($row['description_short'])).'</p>';
        $html .= '<p class="price">'.round($row['price'], 2).' EUR</p>';
        $html .= '<p><a class="btn btn-primary link_rewrite mx-auto d-block" href="https://www.jose-aguilar.com/modulos-prestashop/es/'.$row['id_product'].'-'.$row['link_rewrite'].'.html" target="_blank"><i class="fa fa-eye"></i> Ver</a></p>';
        $html .= '</div>';
        $html .= '</li>';
    }
}

echo $html;
?>